<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Anakatis\Model\Servicios;

use Anakatis\Model\Repositorios\ValoracionRepositorio;
use Anakatis\Model\Repositorios\ProductoRepositorio;
use Anakatis\Model\Repositorios\UserRepositorio;
use Anakatis\Model\Entidades\Producto;
use Anakatis\Model\Entidades\Valoracion;
use Anakatis\Model\Entidades\Categoria;
use Anakatis\Model\Entidades\User;
/**
 * Description of ServicioValoraciones
 *
 * @author Daniel
 */
class ServicioValoraciones {
   
    private $valoracionRepositorio;
    private $productoRepositorio;
    private $usuariosRepositorio;
    
    public function __construct() {
        $this->productoRepositorio = new ProductoRepositorio();
        $this->valoracionRepositorio = new ValoracionRepositorio();
        $this->usuariosRepositorio = new UserRepositorio();
    }
    
    public function crearValoracion(Valoracion $valoracion, Producto $producto, User $user) {
        $this->productoRepositorio->getRow($producto->getId());
        
        
        
        
    }
    
    public function getProductosWithValoraciones(Categoria $categoria) {
        
        
    }
    
    public function crearProducto(Producto $producto) {
        $idLastProducto = $this->productoRepositorio->insertEntity($producto);
    }
}
