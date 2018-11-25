<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Repositorios;

use Anakatis\Model\Repositorios\AbstractRepositorio;
use Anakatis\Model\Entidades\User;
/**
 * Description of UserRepositorio
 *
 * @author Daniel
 */
class UserRepositorio extends AbstractRepositorio {
   
    private $repositorioValoraciones;
    
    public function __construct() {
        parent::__construct();
        $this->repositorioValoraciones = new ValoracionRepositorio();
    }
    protected function buildEntity(Array $array) {
        $user = new User();
        $user->setId($array['id']);
        $user->setNombre($array['nombre']);
        $user->setPassword($array['password']);
        $user->setPerfil($array['perfil']);
        $user->setFechaRegistro($array['fetch_reg']);
        return $user;
    }

    protected function setTabla() {
        return 'usuarios';
    }

    protected function deBuildEntity(User $entity) {
        $array = [
            'id'=>$entity->getId(),
            'nombre'=>$entity->getNombre(),
            'apodo'=>$entity->getApodo(),
            'fetch_reg'=>$entity->getFechaRegistro(),
             'perfil'=>$entity->getPerfil()
        ];
        return $array;
    }

}
