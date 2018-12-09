<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Anakatis\View\Resolvers;
use Anakatis\View\AbstractViewResolvers;
/**
 * Description of FormularioRegistroViewResolver
 *
 * @author Daniel
 */
class FormularioRegistroViewResolver extends AbstractViewResolvers {
    //put your code here
    protected function chargeContent($contexto) {
        include_once self::TEMPLATES_FOLDER.'registroHtml.php';
    }

}
