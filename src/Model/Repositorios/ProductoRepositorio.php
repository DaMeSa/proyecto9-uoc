<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Repositorios;

use Anakatis\Model\Repositorios\AbstractRepositorio;
use Anakatis\Model\Entidades\Producto;
/**
 * Description of ProductoRepositorio
 *
 * @author Daniel
 */
class ProductoRepositorio extends AbstractRepositorio{
    
    
    protected function buildEntity($array) {
        $producto = new Producto();
        return $producto;
    }

    protected function setTabla() {
        return 'productos';
    }

}
