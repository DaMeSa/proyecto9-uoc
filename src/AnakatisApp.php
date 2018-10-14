<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis;
use Anakatis\Router\Router;
/**
 * Description of AnakatisApp
 *
 * @author Daniel
 */
class AnakatisApp {
    public function main () {
        $uri = $_SERVER['REQUEST_URI'];
       
        $router = new Router();
        $controller = $router->getController($uri);
        
        return $controller->action();
    }
}
