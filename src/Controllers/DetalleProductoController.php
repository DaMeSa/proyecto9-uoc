<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Controllers;
use Anakatis\Model\Servicios\ServicioProductos;
/**
 * Description of DetalleProductoController
 *
 * @author Daniel
 */
class DetalleProductoController extends AbstractController implements Controller{
    
    private $servicioProductos;

    public function __construct() {
        $this->servicioProductos = new ServicioProductos();
    }

    protected function doAction() {
        $idProducto = $_POST['idProducto'];
        
        $this->contexto['producto'] = $this->servicioProductos->getProducto($idProducto);
    }

}
