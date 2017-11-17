<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SalesHistori extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('model_salesmonitoring');
      
    } 
    public function index(){
        $this->load->view('vsalesmonitoring');
    }
    public function GroupBy($order_by, $group_by, $month = '4', $year = '2016', $weight = 'bruto', $id = null){
    	$data['sales_dss'] = $this->model_salesmonitoring->getdetail($order_by, $group_by, $month, $year, $weight, $id);
        $data['order_by'] = $order_by;
        $data['group_bys'] = $group_by;
        if($group_by=='GroupCustomer'){
            $group_by = 'Group Customer';
        }
        $data['group_by'] = $group_by;
        //$data['sub'] = $sub;
        $data['month'] = $month;
        $data['year'] = $year;
        $data['weight'] = $weight;
        $data['id'] = $id;
        $this->load->view('dsalesmonitoring', $data); 
    }
}
