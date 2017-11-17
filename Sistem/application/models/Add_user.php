<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_user extends CI_Model{
    function __construct() { 
        parent::__construct();
        
      
    } 
    function getuser() {
        $this->db->from("m_user");
        return $this->db->get();
	}
    function addUser($data){
        $this->db->insert('m_user', $data);
    }

    function getrole(){
        $this->db->from("m_role");
        return $this->db->get();
    }
    function updateusertodb($data, $condition){
        $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('m_user', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller


    }
    function getupdateuser($id){

        $this->db->where('USERNAME', rawurldecode($id)); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("m_user");
        
        return $this->db->get();
    }
    function addCustomer($data){
        $this->db->insert('m_customer', $data);
    }
    
}
