<?php

/**
 * Base_Setting
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $key
 * @property array $value
 * 
 * @package    Simplecart
 * @subpackage Model
 * @author     spekkionu <spekkionu@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Base_Setting extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('setting');
        $this->hasColumn('key', 'string', 100, array(
             'type' => 'string',
             'primary' => true,
             'length' => '100',
             ));
        $this->hasColumn('value', 'array', null, array(
             'type' => 'array',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}