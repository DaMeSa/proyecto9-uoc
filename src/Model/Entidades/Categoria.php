<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Entidades;

/**
 * Description of Categoria
 *
 * @author Daniel
 */
class Categoria {
    
    private $id;
    private $nombre;
    private $productos = array();
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getProductos() {
        return $this->productos;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setProductos($productos) {
        $this->productos = $productos;
    }


}
