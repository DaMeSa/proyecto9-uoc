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
    
    private $productosRepositorio;
    
    public function __construct() {
        parent::__construct();
        $this->productosRepositorio = new ProductoRepositorio();
    }
    
    protected function buildEntity(Array $array) {
        $categoria = new Categoria();
        $categoria->setId($array['id']);
        $categoria->setJugadores($array['jugadores']);
        $categoria->setTema($array['tema']);
        $categoria->setTipo($array['tipo']);
        $categoria->setModo($array['modo']);
     
        return $categoria;
    }

    protected function setTabla() {
        return 'categorias';
    }

    protected function deBuildEntity(Categoria $entity) {
        $array = [
            'id'=>$entity->getId(),
            'tipo'=>$entity->getTipo(),
            'modo'=>$entity->getModo(),
            'tema'=>$entity->getTema(),
            'jugadores'=>$entity->getJugadores()
        ];
        return $array;
    }

}
