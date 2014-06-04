<?php

/**
 * Articulo filter form base class.
 *
 * @package    yodonoytodosganamos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArticuloFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'localidad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_alta'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'esta_activo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_categoria' => new sfWidgetFormFilterInput(),
      'cod_usuario'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'        => new sfValidatorPass(array('required' => false)),
      'descripcion'   => new sfValidatorPass(array('required' => false)),
      'localidad'     => new sfValidatorPass(array('required' => false)),
      'fecha_alta'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'esta_activo'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_categoria' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_usuario'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('articulo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Articulo';
  }

  public function getFields()
  {
    return array(
      'id_articulo'   => 'Number',
      'nombre'        => 'Text',
      'descripcion'   => 'Text',
      'localidad'     => 'Text',
      'fecha_alta'    => 'Date',
      'esta_activo'   => 'Number',
      'cod_categoria' => 'Number',
      'cod_usuario'   => 'Number',
    );
  }
}
