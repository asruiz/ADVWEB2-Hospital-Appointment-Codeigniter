<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->helper('url','form');
		$this->load->database('default');
		$this->load->library(array('session', 'form_validation'));
	}

	function index() {
		$this->load->model('user_model');
    $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
    $data['ufname'] = $details[0]->fname;
    $data['ulname'] = $details[0]->lname;
    $data['uemail'] = $details[0]->email;
    $this->load->view('profile_view', $data);
	}

	function getId() {
		$this->load->model('profile_model');
    $details = $this->profile_model->get_user_by_id($this->session->userdata('uid'));
    $data['ufname'] = $details[0]->fname;
    $data['ulname'] = $details[0]->lname;
    $data['uemail'] = $details[0]->email;
    $this->load->view('profile_update_view', $data);
	}

	function edit($id)
    {
        $this->form_validation->set_rules('pro_name','Product Name','required');
        $this->form_validation->set_rules('pro_category','Product Category','required');
        $this->form_validation->set_rules('pro_desc','Product Description','required');
        $this->form_validation->set_rules('pro_price','Product Price','required|integer');
        $this->form_validation->set_rules('pro_stock','Available Stock','required|integer');
        $this->form_validation->set_rules('pro_sale','Sale','integer');

        if ($this->form_validation->run() == FALSE)
            {
                $data = $this->profile_model->get_user_by_id($id);
                $this->load->view('profile_update_view',$data);
            } else {
                        $data_products = array(
                        'fname'          => set_value('fname'),
                        'lname'      => set_value('lname'),
                        'email'          => set_value('email'),

                        );//end array data_products
                        $this->profile_model->edit(id,$data_products);
                        redirect('home');

                }//end if FILES
}


}
?>
