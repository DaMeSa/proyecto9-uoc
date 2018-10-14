<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Router;

use Anakatis\Controllers\MainController;
/**
 * Description of Router
 *
 * @author Daniel
 */
class Router {
       public function getController($uri) {

        $root = explode("/", $uri );
        $controller = false;
        
        switch ($root[3]) {
            case '':
                $controller = new MainController();            
                break;
            default:
                $controller = new MainController();
                break;
        }
        return $controller;     
    }
}
