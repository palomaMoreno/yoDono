<?php

/**
 * Categoria form base class.
 *
 * @method Categoria getObject() Returns the current form's model object
 *
 * @package    yodonoytodosganamos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCategoriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_categoria' => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
      'esta_activa'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_categoria' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_categoria')), 'empty_value' => $this->getObject()->get('id_categoria'), 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 30)),
      'esta_activa'  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('categoria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Categoria';
  }

}
