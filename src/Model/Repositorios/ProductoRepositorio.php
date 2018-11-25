<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Repositorios;

use Anakatis\Model\Repositorios\AbstractRepositorio;
use Anakatis\Model\Entidades\Producto;
/**
 * Description of ProductoRepositorio
 *
 * @author Daniel
 */
class ProductoRepositorio extends AbstractRepositorio{
    
    
    
    public function getProductsByCategoria($idCategoria){
        $fields = [
          'id_categoria'=>$idCategoria  
        ];
        return $this->getRowsByQuery($fields);
    }
    
    protected function buildEntity(Array $array) {
        $producto = new Producto();
        $producto->setId($array['id']);
        $producto->setNombre($array['nombre']);
        $producto->setDescripcion($array['descripcion']);
        $producto->setImagen($array['imagen']);
        return $producto;
    }

    protected function setTabla() {
        return 'productos';
    }

    protected function deBuildEntity(Producto $entity) {
        $array = [
            'id'=>$entity->getId(),
            'descripcion'=>$entity->getDescripcion(),
            'nombre'=>$entity->getNombre(),
            'precio'=>$entity->getPrecio(),
            'imagen'=>$entity->getImagen()
        ];
        return $array;
    }   
            

}
