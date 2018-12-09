<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Router;

use Anakatis\Controllers\MainController;
use Anakatis\Controllers\ProductosControlleru;
use Anakatis\Controllers\DetalleProductoController;
use Anakatis\Controllers\CategoriaController;
use Anakatis\Controller\users\RegistroApp;
use Anakatis\Controller\users\LoginApp;
use Anakatis\Controller\users\RegistroWeb;
use Anakatis\Controllers\ValorarController;
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
            case 'registrar':
                $controller = new RegistroApp();
                break;
            case 'login':
                $controller = new LoginApp();
                break;
            case 'detalle':
                $controller = new DetalleProductoController();
                break;
            case 'productos':
                $controller = new ProductosController();
                break;
            case 'categoria':
                $controller = new CategoriaController();
                break;
            case 'registro':
                $controller = new RegistroWeb();
                break;
            case 'valorar':
                $controller = new ValorarController();
                break;
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
