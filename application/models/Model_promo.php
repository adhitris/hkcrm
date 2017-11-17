<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_promo extends CI_Model{

    function getpromo() {
        $this->db->from("t_promo");
        $this->db->limit(5);
        $this->db->where("STATUS","PUBLISH");
        return $this->db->get();
    }
    
    function lihat($sampai,$dari){
    	return $query = $this->db->get('t_promo',$sampai,$dari)->result();

    }
    function jumlah(){
    	return $this->db->get('t_promo')->num_rows();
    }

     function gete($limit, $start)
    {
        $sql = "SELECT * FROM t_promo WHERE STATUS='PUBLISH' ORDER BY PROMO_ID limit " . $start .",". $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    function detail($kondisi){
        $this->db->where('PROMO_ID',$kondisi);
        $this->db->from('t_promo');
        return $this->db->get();
    }

    

    
}
