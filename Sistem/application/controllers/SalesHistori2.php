<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SalesHistori extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('Model_salesmonitoring2');
      
    } 
    public function index(){
        $this->load->view('vsalesmonitoring');
    }
    public function GroupBy($group_by, $month = '4', $year = '2016', $weight = 'bruto', $id = null){
    	$data['sales_dss'] = $this->Model_salesmonitoring->getdetail($group_by, $month, $year, $weight, $id);
        $data['group_by'] = $group_by;
        $data['month'] = $month;
        $data['year'] = $year;
        $data['weight'] = $weight;
        $data['id'] = $id;
        $this->load->view('dsalesmonitoring', $data); 
    }
}
