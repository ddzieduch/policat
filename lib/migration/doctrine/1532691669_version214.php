<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version214 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('quota', 'product_id', 'integer', '4', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('quota', 'product_id');
    }
}