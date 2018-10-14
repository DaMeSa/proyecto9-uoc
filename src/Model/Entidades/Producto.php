<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Entidades;

/**
 * Description of Producto
 *
 * @author Daniel
 */
class Producto {
   
    private $id;
    private $nombre;
    private $categorias = array();
    private $valoraciones = array();
    
        function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCategorias() {
        return $this->categorias;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCategorias($categorias) {
        $this->categorias = $categorias;
    }

}
