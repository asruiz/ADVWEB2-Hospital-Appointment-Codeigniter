<?php
class logout extends CI_Controller {  

  function logout() {
            $this->session->sess_destroy();
            redirect('index.php/login');
        }

}
?>