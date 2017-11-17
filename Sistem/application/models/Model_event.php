<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_event extends CI_Model{

    function getfk($kondisi){
        $this->db->where('USER_FK',$kondisi);
        $this->db->select('*');
        $this->db->from('m_customer');

        return $this->db->get();

    }
    function getallevent() {
        /*$this->db->from("t_request_order_hdr");
        return $this->db->get();*/
        $this->db->select('*');
        $this->db->from('t_event');
        $this->db->join('t_dtl_event','event_id_fk=t_event.event_id');
        $this->db->group_by('EVENT_ID_FK');
        $this->db->order_by('DATE_EVENT','DESC');
        return $this->db->get();
    }
    
    function addHeader($data){
        $this->db->insert('t_event',$data);
    }
    function addDetail($data){
        $this->db->insert('t_dtl_event',$data);
    }
}   
