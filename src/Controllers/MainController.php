<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Controllers;

use Anakatis\View\Resolvers\ListadoProductosViewResolver;
use Anakatis\Model\Servicios\ServicioProductos;
/**
 * Description of MainController
 *
 * @author Daniel
 */
class MainController extends AbstractController{
  

    private $servicioProductos;

    public function __construct() {
        $this->servicioProductos = new ServicioProductos();
    }
    
    
    public function doAction() {
        $this->contexto['productos'] = $this->servicioProductos->getAllProductos();
        
        return new ListadoProductosViewResolver();
    }

}
