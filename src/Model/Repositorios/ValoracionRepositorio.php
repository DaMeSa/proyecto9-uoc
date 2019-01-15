<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\Model\Repositorios;


use Anakatis\Model\Repositorios\AbstractRepositorio;
/**
 * Description of ValoracionRepositorio
 *
 * @author Daniel
 */
class ValoracionRepositorio extends AbstractRepositorio{
   
    
    public function __construct() {
        parent::__construct();
        
    }
    
    protected function buildEntity(Array $array) {
        
    }

    protected function setTabla() {
        return 'valoraciones';
    }

    protected function deBuildEntity($entity) {
        
    }

}
