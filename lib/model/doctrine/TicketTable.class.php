<?php

/*
 * Copyright (c) 2016, webvariants GmbH <?php Co. KG, http://www.webvariants.de
 *
 * This file is released under the terms of the MIT license. You can find the
 * complete text in the attached LICENSE file or online at:
 *
 * http://www.opensource.org/licenses/mit-license.php
 */

/**
 * TicketTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TicketTable extends Doctrine_Table {

  const CREATE_AUTO_FROM = 'auto_from';
  const CREATE_TO = 'to';
  const CREATE_CAMPAIGN = 'campaign';
  const CREATE_PETITION = 'petition';
  const CREATE_WIDGET = 'widget';
  const CREATE_TARGET_LIST = 'target_list';
  const CREATE_KIND = 'kind';
  const CREATE_TEXT = 'text';
  const CREATE_CHECK_DUPLICATE = 'check_duplicate';

  static $CREATE_DEFAULTS = array(
      self::CREATE_AUTO_FROM => false,
      self::CREATE_TO => null,
      self::CREATE_CAMPAIGN => null,
      self::CREATE_PETITION => null,
      self::CREATE_WIDGET => null,
      self::CREATE_TARGET_LIST => null,
      self::CREATE_KIND => false,
      self::CREATE_CHECK_DUPLICATE => false,
      self::CREATE_TEXT => null,
  );

  const KIND_DEFAULT = 1;
  const KIND_JOIN_CAMPAIGN = 2;
  const KIND_JOIN_PETITION = 3;
  const KIND_JOIN_PETITION_ADMIN = 4;
  const KIND_WIDGET_DATA_OWNER = 5;
  const KIND_TARGET_LIST_MEMBER = 6;
  const KIND_TARGET_LIST_ACTIVATE = 7;
  const KIND_USER_UNBLOCK = 8;
  const KIND_PRIVACY_POLICY_CHANGED = 9;
  const KIND_RESIGN_DATA_OFFICER = 10;
  const KIND_CALL_DATA_OFFICER = 11;
  const KIND_PAID = 12;
  const KIND_QUOTA_MISSING = 13;
  const KIND_CONTACT_MESSAGE = 14;
  const KIND_WIDGET_CREATED = 15;
  const KIND_TARGET_LIST_BOUNCE = 16;
  const KIND_SUBSCRIPTION_ORDER_ISSUED = 17;
  const KIND_QUOTA_MISSING_OPEN_ORDER = 18;

  static $KIND_NAME = array(
      self::KIND_DEFAULT => 'Default',
      self::KIND_JOIN_CAMPAIGN => 'Join Campaign',
      self::KIND_JOIN_PETITION => 'Join Action',
      self::KIND_JOIN_PETITION_ADMIN => 'Become Member-manager (obsolete)',
      self::KIND_WIDGET_DATA_OWNER => 'Become Data-owner for Widget',
      self::KIND_TARGET_LIST_MEMBER => 'Become Target-list member',
      self::KIND_TARGET_LIST_ACTIVATE => 'Activate Target-list',
      self::KIND_USER_UNBLOCK => 'User unblock-request',
      self::KIND_PRIVACY_POLICY_CHANGED => 'Privacy policy changed',
      self::KIND_RESIGN_DATA_OFFICER => 'Resign of data officer',
      self::KIND_CALL_DATA_OFFICER => 'Call of data officer',
      self::KIND_PAID => 'Payment received',
      self::KIND_QUOTA_MISSING => 'Package required',
      self::KIND_CONTACT_MESSAGE => 'Contact message',
      self::KIND_WIDGET_CREATED => 'Widget created',
      self::KIND_TARGET_LIST_BOUNCE => 'Target-list has bounces',
      self::KIND_SUBSCRIPTION_ORDER_ISSUED => 'Subscription package for campaign renewed. Make sure to pay your invoice swiftly.',
      self::KIND_QUOTA_MISSING_OPEN_ORDER => 'Package required, open order',
  );
  static $KIND_HANDLER = array(
      self::KIND_DEFAULT => 'default',
      self::KIND_JOIN_CAMPAIGN => 'joinCampaign',
      self::KIND_JOIN_PETITION => 'joinPetition',
      self::KIND_JOIN_PETITION_ADMIN => 'none',
      self::KIND_WIDGET_DATA_OWNER => 'widgetDataOwner',
      self::KIND_TARGET_LIST_MEMBER => 'targetListMember',
      self::KIND_TARGET_LIST_ACTIVATE => 'targetListActivate',
      self::KIND_USER_UNBLOCK => 'userUnblock',
      self::KIND_PRIVACY_POLICY_CHANGED => 'privacyPolicyChanged',
      self::KIND_RESIGN_DATA_OFFICER => 'resignDataOfficer',
      self::KIND_CALL_DATA_OFFICER => 'callDataOfficer',
      self::KIND_PAID => 'none',
      self::KIND_QUOTA_MISSING => 'none',
      self::KIND_CONTACT_MESSAGE => 'none',
      self::KIND_WIDGET_CREATED => 'none',
      self::KIND_TARGET_LIST_BOUNCE => 'none',
      self::KIND_SUBSCRIPTION_ORDER_ISSUED => 'none',
      self::KIND_QUOTA_MISSING_OPEN_ORDER => 'none',
  );
  static $KIND_HANDLER_DENY = array(
      self::KIND_DEFAULT => 'default',
      self::KIND_JOIN_CAMPAIGN => 'none',
      self::KIND_JOIN_PETITION => 'none',
      self::KIND_JOIN_PETITION_ADMIN => 'none',
      self::KIND_WIDGET_DATA_OWNER => 'none',
      self::KIND_TARGET_LIST_MEMBER => 'none',
      self::KIND_TARGET_LIST_ACTIVATE => 'none',
      self::KIND_USER_UNBLOCK => 'none',
      self::KIND_PRIVACY_POLICY_CHANGED => 'none',
      self::KIND_RESIGN_DATA_OFFICER => 'none',
      self::KIND_CALL_DATA_OFFICER => 'none',
      self::KIND_PAID => 'none',
      self::KIND_QUOTA_MISSING => 'none',
      self::KIND_CONTACT_MESSAGE => 'none',
      self::KIND_WIDGET_CREATED => 'widgetDeny',
      self::KIND_TARGET_LIST_BOUNCE => 'none',
      self::KIND_SUBSCRIPTION_ORDER_ISSUED => 'none',
      self::KIND_QUOTA_MISSING_OPEN_ORDER => 'none',
  );
  static $KIND_TEMPLATE = array(
      self::KIND_DEFAULT => 'Default (#DATE#)',
      self::KIND_JOIN_CAMPAIGN => '#FROM# wants to be member of the campaign #CAMPAIGN#. (#DATE#)',
      self::KIND_JOIN_PETITION => '#FROM# wants to be member of the action #PETITION#. (#DATE#)',
      self::KIND_JOIN_PETITION_ADMIN => '#FROM# Become Member-manager (obsolete) (#DATE#)',
      self::KIND_WIDGET_DATA_OWNER => '#FROM# requests the ownership of activists data collected via the widget #WIDGET# of action #PETITION#, in campaign #CAMPAIGN#. (#DATE#)',
      self::KIND_TARGET_LIST_MEMBER => '#FROM# wants to use the email-to-list target list #TARGETLIST# for the e-action #PETITION#. (#DATE#)',
      self::KIND_TARGET_LIST_ACTIVATE => '#FROM# created the email-to-list target list #TARGETLIST# and requests you to approve it. (#DATE#)',
      self::KIND_USER_UNBLOCK => '#FROM# requests to be unblocked. (#DATE#)',
      self::KIND_PRIVACY_POLICY_CHANGED => '#FROM# Privacy policy of campaign #CAMPAIGN# changed. (#DATE#)<br />#TEXT#(#DATE#)',
      self::KIND_RESIGN_DATA_OFFICER => '#FROM# resigns of data officer of campaign #CAMPAIGN# (#DATE#)',
      self::KIND_CALL_DATA_OFFICER => '#FROM# calls to become data officer of campaign #CAMPAIGN# (#DATE#)',
      self::KIND_PAID => 'Payment for campaign #CAMPAIGN# received. (#DATE#)<br />#TEXT#',
      self::KIND_QUOTA_MISSING => 'You need to buy a package to (re-)start your action(s) in campaign #CAMPAIGN#. #BUY-PACKAGE# (#DATE#)<br />#TEXT#',
      self::KIND_CONTACT_MESSAGE => '<strong>Contact message:</strong> (#DATE#)<br />#TEXT#',
      self::KIND_WIDGET_CREATED => 'Widget #WIDGET# created. (#DATE#)<br />#TEXT#',
      self::KIND_TARGET_LIST_BOUNCE => '<strong>Manage bounces in</strong> target list #TARGETLIST# used by campaign #CAMPAIGN#. (#DATE#)',
      self::KIND_SUBSCRIPTION_ORDER_ISSUED => 'Your subscription package for campaign "#CAMPAIGN#" was renewed and an invoice was issued. Make your payment soon to ensure that all your actions remain active. Click "#BUY-PACKAGE#" for order details and your invoice (#DATE#)<br />#TEXT#',
      self::KIND_QUOTA_MISSING_OPEN_ORDER => 'You need to pay the bill to (re-)start your action(s) in campaign #CAMPAIGN#. #BUY-PACKAGE# (#DATE#)<br />#TEXT#',
  );

  const STATUS_NEW = 1;
  const STATUS_READ = 2;
  const STATUS_WAIT = 3;
  const STATUS_APPROVED = 10;
  const STATUS_DENIED = 20;

  static $STATUS_NAME = array(
      self::STATUS_NEW => 'new',
  );

  /**
   * @return TicketTable
   */
  public static function getInstance() {
    return Doctrine_Core::getTable('Ticket');
  }

  /**
   *
   * @param array $options
   * @return Ticket
   */
  public function generate($options = array(), $ticket = null) {
    $options = array_merge(self::$CREATE_DEFAULTS, $options);

    if (!$ticket)
      $ticket = new Ticket();

    if ($options[self::CREATE_KIND]) {
      $ticket->setKind($options[self::CREATE_KIND]);
    }

    if ($options[self::CREATE_AUTO_FROM]) {
      $user = sfContext::getInstance()->getUser();
      /* @var $user myUser */

      if ($user && $user->getGuardUser())
        $ticket->setFrom($user->getGuardUser());
    }

    if ($options[self::CREATE_TO]) {
      $ticket->setTo($options[self::CREATE_TO]);
    }

    if ($options[self::CREATE_TARGET_LIST]) {
      $target_list = $options[self::CREATE_TARGET_LIST];
      /* @var $target_list MailingList */
      $ticket->setTargetList($target_list);
      $ticket->setCampaign($target_list->getCampaign());
    }

    if ($options[self::CREATE_WIDGET]) {
      $widget = $options[self::CREATE_WIDGET];
      /* @var $widget Widget */
      $ticket->setWidget($widget);
      $ticket->setPetition($widget->getPetition());
      $ticket->setCampaign($widget->getCampaign());
    }

    if ($options[self::CREATE_PETITION]) {
      $petition = $options[self::CREATE_PETITION];
      /* @var $petition Petition */
      $ticket->setPetition($petition);
      $ticket->setCampaign($petition->getCampaign());
    }

    if ($options[self::CREATE_CAMPAIGN])
      $ticket->setCampaign($options[self::CREATE_CAMPAIGN]);

    if ($options[self::CREATE_TEXT])
      $ticket->setText($options[self::CREATE_TEXT]);

    if ($options[self::CREATE_CHECK_DUPLICATE]) {
      $query = $this->createQuery('t');
      if ($ticket->getToId())
        $query->where('t.to_id = ?', $ticket->getToId());
      if ($ticket->getCampaignId())
        $query->andWhere('t.campaign_id = ?', $ticket->getCampaignId());
      if ($ticket->getPetitionId())
        $query->andWhere('t.petition_id = ?', $ticket->getPetitionId());
      if ($ticket->getWidgetId())
        $query->andWhere('t.widget_id = ?', $ticket->getWidgetId());
      if ($ticket->getFromId())
        $query->andWhere('t.from_id = ?', $ticket->getFromId());
      if ($ticket->getTargetListId())
        $query->andWhere('t.target_list_id = ?', $ticket->getTargetListId());
      $query->andWhere('t.kind = ?', $ticket->getKind());
      $query->andWhereIn('t.status', array(TicketTable::STATUS_NEW, TicketTable::STATUS_READ, TicketTable::STATUS_WAIT));

      if ($query->count())
        return null;
    }

    return $ticket;
  }

  /**
   *
   * @return Doctrine_Query
   */
  public function queryAll() {
    return $this->createQuery('t')->orderBy('t.id');
  }

  public function queryForUser(sfGuardUser $user, $stati = null) {
    $query = $this->queryAll();
    $query->useQueryCache(false); // disable query cache because we get errors on some conditions

    $campaign_admin_ids = $user->getCampaignAdminIds();

    $ors = array('t.to_id = ?');
    $params = array($user->getId());

    if ($campaign_admin_ids) {
      $ors[] = 't.campaign_id IN ?';
      $params[] = $campaign_admin_ids;
    }

    if ($user->hasPermission(myUser::CREDENTIAL_ADMIN)) {
      $ors[] = '(t.petition_id IS NULL AND t.campaign_id IS NULL AND t.to_id IS NULL)';
    }

    $query->where(implode(' OR ', $ors), $params);

    $query->andWhere('t.to_id IS NULL OR t.to_id = ?', $user->getId());

    if ($stati)
      $query->andWhereIn('t.status', $stati);
    return $query;
  }

  /**
   *
   * @param sfGuardUser $user
   * @return bool
   */
  public function checkOpenUnblockTicketForUser(sfGuardUser $user) {
    return $this->createQuery('t')
        ->where('t.from_id = ?', $user->getId())
        ->andWhereIn('t.status', array(TicketTable::STATUS_NEW, TicketTable::STATUS_READ, TicketTable::STATUS_WAIT))
        ->andWhere('t.kind = ?', self::KIND_USER_UNBLOCK)
        ->count() ? true : false;
  }

  public function queryResignTicketForCampaign(Campaign $campaign, $not_id = null) {
    $query = $this->queryAll()
      ->where('t.campaign_id = ?', $campaign->getId())
      ->andWhereIn('t.status', array(TicketTable::STATUS_NEW, TicketTable::STATUS_READ, TicketTable::STATUS_WAIT))
      ->andWhere('t.kind = ?', TicketTable::KIND_RESIGN_DATA_OFFICER);

    if ($not_id)
      $query->andWhere('t.id != ?', $not_id);

    return $query;
  }

  public function queryCallTicketForCampaign(Campaign $campaign, $not_id = null) {
    $query = $this->queryAll()
      ->where('t.campaign_id = ?', $campaign->getId())
      ->andWhereIn('t.status', array(TicketTable::STATUS_NEW, TicketTable::STATUS_READ, TicketTable::STATUS_WAIT))
      ->andWhere('t.kind = ?', TicketTable::KIND_CALL_DATA_OFFICER);

    if ($not_id)
      $query->andWhere('t.id != ?', $not_id);

    return $query;
  }

  public function removeTickets($options = array()) {
    if (count($options) < 2) {
      throw new \Exception('missing options');
    }

    $query = $this->createQuery('t');

    $query->andWhereIn('t.status', array(TicketTable::STATUS_NEW, TicketTable::STATUS_READ, TicketTable::STATUS_WAIT));

    if (array_key_exists(TicketTable::CREATE_KIND, $options)) {
      $query->andWhere('t.kind = ?', $options[TicketTable::CREATE_KIND]);
    }

    if (array_key_exists(TicketTable::CREATE_TARGET_LIST, $options)) {
      $query->andWhere('t.target_list_id = ?', $options[TicketTable::CREATE_TARGET_LIST]->getId());
    }

    $query->delete()->execute();
  }

}
