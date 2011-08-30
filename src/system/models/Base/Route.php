<?php

/**
 * Base_Route
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $path
 * @property enum $type
 * @property boolean $active
 * @property Category $Category
 * @property Product $Product
 * 
 * @package    SimpleCart
 * @subpackage Models
 * @author     Jonathan Bernardi <spekkionu@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Base_Route extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('route');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'unsigned' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('path', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'notblank' => true,
             'regexp' => '/^[a-z0-9-_\\/\\.]+$/',
             'length' => '255',
             ));
        $this->hasColumn('type', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'category',
              1 => 'product',
              2 => 'page',
             ),
             ));
        $this->hasColumn('active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             'notnull' => true,
             'unsigned' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Category', array(
             'local' => 'id',
             'foreign' => 'route_id'));

        $this->hasOne('Product', array(
             'local' => 'id',
             'foreign' => 'route_id'));
    }
}