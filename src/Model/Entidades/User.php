<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Entidades;

/**
 * Description of User
 *
 * @author Daniel
 */
class User {
    private $id;
    private $nombre;
    private $apodo;
    private $perfil;
    private $fechaRegistro;
    private $valoraciones;
    private $password;
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApodo() {
        return $this->apodo;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    function getValoraciones() {
        return $this->valoraciones;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApodo($apodo) {
        $this->apodo = $apodo;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

    function setValoraciones($valoraciones) {
        $this->valoraciones = $valoraciones;
    }

    function setPassword($password) {
        $this->password = $password;
    }
}
