<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){

        parent::__construct();

        if($this->session->userdata('USERNAME')==""){

            redirect('Auth');

        }

        $this->load->helper('text');

        $this->load->model('Model_customer');

        

        

    }

    public function index(){

        $data['USERNAME'] = $this->session->userdata('USERNAME');

        $data['ROLE'] = $this->session->userdata('ROLE');

        $data['customer']= $this->Model_customer->getallcustomer();

        $data['cust']=$this->Model_customer->getname($data['USERNAME'] = $this->session->userdata('USERNAME'));

        $this->load->view('vhome',$data);

    }

    

    public function logout (){

        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        session_destroy();
        redirect('Auth');

        

    }

}

