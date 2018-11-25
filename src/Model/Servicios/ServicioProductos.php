<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Servicios;
use Anakatis\Model\Repositorios\CategoriaRepositorio;
use Anakatis\Model\Repositorios\ProductoRepositorio;
use Anakatis\Model\Entidades\Producto;
use Anakatis\Model\Entidades\Categoria;
/**
 * Description of ServicioProductos
 *
 * @author Daniel
 */
class ServicioProductos {
   
    private $categoriaRepositorio;
    private $productoRepositorio;

    public function __construct() {
        $this->categoriaRepositorio= new CategoriaRepositorio();
        $this->productoRepositorio = new ProductoRepositorio();
    }
    
    
    public function getCategoriaConTodosLosProductos($idCategoria){
        $categoria = $this->categoriaRepositorio->getRow($idCategoria);
        
        if(!is_null($categoria)){
            $categoria->setProductos($this->productoRepositorio->getProductsByCategoria($idCategoria));
        }
   
        return $categoria;
    }
    
}
