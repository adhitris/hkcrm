<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Model_user extends CI_Model{
    public function cek_user($data){
        $query = $this->db->get_where('m_user',$data);
        return $query;
        
    }
    function get_manager(){
    	$this->db->where('ROLE','MANAGER');
        $this->db->select('*');
        $this->db->from('m_user');
        return $this->db->get();
    }
}
