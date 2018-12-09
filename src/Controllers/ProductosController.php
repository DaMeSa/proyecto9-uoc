<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Controllers;
use Anakatis\Model\Servicios\ServicioProductos;
use Anakatis\View\Resolvers\ListadoProductosViewResolver;
/**
 * Description of ProductosController
 *
 * Carga todos los productos de la web
 * @author Daniel
 */
class ProductosController extends  AbstractController{

    private $servicioProductos;

    public function __construct() {
        $this->servicioProductos = new ServicioProductos();
    }
    
    
    public function doAction() {
        $this->contexto['produtos'] = $this->servicioProductos->getAllProductos();
        
        return new ListadoProductosViewResolver();
    }

}
