<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_onchange extends CI_Model{
    function __construct() { 
        parent::__construct();
        
      
    } 
    function getorder() {
        $this->db->from("tbl_order");
        return $this->db->get();
	}
    function getsub(){
        $this->db->from("tbl_sub");
        return $this->db->get();
       
    }
}
