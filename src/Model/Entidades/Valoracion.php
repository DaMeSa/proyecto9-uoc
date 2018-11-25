<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Entidades;

/**
 * Description of Valoracion
 *
 * @author Daniel
 */
class Valoracion {
   
    private $id;
    private $idUsuario;
    private $producto;
    private $comentario;
    private $votos;
    private $imagen;
    private $puntuacion;
    
    function getId() {
        return $this->id;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getProducto() {
        return $this->producto;
    }

    function getComentario() {
        return $this->comentario;
    }

    function getVotos() {
        return $this->votos;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setProducto($producto) {
        $this->producto = $producto;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    function setVotos($votos) {
        $this->votos = $votos;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }
 
}
