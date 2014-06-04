<?php

/**
 * contacto actions.
 *
 * @package    yodonoytodosganamos
 * @subpackage contacto
 * @author     paloma moreno
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
   public function executeIndex(sfWebRequest $request)
  {
    $this->contacto = new ContactoForm();
    if ($this->getRequest()->isMethod('post'))
    {
        $this->procesarFormulario($request, $this->contacto);
    }
  }
  public function procesarFormulario(sfWebRequest $request, $form){
      $form->bind(
        #me recoge lo enviado en el post
        $request->getParameter($form->getName()),
        $request->getFiles($form->getName())
        );
      
      if ($form->isValid())
        {
          $values =$form->getValues();
          $mensaje=$this->getMailer()->compose(
          #remitente
          array('micorreo@mail.com'=>'Paloma'),
          #destinatarios
          array($values['email']),
          #asunto
          'Nos has contactado',
          #mensaje
          <<<EOF
         Hola, {$values['nombre']}
        Nos has contactado por la web.
        en breve te mandaremos la informacion
EOF
          );
          $this->getMailer()->send($mensaje);
          
        }
      }
}//end class contacto
