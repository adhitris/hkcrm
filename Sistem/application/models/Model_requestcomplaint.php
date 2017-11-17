<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_requestcomplaint extends CI_Model{

    function getallrequestcomplaint() {
        $this->db->from("t_complaint");
        $this->db->group_by("COMPLAINT_ID");
        return $this->db->get();
    }

	function getdetail($complaint_id){

        $this->db->where('COMPLAINT_ID', $complaint_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("t_complaint");
        
        return $this->db->get();
    }

    function approve($complaint_id){
        $FOLLOW_UP_BY = $this->session->userdata('USERNAME');
        if($this->session->userdata('ROLE')=='SALES'){
            $FOLLOW_UP_BY = $this->session->userdata('SALES_ID');
        }
        $data = array(
           'STATUS' => 'approved',
           'FOLLOW_UP_BY' => $FOLLOW_UP_BY
        );

        $this->db->where('COMPLAINT_ID', $complaint_id);
        $this->db->update('t_complaint', $data); 
    }

    function reject($complaint_id){
        $FOLLOW_UP_BY = $this->session->userdata('USERNAME');
        if($this->session->userdata('ROLE')=='SALES'){
            $FOLLOW_UP_BY = $this->session->userdata('SALES_ID');
        }
        $data = array(
           'STATUS' => 'rejected',
           'FOLLOW_UP_BY' => $FOLLOW_UP_BY
        );

        $this->db->where('COMPLAINT_ID', $complaint_id);
        $this->db->update('t_complaint', $data); 
    }
}
