<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version198 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->changeColumn('petition', 'style_font_family', 'string', '80', array(
             'notnull' => '1',
             'default' => '"Lucida Sans Unicode", Verdana, Arial',
             ));
    }

    public function down()
    {

    }
}