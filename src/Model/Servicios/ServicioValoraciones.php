<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Anakatis\Model\Servicios;

use Anakatis\Model\Repositorios\ValoracionRepositorio;
use Anakatis\Model\Repositorios\ProductoRepositorio;
use Anakatis\Model\Entidades\Producto;
use Anakatis\Model\Entidades\Valoracion;
/**
 * Description of ServicioValoraciones
 *
 * @author Daniel
 */
class ServicioValoraciones {
   
    private $valoracionRepositorio;
    private $productoRepositorio;
    
    public function __construct() {
        $this->productoRepositorio = new ProductoRepositorio();
        $this->valoracionRepositorio = new ValoracionRepositorio();
    }
    
    public function crearValoracion(Producto $producto) {
        
    }
    
    public function getProductosWithValoraciones($param) {
        
    }
}
