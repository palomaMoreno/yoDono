<?php

/**
 * Articulo form base class.
 *
 * @method Articulo getObject() Returns the current form's model object
 *
 * @package    yodonoytodosganamos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArticuloForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_articulo'   => new sfWidgetFormInputHidden(),
      'nombre'        => new sfWidgetFormInputText(),
      'descripcion'   => new sfWidgetFormInputText(),
      'localidad'     => new sfWidgetFormInputText(),
      'fecha_alta'    => new sfWidgetFormDate(),
      'esta_activo'   => new sfWidgetFormInputText(),
      'cod_categoria' => new sfWidgetFormInputText(),
      'cod_usuario'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_articulo'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_articulo')), 'empty_value' => $this->getObject()->get('id_articulo'), 'required' => false)),
      'nombre'        => new sfValidatorString(array('max_length' => 30)),
      'descripcion'   => new sfValidatorString(array('max_length' => 40)),
      'localidad'     => new sfValidatorString(array('max_length' => 40)),
      'fecha_alta'    => new sfValidatorDate(array('required' => false)),
      'esta_activo'   => new sfValidatorInteger(),
      'cod_categoria' => new sfValidatorInteger(array('required' => false)),
      'cod_usuario'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('articulo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Articulo';
  }

}
