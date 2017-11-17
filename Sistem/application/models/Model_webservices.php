<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_webservices extends CI_Model{

    function getcustomer() {
        $this->db->from("m_customer");
        return $this->db->get();
    }
    function insert_salesdss($data){
        $this->db->insert('t_sales_dss',$data);
    }
    function insert_monitoring($data){
        $this->db->insert('t_monitoring',$data);
    }
    function delete_monitoring($mydate){
    	$this->db->where('UPLOAD_DATE', $mydate);
    	$this->db->delete('t_monitoring');
    }
    function delete_sales_dss($month,$year){
    	$this->db->where('MONTH', $month);
    	$this->db->where('YEAR', $year);
    	$this->db->delete('t_sales_dss');
    }

}
