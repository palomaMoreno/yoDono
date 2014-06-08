<?php

/**
 * articulos actions.
 *
 * @package    yodonoytodosganamos
 * @subpackage articulos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class articulosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $categoria_id = $request->getParameter('categoria_id');
    $this->articulos=Doctrine::getTable('Articulo')->getFiltradosPorCategoria($categoria_id);
  }


public function executeCrear(sfWebRequest $request)
  {
    $this->formulario= new ArticuloForm();
  
    $this->id_usuario= $request->getParameter('id_usuario');
    
    if ($this->getRequest()->isMethod('post'))
    {
        $this->procesarFormulario($request, $this->formulario);
    }
  }

 public function procesarFormulario(sfWebRequest $request, sfForm $form)
 {
  $form->bind(
    #me recoge lo enviado en el post
    $request->getParameter($form->getName()),
    $request->getFiles($form->getName())
    );
  
  if ($form->isValid())
    {
        $form->save();
    }
  }//metodo por el si el formulario es valido lo guarda

}
