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
    private $tipo;
    private $modo;
    private $tema;
    private $jugadores;
    private $productos = array();
    
    
    function getId() {
        return $this->id;
    }

    function getProductos() {
        return $this->productos;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProductos($productos) {
        $this->productos = $productos;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getModo() {
        return $this->modo;
    }

    function getTema() {
        return $this->tema;
    }

    function getJugadores() {
        return $this->jugadores;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setModo($modo) {
        $this->modo = $modo;
    }

    function setTema($tema) {
        $this->tema = $tema;
    }

    function setJugadores($jugadores) {
        $this->jugadores = $jugadores;
    }
}
