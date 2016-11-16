<?php
class home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->library(array('session', 'form_validation'));
                $this->load->database('default');
                $this->load->model('user_model');
        }

        public function index()
        {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $this->load->view('home_view');
                
                $uresult = $this->user_model->get_user($email, $password);
                if (count($uresult) > 0) {
                // set session
                $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
                $this->session->set_userdata($sess_data);
                redirect("index.php/logout");
            }
        }

        function logout() {
            $this->session->sess_destroy();
            redirect('index.php/login');
        }
}
?>