<?php

/**
 * BaseCampaign
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property integer $billing_enabled
 * @property integer $owner_register
 * @property integer $allow_download
 * @property integer $become_petition_admin
 * @property clob $privacy_policy
 * @property clob $address
 * @property integer $data_owner_id
 * @property integer $quota_id
 * @property integer $order_id
 * @property integer $public_enabled
 * @property integer $join_enabled
 * @property Doctrine_Collection $sfGuardUser
 * @property sfGuardUser $DataOwner
 * @property Order $Order
 * @property Quota $Quota
 * @property Doctrine_Collection $Member
 * @property Doctrine_Collection $CampaignRights
 * @property Doctrine_Collection $Petition
 * @property Doctrine_Collection $Widget
 * @property Doctrine_Collection $MailingList
 * @property Doctrine_Collection $Owner
 * @property Doctrine_Collection $Tickets
 * @property Doctrine_Collection $CampaignStore
 * @property Doctrine_Collection $Downloads
 * @property Doctrine_Collection $Quotas
 * @property Offer $Offer
 * @property Doctrine_Collection $InvitationCampaign
 * 
 * @method integer             getId()                    Returns the current record's "id" value
 * @method string              getName()                  Returns the current record's "name" value
 * @method integer             getStatus()                Returns the current record's "status" value
 * @method integer             getBillingEnabled()        Returns the current record's "billing_enabled" value
 * @method integer             getOwnerRegister()         Returns the current record's "owner_register" value
 * @method integer             getAllowDownload()         Returns the current record's "allow_download" value
 * @method integer             getBecomePetitionAdmin()   Returns the current record's "become_petition_admin" value
 * @method clob                getPrivacyPolicy()         Returns the current record's "privacy_policy" value
 * @method clob                getAddress()               Returns the current record's "address" value
 * @method integer             getDataOwnerId()           Returns the current record's "data_owner_id" value
 * @method integer             getQuotaId()               Returns the current record's "quota_id" value
 * @method integer             getOrderId()               Returns the current record's "order_id" value
 * @method integer             getPublicEnabled()         Returns the current record's "public_enabled" value
 * @method integer             getJoinEnabled()           Returns the current record's "join_enabled" value
 * @method Doctrine_Collection getSfGuardUser()           Returns the current record's "sfGuardUser" collection
 * @method sfGuardUser         getDataOwner()             Returns the current record's "DataOwner" value
 * @method Order               getOrder()                 Returns the current record's "Order" value
 * @method Quota               getQuota()                 Returns the current record's "Quota" value
 * @method Doctrine_Collection getMember()                Returns the current record's "Member" collection
 * @method Doctrine_Collection getCampaignRights()        Returns the current record's "CampaignRights" collection
 * @method Doctrine_Collection getPetition()              Returns the current record's "Petition" collection
 * @method Doctrine_Collection getWidget()                Returns the current record's "Widget" collection
 * @method Doctrine_Collection getMailingList()           Returns the current record's "MailingList" collection
 * @method Doctrine_Collection getOwner()                 Returns the current record's "Owner" collection
 * @method Doctrine_Collection getTickets()               Returns the current record's "Tickets" collection
 * @method Doctrine_Collection getCampaignStore()         Returns the current record's "CampaignStore" collection
 * @method Doctrine_Collection getDownloads()             Returns the current record's "Downloads" collection
 * @method Doctrine_Collection getQuotas()                Returns the current record's "Quotas" collection
 * @method Offer               getOffer()                 Returns the current record's "Offer" value
 * @method Doctrine_Collection getInvitationCampaign()    Returns the current record's "InvitationCampaign" collection
 * @method Campaign            setId()                    Sets the current record's "id" value
 * @method Campaign            setName()                  Sets the current record's "name" value
 * @method Campaign            setStatus()                Sets the current record's "status" value
 * @method Campaign            setBillingEnabled()        Sets the current record's "billing_enabled" value
 * @method Campaign            setOwnerRegister()         Sets the current record's "owner_register" value
 * @method Campaign            setAllowDownload()         Sets the current record's "allow_download" value
 * @method Campaign            setBecomePetitionAdmin()   Sets the current record's "become_petition_admin" value
 * @method Campaign            setPrivacyPolicy()         Sets the current record's "privacy_policy" value
 * @method Campaign            setAddress()               Sets the current record's "address" value
 * @method Campaign            setDataOwnerId()           Sets the current record's "data_owner_id" value
 * @method Campaign            setQuotaId()               Sets the current record's "quota_id" value
 * @method Campaign            setOrderId()               Sets the current record's "order_id" value
 * @method Campaign            setPublicEnabled()         Sets the current record's "public_enabled" value
 * @method Campaign            setJoinEnabled()           Sets the current record's "join_enabled" value
 * @method Campaign            setSfGuardUser()           Sets the current record's "sfGuardUser" collection
 * @method Campaign            setDataOwner()             Sets the current record's "DataOwner" value
 * @method Campaign            setOrder()                 Sets the current record's "Order" value
 * @method Campaign            setQuota()                 Sets the current record's "Quota" value
 * @method Campaign            setMember()                Sets the current record's "Member" collection
 * @method Campaign            setCampaignRights()        Sets the current record's "CampaignRights" collection
 * @method Campaign            setPetition()              Sets the current record's "Petition" collection
 * @method Campaign            setWidget()                Sets the current record's "Widget" collection
 * @method Campaign            setMailingList()           Sets the current record's "MailingList" collection
 * @method Campaign            setOwner()                 Sets the current record's "Owner" collection
 * @method Campaign            setTickets()               Sets the current record's "Tickets" collection
 * @method Campaign            setCampaignStore()         Sets the current record's "CampaignStore" collection
 * @method Campaign            setDownloads()             Sets the current record's "Downloads" collection
 * @method Campaign            setQuotas()                Sets the current record's "Quotas" collection
 * @method Campaign            setOffer()                 Sets the current record's "Offer" value
 * @method Campaign            setInvitationCampaign()    Sets the current record's "InvitationCampaign" collection
 * 
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCampaign extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('campaign');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 4,
             ));
        $this->hasColumn('billing_enabled', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('owner_register', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('allow_download', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('become_petition_admin', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 4,
             ));
        $this->hasColumn('privacy_policy', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('address', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('data_owner_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('quota_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('order_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('public_enabled', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('join_enabled', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));


        $this->index('campaign_status', array(
             'fields' => 
             array(
              0 => 'status',
             ),
             ));
        $this->index('campaign_name', array(
             'fields' => 
             array(
              'name' => 
              array(
              'length' => 100,
              ),
             ),
             ));
        $this->option('options', NULL);
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('sfGuardUser', array(
             'refClass' => 'Member',
             'local' => 'campaign_id',
             'foreign' => 'sf_guard_user_id'));

        $this->hasOne('sfGuardUser as DataOwner', array(
             'local' => 'data_owner_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Order', array(
             'local' => 'order_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Quota', array(
             'local' => 'quota_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('Member', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('CampaignRights', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('Petition', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('Widget', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('MailingList', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('Owner', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('Ticket as Tickets', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('CampaignStore', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('Download as Downloads', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('Quota as Quotas', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasOne('Offer', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $this->hasMany('InvitationCampaign', array(
             'local' => 'id',
             'foreign' => 'campaign_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $cachetaggable0 = new Doctrine_Template_Cachetaggable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($cachetaggable0);
    }
}