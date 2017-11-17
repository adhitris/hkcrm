<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Onchange extends CI_Controller{

	public function __Construct(){
		parent::__Construct();
		$this->load->model('Model_onchange');

	}

    public function index(){
    	$data['orders']=$this->Model_onchange->getorder();
    	$data['sub']=$this->Model_onchange->getsub();
    	$this->load->view('vsalesmonitoring',$data);
    }
}
