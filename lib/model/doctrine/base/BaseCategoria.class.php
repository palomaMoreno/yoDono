<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Categoria', 'doctrine');

/**
 * BaseCategoria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_categoria
 * @property string $nombre
 * @property integer $esta_activa
 * 
 * @method integer   getIdCategoria()  Returns the current record's "id_categoria" value
 * @method string    getNombre()       Returns the current record's "nombre" value
 * @method integer   getEstaActiva()   Returns the current record's "esta_activa" value
 * @method Categoria setIdCategoria()  Sets the current record's "id_categoria" value
 * @method Categoria setNombre()       Sets the current record's "nombre" value
 * @method Categoria setEstaActiva()   Sets the current record's "esta_activa" value
 * 
 * @package    yodonoytodosganamos
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategoria extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('categoria');
        $this->hasColumn('id_categoria', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 30, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('esta_activa', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}