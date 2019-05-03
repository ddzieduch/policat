<?php

/**
 * MediaFileTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MediaFileTable extends Doctrine_Table {

  private $cache_subst = array();

  /**
   * Returns an instance of this class.
   *
   * @return MediaFileTable The table instance
   */
  public static function getInstance() {
    return Doctrine_Core::getTable('MediaFile');
  }

  /**
   *
   * @return Doctrine_Query
   */
  public function queryAll() {
    return $this->createQuery('m')->orderBy('m.id ASC');
  }

  /**
   *
   * @param int $petitionId
   * @return Doctrine_Query
   */
  public function queryByPetitionId($petitionId) {
    return $this->queryAll()->where('m.petition_id = ?', $petitionId);
  }

  public function dataMarkupSet(Petition $petition) {
    $files = $this->queryFilesByPetition($petition)->execute();

    $menu = array();
    foreach ($files as $file) { /* @var $file MediaFile */
      $menu[] = array(
          'name' => $file->getTitle(),
          'openWith' => '![',
          'placeHolder' => $file->getTitle(),
          'closeWith' => '](/media/' . $petition->getId() . '/' . $file->getTitle() . ')'
      );
    }

    if (!$menu) {
      return json_encode(array());
    }

    return json_encode(array(
        array('name' => 'Images', 'className' => 'policat-media', 'dropMenu' => $menu
        )
    ));
  }

  public function queryFilesByPetition(Petition $petition) {
    return $this->createQuery()
        ->where('petition_id = ?', $petition->getId())
        ->orderBy('title asc')
        ->useResultCache(true, 600);
  }

  public function clearResultCachePetition(Petition $petition) {
    $this->queryFilesByPetition($petition)->clearResultCache();
  }

  public function substInternalToExternal(Petition $petition, $subst = array()) {
    if (array_key_exists($petition->getId(), $this->cache_subst)) {
      return $this->cache_subst[$petition->getId()];
    }

    $files = $this->queryFilesByPetition($petition)->execute();

    $home = rtrim(sfContext::getInstance()->getRouting()->generate('homepage', array(), true), '/');

    foreach ($files as $file) { /* @var $file MediaFile */
      $subst['/media/' . $petition->getId() . '/' . $file->getTitle()] = $home . $file->getUrl();
    }

    $subst['/media/' . $petition->getId() . '/'] = '/images_static/pixel.png#'; // link broken images to transparent pixel

    $this->cache_subst[$petition->getId()] = $subst;

    return $subst;
  }

}
