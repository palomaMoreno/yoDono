<?php

/**
 * login actions.
 *
 * @package    yodonoytodosganamos
 * @subpackage login
 * @author     paloma moreno
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */

    public function executeIndex(sfWebRequest $request)
    {
      if ($request->getParameter('error')==1)
      {
        $this->error = true;
      } else {
        $this->error = false;
      }
    }

    public function executeLogin(sfWebRequest $request)
    {   
        
        if($this->getUser()->isAuthenticated())
            $this->redirect('@area_cliente');
    }
    
    /**
     * Action de doLogin. Se loguea el usuario
     * @name doLogin
     * @param sfWebRequest $request 
     */
    public function executeDoLogin(sfWebRequest $request)
    {         
        //Cogemos los datos introducidos por el usuario
         $login = $request->getParameter('usuario');
   		 $password = $request->getParameter('password');
          
        $usuario = UsuarioTable::logIn($login, $password);

        if ($usuario) {
          $this->redirect('usuarios/conectado?usuario_id='.$usuario->getIdUsuario());
        } else {
          $this->redirect('login/index?error=1');
        }

    }  




    public function executeLogout(sfWebRequest $request)
    {
        UsuarioTable::logOut();
        $this->redirect('@homepage');
    }

}
