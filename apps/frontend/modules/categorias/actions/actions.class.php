<?php

/**
 * categorias actions.
 *
 * @package    yodonoytodosganamos
 * @subpackage categorias
 * @author     Paloma Moreno
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoriasActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
*/
  public function executeIndex(sfWebRequest $request)
  {
   $this->categorias=Doctrine::getTable('Categoria')->getActivas();
	
  }//executeIndex funciona como un ver me muestra todos los registros de la tabla

public function executeCrear(sfWebRequest $request)
  {
    $this->formulario= new CategoriaForm();
  
    
    if ($this->getRequest()->isMethod('post'))
    {
        $this->procesarFormulario($request, $this->formulario);
    }
  }//end crear

   public function executeEditar(sfWebRequest $request)
  {
    $this->formulario= new CategoriaForm();
  
    
    if ($this->getRequest()->isMethod('post'))
    {
        $this->procesarFormulario($request, $this->formulario);
    }
  }

 public function procesarFormulario(sfWebRequest $request, sfForm $form){
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

}//end categoriasActions
