<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_user extends CI_Model{
    function __construct() { 
        parent::__construct();
      
    }  
    function getallregis() {
        $this->db->from("m_registration"); 
        return $this->db->get();
	}
	function addCustomer($data){
        $this->db->insert('m_registration', $data);
    }
    
    function approve($id_regis, $customer_id){
        $data = array(
           'STATUS' => 'Approved'
        );

        $this->db->where('ID_REGIS', $id_regis);
        $this->db->update('m_registration', $data); 


    }

    function reject($id_regis){
        $data = array(
           'STATUS' => 'Rejected'
        );

        $this->db->where('ID_REGIS', $id_regis);
        $this->db->update('m_registration', $data); 
    }

    function member($id_regis){
        $data = array(
           'STATUS' => 'Member'
        );

        $this->db->where('ID_REGIS', $id_regis);
        $this->db->update('m_registration', $data); 
    }

    function getdata($id){
        $this->db->where('ID_REGIS',$id);
        $this->db->select('*');
        $this->db->from('m_registration');
        return $this->db->get();
    }
    
    function checkEmail($email){
        $this->db->where('EMAIL',$email);
        $this->db->select('*');
        $this->db->from('m_registration');
        $data = $this->db->get();
        foreach($data->result() as $row){
            return $row->EMAIL;
        }
    }
    
}