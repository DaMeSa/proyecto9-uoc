<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Controller\WebProcess\Users;
use Anakatis\Controller\WebProcess\WebProcess;
/**
 * Description of LogoutApp
 *
 * @author daniel
 */
class LogoutApp implements WebProcess {
    
    public function action() {
        
        if (isset($_SESSION['idUsuario'])) {
            unset($_SESSION['idUsuario']);
        }
        header('HTTP/1.1 303 See Other');
        header('Location: http://localhost/');
        die;
    }
   

}
