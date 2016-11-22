<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Search Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('search_model');
        $this->load->helper(array('url','html'));
        $this->load->library('session');
        $this->load->database();
    }

    function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['results'] = $this->search_model->search($keyword);
        if (!empty($data['results'])) {
            $this->load->view('docmanila_view',$data);
        } else {
            $this->load->view('none_found', $data);
        }
    }

}
?>
