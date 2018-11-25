<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Anakatis\View\Resolvers;
use Anakatis\View\AbstractViewResolvers;
/**
 * Description of ListadoProductosViewResolver
 *
 * @author Daniel
 */
class ListadoProductosViewResolver extends AbstractViewResolvers{
   
    protected function chargeContent($contexto) {
        include_once self::TEMPLATES_FOLDER.'listado_productos.php';
    }

}
