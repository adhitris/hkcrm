<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_publish extends CI_Model{

    function approve($hdr_id){
        
        $data = array(
           'STATUS' => 'PUBLISH',
        );

        $this->db->where('EVENT_ID', $hdr_id);
        $this->db->update('t_event', $data);
    }

    function reject($hdr_id){
        $data = array(
           'STATUS' => 'UNPUBLISH',
        );

        $this->db->where('EVENT_ID', $hdr_id);
        $this->db->update('t_event', $data);
    }
}
