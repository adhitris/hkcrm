<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_requestapproval extends CI_Model{

    function getallrequestapproval() {
        $this->db->from("t_request_order_hdr");
        $this->db->group_by("REQUEST_ORDER_HDR_ID");
        return $this->db->get();
    }
	function getdetail($hdr_id){

        $this->db->where('REQUEST_ORDER_HDR_FK', $hdr_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("t_request_order_dtl");
        
        return $this->db->get();
    }

    function approve($hdr_id){
        $FOLLOW_UP_BY = $this->session->userdata('USERNAME');
        if($this->session->userdata('ROLE')=='SALES'){
            $FOLLOW_UP_BY = $this->session->userdata('SALES_ID');
        }
        $data = array(
           'STATUS' => 'approved',
           'FOLLOW_UP_BY' => $FOLLOW_UP_BY
        );

        $this->db->where('REQUEST_ORDER_HDR_ID', $hdr_id);
        $this->db->update('t_request_order_hdr', $data);
    }

    function reject($hdr_id){
        $FOLLOW_UP_BY = $this->session->userdata('USERNAME');
        if($this->session->userdata('ROLE')=='SALES'){
            $FOLLOW_UP_BY = $this->session->userdata('SALES_ID');
        }
        $data = array(
           'STATUS' => 'rejected',
           'FOLLOW_UP_BY' => $FOLLOW_UP_BY
        );

        $this->db->where('REQUEST_ORDER_HDR_ID', $hdr_id);
        $this->db->update('t_request_order_hdr', $data); 
    }
}
