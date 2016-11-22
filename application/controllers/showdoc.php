<?php
   class showdoc extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->helper('url_helper');
            $this->load->library(array('session', 'form_validation'));
            $this->load->database('default');
            $this->load->model('user_model');
        }


        /*public function getDoctor() {
           $data['doctor'] = $this->user_model->getAllDoctors();
             $this->load->view('appointment_view', $data);
        }*/

        public function show() {
            //load the database
            $this->load->database();
            //load the model
            $this->load->model('user_model');
            //load the method of model
            $data['h']=$this->user_model->select();
            //return the data in view
            $this->load->view('docmanila_view', $data);
        }

        public function showcaloocan() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectcaloocan();
            $this->load->view('doccaloocan_view', $data);
        }


        public function showlaspinas() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectlaspinas();
            $this->load->view('doclaspinas_view', $data);
        }

        public function showmakati() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectmakati();
            $this->load->view('docmakati_view', $data);
        }

        public function showmalabon() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectmalabon();
            $this->load->view('docmalabon_view', $data);
        }

        public function showmandaluyong() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectmandaluyong();
            $this->load->view('docmandaluyong_view', $data);
        }

        public function showmarikina() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectmarikina();
            $this->load->view('docmarikina_view', $data);
        }

        public function showmuntinlupa() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectmuntinlupa();
            $this->load->view('docmuntinlupa_view', $data);
        }

        public function shownavotas() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectnavotas();
            $this->load->view('docnavotas_view', $data);
        }

        public function showparanaque() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectparanaque();
            $this->load->view('docparanaque_view', $data);
        }

        public function showpasay() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectpasay();
            $this->load->view('docpasay_view', $data);
        }

        public function showpasig() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectpasig();
            $this->load->view('docpasig_view', $data);
        }

        public function showquezoncity() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectquezoncity();
            $this->load->view('docquezoncity_view', $data);
        }

        public function showsanjuan() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectsanjuan();
            $this->load->view('docsanjuan_view', $data);
        }

        public function showtaguig() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selecttaguig();
            $this->load->view('doctaguig_view', $data);
        }

        public function showvalenzuela() {
            $this->load->database();
            $this->load->model('user_model');
            $data['h']=$this->user_model->selectvalenzuela();
            $this->load->view('docvalenzuela_view', $data);
        }
    }
?>
