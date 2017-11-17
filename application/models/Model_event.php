<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_event extends CI_Model{

    function getevent() {
        $this->load->helper('text'); 
        $this->db->from("t_event");
        $this->db->limit(3);
        //$this->db->join("t_dtl_event","event_id_fk=t_event.event_id");
        $this->db->where("STATUS","PUBLISH");
        $this->db->ORDER_BY("DATE","DESC");
        return $this->db->get();
    }
    function getimage($id){
        $this->db->from("t_dtl_event");
        $this->db->where("event_id_fk",$id);
        return $this->db->get();

    }
    
    function lihat($sampai,$dari){
    	return $query = $this->db->get('t_event',$sampai,$dari)->result();

    }
    function jumlah(){
    	return $this->db->get('t_event')->num_rows();
    }

     function gete($limit, $start)
    {
        $sql = "SELECT * FROM t_event as A ,t_dtl_event as B WHERE A.STATUS='PUBLISH'  group by A.event_id order by DATE limit " . $start . "," . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function detail($kondisi){
        $this->db->where('EVENT_ID',$kondisi);
        $this->db->from('t_event');
        return $this->db->get();
    }

    

    
}
