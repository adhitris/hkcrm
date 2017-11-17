<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {
	 function __construct() { 
        parent::__construct();
	        $this->load->model('Model_promo');
	        $this->load->helper('url');
	        $this->load->database();
	        $this->load->library('pagination');
        }

	public function index()
	{
		//pagination settings
        $config['base_url'] = site_url('Promo/index');
        $config['total_rows'] = $this->db->count_all('t_promo');
        $config['per_page'] = "5";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['deptlist'] = $this->Model_promo->gete($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
        $data['pr']= $this->Model_promo->getpromo();
		$this->load->view('vpromo',$data);
	}
	public function detail($id){
		$this->Model_promo->detail($id);
		$data['detail']=$this->Model_promo->detail($id);
		$this->load->view('vpromo',$data);
	}
}
