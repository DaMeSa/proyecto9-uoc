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
    private $dni;
    private $experiencia;
    private $password;
    private $email;
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    function getDni() {
        return $this->dni;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    
    public function getPassword () {
        return $this->password;
    }

    public function setPassword ($password) {
            $this->password = $password;
    }

    public function getEmail () {
            return $this->email;
    }

    public function setEmail ($email) {
            $this->email = $email;
    }
    
    
    public function getExperiencia() {
            return $this->experiencia;
    }

    public function setRol ($experiencia) {
            $this->experiencia = $experiencia;
    }
}
