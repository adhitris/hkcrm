<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_monitoring extends CI_Model{
    function getfk($kondisi){
        $this->db->where('USER_FK',$kondisi);
        $this->db->select('*');
        $this->db->from('m_customer');

        return $this->db->get();

    }
    function getallmonitoring($a) {
        /*$this->db->where("CUSTOMER_FK",$a);
        $this->db->from("t_monitoring");
        $this->db->group_by("SO_NUMBER");
        return $this->db->get();*/

        $this->db->select('*');
        $this->db->select_sum('QTY_SO');
        $this->db->select_sum('QTY_PROCESS');
        $this->db->select_sum('QTY_SENT');
        $this->db->select_sum('QTY_RETUR');
        $this->db->where('UNIT','ROL');
        $this->db->where("CUSTOMER_FK",$a);
        $this->db->from('t_monitoring');
        $this->db->join('m_customer', 'CUSTOMER_ID = t_monitoring.CUSTOMER_FK');
        $this->db->group_by("SO_NUMBER");
         
        return $this->db->get();
    }
     function getallmon() {
       /* $this->db->from("t_monitoring");
        $this->db->group_by("SO_NUMBER");
        return $this->db->get();*/
        
        $this->db->select('*');
        $this->db->select_sum('QTY_SO');
        $this->db->select_sum('QTY_PROCESS');
        $this->db->select_sum('QTY_SENT');
        $this->db->select_sum('QTY_RETUR');
        $this->db->from('t_monitoring');
        $this->db->where('UNIT','ROL');
        $this->db->join('m_customer', 'CUSTOMER_ID = t_monitoring.CUSTOMER_FK');
        $this->db->group_by("SO_NUMBER");
         
        return $this->db->get();

    }
    function getdetail($so_number){

        $this->db->where('SO_NUMBER', $so_number); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("t_monitoring");
        
        return $this->db->get();
    }
    function gettotal($so_number){

     
    }
    function getname($kondisi){
        $this->db->where('CUSTOMER_ID',$kondisi);
        $this->db->select('*');
        $this->db->from('m_customer');

        return $this->db->get();

    }
}