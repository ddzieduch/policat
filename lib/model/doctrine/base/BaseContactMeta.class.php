<?php

/**
 * BaseContactMeta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $mailing_list_meta_id
 * @property integer $contact_id
 * @property string $value
 * @property integer $mailing_list_meta_choice_id
 * @property MailingListMeta $MailingListMeta
 * @property Contact $Contact
 * @property MailingListMetaChoice $MailingListMetaChoice
 * 
 * @method integer               getId()                          Returns the current record's "id" value
 * @method integer               getMailingListMetaId()           Returns the current record's "mailing_list_meta_id" value
 * @method integer               getContactId()                   Returns the current record's "contact_id" value
 * @method string                getValue()                       Returns the current record's "value" value
 * @method integer               getMailingListMetaChoiceId()     Returns the current record's "mailing_list_meta_choice_id" value
 * @method MailingListMeta       getMailingListMeta()             Returns the current record's "MailingListMeta" value
 * @method Contact               getContact()                     Returns the current record's "Contact" value
 * @method MailingListMetaChoice getMailingListMetaChoice()       Returns the current record's "MailingListMetaChoice" value
 * @method ContactMeta           setId()                          Sets the current record's "id" value
 * @method ContactMeta           setMailingListMetaId()           Sets the current record's "mailing_list_meta_id" value
 * @method ContactMeta           setContactId()                   Sets the current record's "contact_id" value
 * @method ContactMeta           setValue()                       Sets the current record's "value" value
 * @method ContactMeta           setMailingListMetaChoiceId()     Sets the current record's "mailing_list_meta_choice_id" value
 * @method ContactMeta           setMailingListMeta()             Sets the current record's "MailingListMeta" value
 * @method ContactMeta           setContact()                     Sets the current record's "Contact" value
 * @method ContactMeta           setMailingListMetaChoice()       Sets the current record's "MailingListMetaChoice" value
 * 
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseContactMeta extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contact_meta');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('mailing_list_meta_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('contact_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('value', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             ));
        $this->hasColumn('mailing_list_meta_choice_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('MailingListMeta', array(
             'local' => 'mailing_list_meta_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Contact', array(
             'local' => 'contact_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('MailingListMetaChoice', array(
             'local' => 'mailing_list_meta_choice_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}