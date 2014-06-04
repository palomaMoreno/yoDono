<?php

/**
 * Categoria form.
 *
 * @package    yodonoytodosganamos
 * @subpackage form
 * @author     Paloma Moreno
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoriaForm extends BaseCategoriaForm
{
 
   public function configure()
  {
      unset(
      $this['esta_activa']
      );
  }//quiero que al crear una categoria no me aperezca esta categoria
}
