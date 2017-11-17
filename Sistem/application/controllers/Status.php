<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Status extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('Model_status');
      
    } 
    public function index(){
    	$this->Model_status->Ubah();

    }
}
