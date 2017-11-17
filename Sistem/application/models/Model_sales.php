<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sales extends CI_Model{
    function __construct() { 
        parent::__construct();
        
      
    } 
    function getsales() {
        $this->db->from("m_sales");
        return $this->db->get();
	}
    function addsales($data){
        $this->db->insert('m_sales', $data);
    }
    function getupdatesales($id){

        $this->db->where('sales_id', $id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("m_sales");
        
        return $this->db->get();
    }
    function updatesalestodb($data, $condition){
        $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('m_sales', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller


    }

    function getdatasales($id){

        $this->db->where('sales_id', $id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("m_sales");
        
        return $data = $this->db->get();
        foreach($data->result() as $row){
            $this->db->where('username', $row->USER_FK);
            $this->db->select("*");
            $this->db->from("m_user");
            return $this->db->get();
        }
    }
}
