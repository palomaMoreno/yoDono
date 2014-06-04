<?php

/**
 * PrecioSeguro filter form base class.
 *
 * @package    yodonoytodosganamos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePrecioSeguroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'precio'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ccMinima'    => new sfWidgetFormFilterInput(),
      'ccMaxima'    => new sfWidgetFormFilterInput(),
      'combustible' => new sfWidgetFormChoice(array('choices' => array('' => '', 'd' => 'd', 'g' => 'g'))),
      'esta_activo' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'precio'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ccMinima'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ccMaxima'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'combustible' => new sfValidatorChoice(array('required' => false, 'choices' => array('d' => 'd', 'g' => 'g'))),
      'esta_activo' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('precio_seguro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PrecioSeguro';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'precio'      => 'Number',
      'ccMinima'    => 'Number',
      'ccMaxima'    => 'Number',
      'combustible' => 'Enum',
      'esta_activo' => 'Boolean',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
