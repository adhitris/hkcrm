<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Publish extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('Model_publish');
      
    } 

    public function approve(){
        $hdr_id = $this->input->post('id');
        $this->Model_publish->approve($hdr_id);
        echo json_encode(true);
    }

    public function reject(){
        $hdr_id = $this->input->post('id');
        $this->Model_publish->reject($hdr_id);
        echo json_encode(true);
    }
}
