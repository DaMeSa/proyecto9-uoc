<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Servicios;
use Anakatis\Model\Repositorios\UserRepositorio;
use Anakatis\Model\Entidades\User;
/**
 * Description of ServicioUsuarios
 *
 * @author Daniel
 */
class ServicioUsuarios {
   
    private $userRepositorio;
    
    public function __construct() {
        $this->$userRepositorio = new UserRepositorio();
    }
    
    public function crearUsuario(User $user) {
       $idUser = $this->repositorioUsuarios->insertEntity($user);
    }
     
        
    public function loadUserByNameAndPassword($nombre, $password) {
        $fields = [
          'nombre'=>$nombre,
          'password'=>$password
        ];

        $array = $this->repositorioUsuarios->getRowsByQuery($fields);
        if(reset($array)){
          $user = $array[0];
          $user->setRoles($this->loadRoles($user));
        }else{
            throw new UserNotFoundException('No se ha encontrado el usuario pedido');
        }
        return $user;
    } 
}
