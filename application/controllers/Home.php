<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() { 
        parent::__construct();
        $this->load->model('Model_event');
        $this->load->model('Model_promo');
        $this->load->model('Model_produk');
        $this->load->helper('text'); 
      
    }

	public function index()
	{
		$data['slide']=$this->Model_promo->getpromo();
        $data['produk']=$this->Model_produk->getall();
		$data['event']=$this->Model_event->getevent();
		$a= $this->Model_event->getevent();
        foreach ($a->result() as $key) {
                $b=$key->EVENT_ID;
                // print_r($b);
        }
        
        $data['image']= $this->Model_event->getimage(@$b);
		$this->load->view('vhome',$data);
	}
}
