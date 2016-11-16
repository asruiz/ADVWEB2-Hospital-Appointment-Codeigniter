<?php
class login_doc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('doctor_model');

    }
    
    function index()
    {
        // get form input
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // form validation
        $this->form_validation->set_rules('email', 'Email ID', "trim|required|xss_clean");
        $this->form_validation->set_rules('password', 'Password', "trim|required|xss_clean");

        if ($this->form_validation->run() == FALSE)
        {
            // validation fail
            $this->load->view('login_view_doc');
        }
        else
        {
            // check for user credentials
            $uresult = $this->doctor_model->get_user($email, $password);
            if (count($uresult) > 0)
            {
                // set session
                $sess_data = array('login_doc' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
                $this->session->set_userdata($sess_data);
                redirect("index.php/home_doc");
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
                redirect('index.php/login_doc');
            }
        }
    }
}
?>