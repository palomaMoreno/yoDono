<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    yodonoytodosganamos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_usuario'  => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'email'       => new sfWidgetFormInputText(),
      'fecha_alta'  => new sfWidgetFormDate(),
      'esta_activo' => new sfWidgetFormInputText(),
      'password'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_usuario'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_usuario')), 'empty_value' => $this->getObject()->get('id_usuario'), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 30)),
      'email'       => new sfValidatorString(array('max_length' => 40)),
      'fecha_alta'  => new sfValidatorDate(array('required' => false)),
      'esta_activo' => new sfValidatorInteger(),
      'password'    => new sfValidatorString(array('max_length' => 10)),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
