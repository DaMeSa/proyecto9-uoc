<?php



namespace MasakiApp\Controller\WebProcess\Users;
use MasakiApp\View\Webs\RegistroView;
use MasakiApp\Controller\WebProcess\Web\AbstractWeb;
/**
 * Description of RegistroWeb
 *
 * @author daniel
 */
class RegistroWeb extends AbstractWeb {

    public function doAction() {
        
        $begin = new RegistroView();   
        if (isset ($_SESSION['error'])) {
            $this->contexto['mensaje'] = $_SESSION['error'];
            unset($_SESSION['error']);
        }
        return $begin;
    }
}
