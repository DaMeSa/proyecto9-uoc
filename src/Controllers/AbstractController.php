<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Controllers;

/**
 * Description of AbstractController
 *
 * @author Daniel
 */
abstract class AbstractController implements Controller {
    
    protected $contexto = [];
    
    /**
     * 
     * @return AbstractView
     */
    public function action() {
        $this->loadUser();
        $view = $this->doAction();
  
        return $view->getView($this->contexto);
    }
    
    abstract protected function doAction();
    
    private function loadUser() {
        
        if (isset($_SESSION['idUsuario'])) {
            $id = $_SESSION['idUsuario'];
            $userRepositorio = new UserRepositorio();
            $userObject = $userRepositorio->getRow($id);
            $this->contexto['userObject'] = $userObject;  
        }
        
        if (isset($_SESSION['errorLogin'])) {
            $this->contexto['errorLogin'] = $_SESSION['errorLogin'];
            unset ($_SESSION['errorLogin']);
        }

       // $this->contexto['userName'] = 
    }

}
