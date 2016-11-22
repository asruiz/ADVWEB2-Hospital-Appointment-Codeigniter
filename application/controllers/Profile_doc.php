<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile_doc extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->helper('url','form');
		$this->load->database('default');
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('doctor_model');
		$this->load->model('profile_model');

	}

	function index() {
    $details = $this->doctor_model->get_doctor_by_id($this->session->userdata('uid'));
    $data['ufname'] = $details[0]->fname;
    $data['ulname'] = $details[0]->lname;
    $data['uemail'] = $details[0]->email;
    $data['ulocation'] = $details[0]->location;
    $data['uspecialization'] = $details[0]->specialization;
    $data['ufacility'] = $details[0]->facility;
    $data['uday'] = $details[0]->day;
    $data['ufromtime'] = $details[0]->fromtime;
    $data['utotime'] = $details[0]->totime;

    $this->load->view('profile_view_doc', $data);
	}
}
?>
