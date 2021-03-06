<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Articulo', 'doctrine');

/**
 * BaseArticulo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_articulo
 * @property string $nombre
 * @property string $descripcion
 * @property string $localidad
 * @property date $fecha_alta
 * @property integer $esta_activo
 * @property integer $cod_categoria
 * @property integer $cod_usuario
 * 
 * @method integer  getIdArticulo()    Returns the current record's "id_articulo" value
 * @method string   getNombre()        Returns the current record's "nombre" value
 * @method string   getDescripcion()   Returns the current record's "descripcion" value
 * @method string   getLocalidad()     Returns the current record's "localidad" value
 * @method date     getFechaAlta()     Returns the current record's "fecha_alta" value
 * @method integer  getEstaActivo()    Returns the current record's "esta_activo" value
 * @method integer  getCodCategoria()  Returns the current record's "cod_categoria" value
 * @method integer  getCodUsuario()    Returns the current record's "cod_usuario" value
 * @method Articulo setIdArticulo()    Sets the current record's "id_articulo" value
 * @method Articulo setNombre()        Sets the current record's "nombre" value
 * @method Articulo setDescripcion()   Sets the current record's "descripcion" value
 * @method Articulo setLocalidad()     Sets the current record's "localidad" value
 * @method Articulo setFechaAlta()     Sets the current record's "fecha_alta" value
 * @method Articulo setEstaActivo()    Sets the current record's "esta_activo" value
 * @method Articulo setCodCategoria()  Sets the current record's "cod_categoria" value
 * @method Articulo setCodUsuario()    Sets the current record's "cod_usuario" value
 * 
 * @package    yodonoytodosganamos
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticulo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('articulo');
        $this->hasColumn('id_articulo', 'integer', 4, array(
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
        $this->hasColumn('descripcion', 'string', 40, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 40,
             ));
        $this->hasColumn('localidad', 'string', 40, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 40,
             ));
        $this->hasColumn('fecha_alta', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('esta_activo', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('cod_categoria', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cod_usuario', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}