<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model;

/**
 * Description of Conexion
 *
 * @author Daniel
 */
class Conexion {
   private static $enchufe;
    
    const DB_SERVER = 'localhost';
    const DB_NAME = 'anakatis_bbdd';
    const DB_USER = 'root';
    const DB_PASS = '';
    
    public function __construct() {
        self::$enchufe= $this->conectar();
    }

    private function conectar () {

        $db_server = Conexion::DB_SERVER;
        $db_name = Conexion::DB_NAME;
        $db_user = Conexion::DB_USER;
        $db_pass = Conexion::DB_PASS;
        $enchufe = new \mysqli($db_server, $db_user, $db_pass, $db_name);
        $enchufe->set_charset("utf8");
        if ($enchufe->connect_errno) {
            throw new \Exception("No se pudo establacer la conexion");
        } else {
            return $enchufe;
        }
    }
    
    public function read($sql) {
        
        $consulta = self::$enchufe->query($sql);
        
        $resultado = [];
       
        while ($data = $consulta->fetch_array(MYSQLI_ASSOC)) {
            $resultado[] = $data;  
        }
        return $resultado;
        
    }
    
    public function getTransaction($param) {
        
    }
    
    public function update ($sql) {
        
        self::$enchufe->query($sql);
        return;
    }
    
    public function create ($sql) {
        
        self::$enchufe->query($sql);
        return self::$enchufe->insert_id;
        
    }
    public function delete ($sql) {
        
        self::$enchufe->query($sql);
        return;
    }
}
