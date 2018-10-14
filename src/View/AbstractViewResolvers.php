<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\View;

/**
 * Description of AbstractViewResolvers
 *
 * @author Daniel
 */
abstract class AbstractViewResolvers {

        
    const TEMPLATES_FOLDER = '../templates/';

    public function getView($contexto) {
        ob_start();// buffer de salida
        $this->chargeHeader($contexto);
        $this->chargeMenu($contexto);
        $this->chargeLogin($contexto);
       
        $this->chargeContent($contexto);
        
        $this->chargeFooter($contexto);

        return ob_get_clean();
    }

    protected function chargeHeader ($contexto) {
        
        include_once self::TEMPLATES_FOLDER.'elements/header.php';  
    }
    
    protected function chargeMenu($contexto) {
        include_once self::TEMPLATES_FOLDER.'elements/menu.php';// 
        
    }
    protected function chargeLogin($contexto) {
        include_once self::TEMPLATES_FOLDER.'elements/login.php';
    }



    protected function chargeFooter($contexto) {
        include_once self::TEMPLATES_FOLDER.'elements/footer.php';
    }
    
    abstract protected function chargeContent($contexto);
}
