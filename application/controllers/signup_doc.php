<?php
class signup_doc extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form','url'));
    $this->load->library(array('session', 'form_validation'));
    $this->load->database();
    $this->load->model('doctor_model');
  }

  function hashpassword($password) {
    return md5($password);
  }

  function index()
  {
    // set form validation rules
    $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
    $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[doctor.email]');
    $this->form_validation->set_rules('location', 'Location', 'trim|required|xss_clean');
    $this->form_validation->set_rules('specialization', 'Specialization', 'trim|required|xss_clean');
    $this->form_validation->set_rules('facility', 'Facility', 'trim|required|xss_clean');
    $this->form_validation->set_rules('day', 'Day', 'trim|required|xss_clean');
    $this->form_validation->set_rules('fromtime', 'From', 'trim|required|xss_clean');
    $this->form_validation->set_rules('totime', 'To', 'trim|required|xss_clean');

    $this->form_validation->set_rules('password', 'Password', 'required|md5|trim|xss_clean');
    $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]|md5|trim|xss_clean');

    // submit
    if ($this->form_validation->run() == FALSE)
    {
      // fails
      $this->load->view('registration_view_doc');
    }
    else
    {
      //insert user details into db
      $data = array(
        'fname' => $this->input->post('fname'),
        'lname' => $this->input->post('lname'),
        'email' => $this->input->post('email'),
        'location' => $this->input->post('location'),
        'specialization' => $this->input->post('specialization'),
        'facility' => $this->input->post('facility'),
        'day' => $this->input->post('day'),
        'fromtime' => $this->input->post('fromtime'),
        'totime' => $this->input->post('totime'),
        'password' => $this->input->post('password')
      );

      if ($this->doctor_model->insert_doctor($data))
      {
        $this->session->set_flashdata('msg3','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
        redirect('index.php/signup_doc');
      }
      else
      {
        // error
        $this->session->set_flashdata('msg3','<div class="alert alert-danger text-center">Oops! Error.  Please try again</div>');
        redirect('index.php/signup_doc');
      }
    }
  }

}
?>
