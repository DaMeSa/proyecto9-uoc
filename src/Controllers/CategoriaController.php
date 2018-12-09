<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Controllers;
use Anakatis\Model\Servicios\ServicioProductos;
/**
 * Description of CategoriaController
 *
 * @author Daniel
 */
class CategoriaController extends AbstractController {
    private $servicioProductos;

    public function __construct() {
        $this->servicioProductos = new ServicioProductos();
    }
    
    
    public function doAction() {
        
        $idCategoria = $_POST['idCategoria'];
        $this->contexto['produtos'] = $this->servicioProductos->getCategoriaConTodosLosProductos($idCategoria);
        
        return new ListadoProductosViewResolver();
    }

}
