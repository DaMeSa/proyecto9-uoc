<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Repositorios;

/**
 * Description of AbstractRepositorio
 *
 * @author Daniel
 */
abstract class AbstractRepositorio {
        
    protected $tabla;
    
    
    function __construct(){
        $this->tabla = $this->setTabla();
    }
    //put your code here
    public function getAllRows() {
        $sql = "SELECT * FROM '$this->tabla'";
        $enchufe = new Conexion();
        $consulta = $enchufe->read($sql);
        
        $resultado = [];
        foreach ($consulta as $parte) {
            $resultado[] = $this->crearParte($parte);
        }
        
        return $resultado; 
    }
    
    public function getRow($id) {
        
        $enchufe = new Conexion();
        $sql = "SELECT * FROM '$this->tabla' WHERE `id` = '$id'";
        $resultado = $enchufe->read($sql);
        
        if(count($resultado) == 0){
            throw new \Exception("No se ha encontrado ningun entidad de la tabla '$this->tabla' con id " . $id);
        }
        
        $parte = $this->buildEntity(reset($resultado));
        return $parte;
        
    }
    
    
    
    
    public function insertRows($fields) {
                
        $sql = "INSERT INTO `$this->tabla` (";
        $primertramo = '';
        $segundotramo = '';
        if(count($fields)) {
            foreach ( $fields as $field =>$value) {
               if (strlen($primertramo)) {
                   $primertramo .= ', ';
               }
               if (strlen($segundotramo)) {
                   $segundotramo .= ', ';
               }
               $primertramo .= $field;
               $segundotramo .= "'$value'";
                    
            }
            $sql .= $primertramo;
            $sql .= ') VALUES (';
            $sql .= $segundotramo;
            $sql .= ')';
            
        }
        $enchufe = new Conexion();
        
        return $enchufe->create($sql);
    }

    public function getRowsByLikeQuery($fields) {
        
        $sql = "SELECT * FROM '$this->tabla'";
        
        if (count($fields)) {
            $sql .= ' WHERE ';
            
            $conditions = '';
            foreach ($fields as $field => $value) {
                
                if($value != ""){
                    if (strlen($conditions)) {
                        $conditions .= ' AND ';
                    }
                
                    $conditions .= "$field LIKE '$value'";
                }

            }
            $sql .= $conditions;
        }
        $enchufe = new Conexion();

        $consulta = $enchufe->read($sql);

       
        $resultado = [];

        foreach ($consulta as $parte) {
            $resultado[] = $this->buildEntity($parte);
        }
        
        return $resultado;
    }
    
    
    public function getRowsByQuery($fields) {
        
        $sql = "SELECT * FROM '$this->tabla'";
        
        if (count($fields)) {
            $sql .= ' WHERE ';
            
            $conditions = '';
            foreach ($fields as $field => $value) {
                if (strlen($conditions)) {
                    $conditions .= ' AND ';
                }
                
                $conditions .= "$field = '$value'";
            }
            $sql .= $conditions;
        }
        $enchufe = new Conexion();
            
        $consulta = $enchufe->read($sql);
        $resultado = [];

        foreach ($consulta as $entityArray) {
            $resultado[] = $this->buildEntity($entityArray);
        }
        return $resultado;
    }

    public function getRowsBySqlQuery($sql) {
       
        $enchufe = new Conexion();
        $consulta = $enchufe->read($sql);
        $resultado = [];
        foreach ($consulta as $parte) {
            $resultado[] = $this->buildEntity($entityArray);
        }
        
        return $resultado;
    }

    public function updateRow($fields, $id) {
        
        $sql = "UPDATE '$this->tabla' SET ";
        
        if (count($fields)) {

            $conditions = '';
            foreach ($fields as $field => $value) {
                if (strlen($conditions)) {
                    $conditions .= ', ';
                }
                
                $conditions .= "$field = '$value'";
            }
            $sql .= $conditions;
            
            $sql .= ' WHERE `id` = ' . $idParte;
        }
        $enchufe = new Conexion();
           
        return $enchufe->update($sql);

    }
    
    public function deleteRow($id){
        $sql = "DELETE FROM '$this->tabla' WHERE `cod_parte` = ". $id;
        $enchufe = new Conexion();
        return $enchufe->delete($sql);
    }

    abstract protected function buildEntity($array);
    abstract protected function setTabla();
}
