<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Repositorios;

use Anakatis\Model\Repositorios\AbstractRepositorio;
use Anakatis\Model\Entidades\Categoria;
/**
 * Description of CategoriaRepositorio
 *
 * @author Daniel
 */
class CategoriaRepositorio extends AbstractRepositorio{
    
    protected function buildEntity($array) {
        $categoria = new Categoria();
    }

    protected function setTabla() {
        return 'categorias';
    }

}
