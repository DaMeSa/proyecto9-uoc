<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Controller\users;
use Anakatis\Model\Repositorios\UserRepositorio;
use Anakatis\Controller\WebProcess\WebProcess;

class RegistroApp implements WebProcess {
    
    
    public function action() {

        
        $nombre = $_POST["nombre"];
        $contrasena = $_POST["password"];
        $email = $_POST["email"];

        $fields = [
            'nombre'=>$nombre,
            'password'=>$contrasena,
            'email' => $email
        ];

        $userRepositorio = new UserRepositorio;
        $resultado = $userRepositorio->insertRow($fields);
 
        if($resultado) {
            $usersOnline = $userRepositorio->getRowsByQuery($fields);
            $id = reset($usersOnline)->getId();
            $_SESSION['idUser'] = $id;
            $uri = "/";

        } else {
            $_SESSION['error'] = "Error , El usuario ya está registrado!";
            $uri = "/registro";
        }
        header('HTTP/1.1 303 See Other');
        header('Location: /'. $uri);
        
        die;    
    }
    
    
   
}
