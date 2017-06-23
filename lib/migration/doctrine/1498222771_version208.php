<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version208 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addIndex('petition_signing', 'signing_widget_count_index4', array(
             'fields' => 
             array(
              0 => 'widget_id',
              1 => 'status',
              2 => 'subscribe',
              3 => 'created_at',
             ),
             ));
    }

    public function down()
    {
        $this->removeIndex('petition_signing', 'signing_widget_count_index4', array(
             'fields' => 
             array(
              0 => 'widget_id',
              1 => 'status',
              2 => 'subscribe',
              3 => 'created_at',
             ),
             ));
    }
}