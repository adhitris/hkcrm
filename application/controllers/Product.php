<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	 function __construct() { 
        parent::__construct();
	        $this->load->model('Model_produk');
        }
	public function index()
	{	
		$data['produk']=$this->Model_produk->getall();
		$this->load->view('vproduct',$data);
	}
	public function detail($id){
		$this->Model_produk->detail($id);
		$data['detail']=$this->Model_produk->detail($id);
		$this->load->view('vdproduk',$data);
	}
}
