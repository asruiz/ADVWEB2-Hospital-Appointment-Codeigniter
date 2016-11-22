<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->helper('url','form');
		$this->load->database('default');
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('user_model');
		$this->load->model('profile_model');

	}

	function index() {
    $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
    $data['ufname'] = $details[0]->fname;
    $data['ulname'] = $details[0]->lname;
    $data['uemail'] = $details[0]->email;
    $this->load->view('profile_view', $data);
	}

	function edit()
    {
			// check if the user exists before trying to edit it
			if(isset($user['id']))
			{
        $this->form_validation->set_rules('pro_name','Product Name','required');
        $this->form_validation->set_rules('pro_category','Product Category','required');
        $this->form_validation->set_rules('pro_desc','Product Description','required');
        $this->form_validation->set_rules('pro_price','Product Price','required|integer');
        $this->form_validation->set_rules('pro_stock','Available Stock','required|integer');
        $this->form_validation->set_rules('pro_sale','Sale','integer');

        if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('profile_update_view',$data);
            } else {
                        $data_products = array(
                        'pro_name'          => set_value('pro_name'),
                        'pro_category'      => set_value('pro_category'),
                        'pro_desc'          => set_value('pro_desc'),
                        'pro_price'         => set_value('pro_price'),
                        'pro_stock'         => set_value('pro_stock'),
                        'pro_sale'         => set_value('pro_sale'),
                        'pro_image'         => $upload_image['file_name']

                        );//end array data_products
                        $this->product_model->edit($pro_id,$data_products);
                        redirect('home');

                }//end if FILES

            }//end if form_validation
    }

    /*
     * Editing a user

    function edit($id)
    {
        // check if the user exists before trying to edit it
        $user = $this->profile_model->get_user($id);

        if(isset($user['id']))
        {
*/

}
?>
