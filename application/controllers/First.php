<?php
class first extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url_helper');
    $this->load->model('user_model');
    $this->load->model('doctor_model');
  }

  public function index()
  {
    $this->load->view('templates/header');
    $this->load->view('firstpage_view');
    $this->load->view('templates/footer');
  }

  // For Patients
  public function home()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
      $this->load->view('templates/navigation_session');
    $this->load->view('templates/header');

    $this->load->view('home_view');
    $this->load->view('templates/footer');

    $uresult = $this->user_model->get_user($email, $password);
    if (count($uresult) > 0)
    {
      // set session
      $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
      $this->session->set_userdata($sess_data);
      redirect("index.php/first/home");
    }
  }

  // For Doctors
  public function home_doc()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $this->load->view('templates/header');
    $this->load->view('templates/navigation_session');
    $this->load->view('home_view_doc');
    $this->load->view('templates/footer');

    $uresult = $this->doctor_model->get_user($email, $password);
    if (count($uresult) > 0)
    {
      // set session
      $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
      $this->session->set_userdata($sess_data);
      redirect("index.php/first/home_doc");
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('index.php/login');
  }
}
