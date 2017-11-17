<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_complaint extends CI_Model{

    function getallcomplaint() {
        /*$this->db->from("t_complaint");
        return $this->db->get();*/
        $this->db->select('*');
        $this->db->from('t_complaint');
        $this->db->join('m_customer', 'CUSTOMER_ID = t_complaint.CUSTOMER_FK');
        return $this->db->get();

    }
	function getfk($kondisi){
        $this->db->where('USER_FK',$kondisi);
        $this->db->select('*');
        $this->db->from('m_customer');

        return $this->db->get();

    }
    
    function getcomplaint($a) {
      /*  $this->db->where("CUSTOMER_FK",$a);
        $this->db->from("t_complaint");
        return $this->db->get();*/
        $this->db->select('*');
        $this->db->where("CUSTOMER_FK",$a);
        $this->db->from('t_complaint');
        $this->db->join('m_customer', 'CUSTOMER_ID = t_complaint.CUSTOMER_FK');
        return $this->db->get();
   }
   function addcomplaint($data){
		$this->db->insert('t_complaint', $data);
   }
}
