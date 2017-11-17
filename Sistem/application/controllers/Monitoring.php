<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Monitoring extends CI_Controller{
    function __construct() { 
        parent::__construct();
        $this->load->model('Model_monitoring');
      
    } 
    public function index(){

        if( $data['ROLE'] = $this->session->userdata('ROLE')=="ADMINISTRATOR"){
            $data['listmonitoring'] = $this->Model_monitoring->getallmon();
            $sql="SELECT SUM( QTY_SO ) as A, SUM( QTY_PROCESS ) as B, SUM( QTY_SENT )as C, SUM( QTY_RETUR )as D FROM t_monitoring WHERE UNIT='ROL'";
            $query1 = $this->db->query($sql);
            $data['query1'] = $this->db->query($sql);
            $this->load->view('vmonitoring',$data);

            
        
        }else{   
            $data['getfk'] = $this->Model_monitoring->getfk($data['USERNAME'] = $this->session->userdata('USERNAME'));
            foreach($data['getfk']->result() as $a){
                
                $a=$a->CUSTOMER_ID;
            };
            $data['listmonitoring'] = $this->Model_monitoring->getallmonitoring(@$a);
            $sql="SELECT SUM( QTY_SO ) as A, SUM( QTY_PROCESS ) as B, SUM( QTY_SENT )as C, SUM( QTY_RETUR )as D FROM t_monitoring WHERE CUSTOMER_FK='".@$a."' AND UNIT='ROL'";
            $query1 = $this->db->query($sql);
            $data['query1'] = $this->db->query($sql);
            $this->load->view('vmonitoring',$data);
        }
           
    }
    public function detail($so_number){
        $data['so'] = $this->Model_monitoring->getdetail($so_number);
        $this->load->view('dmonitoring', $data); 
    }

}