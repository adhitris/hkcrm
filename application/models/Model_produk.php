<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_produk extends CI_Model{
	function getall(){
        $this->db->from('t_produk');
        return $this->db->get();
	}
    function detail($kondisi){
        $this->db->where('ID_PRODUK',$kondisi);
        $this->db->from('t_produk');
        return $this->db->get();
    }

    

    
}
