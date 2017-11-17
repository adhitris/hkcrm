<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class webservices extends CI_Controller{
	function __construct() { 
        parent::__construct();
         $this->load->model('model_webservices');
      
    } 
    public function index(){
           
    }
   public function customers(){
  
        $data['cs'] = $this->model_webservices->getcustomer();
        $a_json = array();
        $a_json_row= array();

        foreach ($data['cs']->result() as $row) {
            $a_json_row['customerId'] = $row->CUSTOMER_ID;
            array_push($a_json, $a_json_row);
        }
        echo json_encode($a_json);
        //$this->load->view('dmonitoring', $data); 
    }
    public function POSTSALESDSS(){
        $data = array(
            'MONTH'=> $this->input->post('month'),
            'YEAR'=> $this->input->post('year'),
            'CUSTOMER_FK'=> $this->input->post('custId'),
            'SALES_FK'=> $this->input->post('salesId'),
            'YARN'=> $this->input->post('yarn'),
            'KNITTING'=> $this->input->post('knitting'),
            'KG'=> $this->input->post('kg'),
            );
        if($this->model_webservices->insert_salesdss($data))
        {
            echo FALSE;
        }
        else{echo TRUE;
        }
    }
    public function POSTMONITORINGORDER(){
           $date=$this->input->post('UPLOAD_DATE');
        $mytime=DateTime::createFromFormat('d-M-Y',$date);
        $mydate=$mytime->format('Y-m-d');
         $data = array(
            'UPLOAD_DATE'=> $mydate,
            'SO_NUMBER'=> $this->input->post('SO_NUMBER'),
            'SO_DATE'=> $this->input->post('SO_DATE'),
            'CUSTOMER_FK'=> $this->input->post('CUSTOMER_FK'),
            'PO_NUMBER'=> $this->input->post('PO_NUMBER'),
            'YARN'=> $this->input->post('YARN'),
            'KNITTING'=> $this->input->post('KNITTING'),
            'COLOUR'=> $this->input->post('COLOUR'),
            'MOTIF'=> $this->input->post('MOTIF'),
            'MOTIF_COLOUR'=> $this->input->post('MOTIF_COLOUR'),
            'QTY_SO'=> $this->input->post('QTY_SO'),
            'QTY_PROCESS'=> $this->input->post('QTY_PROCESS'),
            'QTY_SENT'=> $this->input->post('QTY_SENT'),
            'QTY_RETUR'=> $this->input->post('QTY_RETUR'),
            'UNIT'=> $this->input->post('UNIT'),
            );
        if($this->model_webservices->insert_monitoring($data))
        {
            echo FALSE;
        }
        else{echo TRUE;
        }

    }
}
