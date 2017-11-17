<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_company extends CI_Model{

    function getpromo() {
        $this->db->select('*');
        $this->db->from('t_promo');
        return $this->db->get();

    }
   function addtopromo($data){
		$this->db->insert('t_promo',$data);
   }
}
