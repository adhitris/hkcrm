<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_customer extends CI_Model{
    function __construct() { 
        parent::__construct();
        }

    function getallcustomer() {
        $this->db->from("m_customer");
        return $this->db->get();
    }

    function updateusertodb($data, $condition){
        $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('m_customer', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller


    }
    function getupdatecustomer($CUSTOMER_ID){

        $this->db->where('CUSTOMER_ID', $CUSTOMER_ID); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("m_customer");
        
        return $this->db->get();
    }
    
    function addCustomer($data){
        $this->db->insert('m_customer', $data);
    }

    function getname($kondisi){
        $this->db->where('USER_FK',$kondisi);
        $this->db->select('*');
        $this->db->from('m_customer');

        return $this->db->get();

    }

    function getsales($CUSTOMER_ID){
        $this->db->where('CUSTOMER_ID',$CUSTOMER_ID);
        $this->db->select('*');
        $this->db->from('m_customer');

        $data = $this->db->get();
        foreach($data->result() as $row){
            return $row->SALES_FK;
        }

    }

    function getnames($CUSTOMER_ID){
        $this->db->where('CUSTOMER_ID',$CUSTOMER_ID);
        $this->db->select('*');
        $this->db->from('m_customer');

        $data = $this->db->get();
        foreach($data->result() as $row){
            return $row->NAME;
        }

    }

    function getemail($CUSTOMER_ID){
        $this->db->where('CUSTOMER_ID',$CUSTOMER_ID);
        $this->db->select('*');
        $this->db->from('m_customer');

        $data = $this->db->get();
        foreach($data->result() as $row){
            return $row->EMAIL;
        }

    }
    

    
}
