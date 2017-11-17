<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_email extends CI_Model{

	function history($data){
        $this->db->insert('m_email', $data);
    }
    
}   
