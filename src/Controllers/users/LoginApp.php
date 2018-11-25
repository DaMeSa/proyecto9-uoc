<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Controller\WebProcess\Users;
use Anakatis\Model\Servicios\ServicioUsuarios;
use Anakatis\Model\Excepciones\UserNotFoundException;
use Anakatis\Controller\WebProcess\WebProcess;
/**
 * Description of LoginApp
 *
 * @author daniel
 */
class LoginApp  implements WebProcess {
    
    private $servicioUsuarios;
    
    public function __construct() {
        $this->servicioUsuarios = new ServicioUsuarios();
    }
    
    public function action() {
        
        $nombre = $_POST["nombre"];
        $password = $_POST["password"];
        
        try {
            $userOnline = $this->servicioUsuarios->loadUserByNameAndPassword($nombre, $password);
            $_SESSION['idUsuario'] = reset($userOnline)->getId();
        } catch (UserNotFoundException $exc) {
             $_SESSION['errorLogin'] = "Error , usuario/contraseña no registrado/a!";
        }



        $uri = $_POST["uri"];
        header('HTTP/1.1 303 See Other');
        header('Location: http://localhost/'. $uri);
        die;
        
        
    }

}
