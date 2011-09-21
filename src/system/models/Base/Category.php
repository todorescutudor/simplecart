<?php

/**
 * Base_Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property integer $route_id
 * @property boolean $active
 * @property Doctrine_Collection $Products
 * @property Route $Route
 * 
 * @package    Simplecart
 * @subpackage Model
 * @author     spekkionu <spekkionu@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Base_Category extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('category');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'unsigned' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'length' => '100',
             ));
        $this->hasColumn('path', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => '255',
             ));
        $this->hasColumn('route_id', 'integer', 4, array(
             'type' => 'integer',
             'unique' => true,
             'unsigned' => true,
             'length' => '4',
             ));
        $this->hasColumn('active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             'unsigned' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Product as Products', array(
             'refClass' => 'ProductCategory',
             'local' => 'category_id',
             'foreign' => 'product_id'));

        $this->hasOne('Route', array(
             'local' => 'route_id',
             'foreign' => 'id',
             'owningSide' => true));

        $nestedset0 = new Doctrine_Template_NestedSet(array(
             'hasManyRoots' => false,
             ));
        $this->actAs($nestedset0);
    }
}