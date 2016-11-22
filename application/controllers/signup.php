<?php
class signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database('default');
        $this->load->model('user_model');
    }

    function hashpassword($password) {
        return md5($password);
    }

    function index()
    {
        // set form validation rules
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|md5|trim|xss_clean');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]|md5|trim|xss_clean');

        // submit
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('login_view');
        }
        else
        {
            //insert user details into db
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            if ($this->user_model->insert_user($data))
            {
                $this->session->set_flashdata('msg1','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
                redirect('index.php/signup');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg1','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/signup');
            }
        }
    }
}
?>
