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
    private $descripcion;
    private $precio;
    private $imagen;
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
    function getValoraciones() {
        return $this->valoraciones;
    }

    function setValoraciones($valoraciones) {
        $this->valoraciones = $valoraciones;
    }
    
    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }


}
