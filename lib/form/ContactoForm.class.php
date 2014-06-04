<?php 
class ContactoForm extends sfForm
{
    public function configure()
    {
       $this->setWidgets(array(
        'nombre'=>new sfWidgetFormInputText(),
        'email'=>new sfWidgetFormInputText(),
        'telefono'=>new sfWidgetFormInputText(),
        'mensaje'=>new sfWidgetFormTextArea(),
       ));
       
         $this->setValidators(array(
        'nombre'=>new sfValidatorString(array('min_length'=>3)),
        'email'=>new sfValidatorEmail(),
        'telefono'=>new sfValidatorString(array('min_length'=>9,'max_length'=>13)),
        'mensaje'=>new sfValidatorString(array('min_length'=>100)),
       ));
       $this->widgetSchema->setNameFormat('contacto[%s]');
    }
    
}
?>
