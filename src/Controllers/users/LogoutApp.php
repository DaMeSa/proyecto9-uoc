<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Controller\users;
use Anakatis\Controllers\AbstractController;
/**
 * Description of LogoutApp
 *
 * @author daniel
 */
class LogoutApp  extends AbstractController {
    
    public function doAction() {
        
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        header('HTTP/1.1 303 See Other');
        header('Location: http://localhost/');
        die;
    }
   

}
