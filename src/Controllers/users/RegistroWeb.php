<?php



namespace Anakatis\Controller\users;
use Anakatis\View\Webs\RegistroView;
use Anakatis\Controllers\AbstractController;
/**
 * Description of RegistroWeb
 *
 * @author daniel
 */
class RegistroWeb extends AbstractController {

    public function doAction() {
        
        $begin = new RegistroView();   
        if (isset ($_SESSION['error'])) {
            $this->contexto['mensaje'] = $_SESSION['error'];
            unset($_SESSION['error']);
        }
        return $begin;
    }
}
