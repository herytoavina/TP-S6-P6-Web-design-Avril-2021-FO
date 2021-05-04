<?php
    class BaseController extends CI_Controller{
        public function __construct(){
            parent::__construct();
            date_default_timezone_set('Africa/Nairobi'); 
            $this->load->model('AcceuilModel');
            $this->load->model('InfoModel');
        }
    }
?>