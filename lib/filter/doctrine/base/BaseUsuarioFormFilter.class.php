<?php

/**
 * Usuario filter form base class.
 *
 * @package    yodonoytodosganamos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_alta'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'esta_activo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'email'       => new sfValidatorPass(array('required' => false)),
      'fecha_alta'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'esta_activo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'password'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id_usuario'  => 'Number',
      'nombre'      => 'Text',
      'email'       => 'Text',
      'fecha_alta'  => 'Date',
      'esta_activo' => 'Number',
      'password'    => 'Text',
    );
  }
}
