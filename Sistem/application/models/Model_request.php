<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_request extends CI_Model{

    function getfk($kondisi){
        $this->db->where('USER_FK',$kondisi);
        $this->db->select('*');
        $this->db->from('m_customer');

        return $this->db->get();

    }

    function getallrequest() {
        /*$this->db->from("t_request_order_hdr");
        return $this->db->get();*/
        $this->db->select('*');
        $this->db->from('t_request_order_hdr');
        $this->db->join('m_customer', 'CUSTOMER_ID = t_request_order_hdr.CUSTOMER_FK');
        $this->db->order_by('DATE','desc');
        return $this->db->get();
    }
    function getallrequestbyfk($kondisi) {
        /*$this->db->from("t_request_order_hdr");
        return $this->db->get();*/
        $this->db->select('*');
        $this->db->where("CUSTOMER_FK",$kondisi);
        $this->db->from('t_request_order_hdr');
        $this->db->join('m_customer', 'CUSTOMER_ID = t_request_order_hdr.CUSTOMER_FK');
        $this->db->order_by('DATE','desc');
        return $this->db->get();
    }
     function getcustomerfk($userfk) {
        $this->db->where('USER_FK', $userfk); 
        $this->db->select("*");
        $this->db->from("m_customer");
        
        return $this->db->get();
    }
	 function addsales($data){
        $this->db->insert('m_sales', $data);
    }
    public function get_latest_id(){
   		$sql=$this->db->query("SELECT MAX(REQUEST_ORDER_HDR_ID) as id FROM t_request_order_hdr");
        return $sql->row_array();
	} 
    /*function insert_table1(){
        $id = $this->input->post('request_id');
        $customer_fk = $this->input->post('customer_fk');
        $note = $this->input->post('note');
        $status ='Request';
        $data= array (
            'REQUEST_ORDER_HDR_ID' =>$id,
        	'CUSTOMER_FK' =>$customer_fk,
            'note' =>$note, 
            'status' =>$status,
        );
        $this->db->insert('t_request_order_hdr', $data);
    }
    function insert_table2($table1_id){
        $config['upload_path'] = 'assets/uploads/request';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            echo $this->upload->display_errors();
        } else {
          //here $file_data receives an array that has all the info
          //pertaining to the upload, including 'file_name'
        $file_data = $this->upload->data();
        $yarn = $this->input->post('yarn');
        $knitting = $this->input->post('knitting');
        $colour = $this->input->post('colour');
        $motif = $this->input->post('motif');
        $motif_colour= $this->input->post('motif_colour');
        $qty= $this->input->post('qty');
        $unit= $this->input->post('unit');
        $data= array (
            'REQUEST_ORDER_HDR_FK' =>$table1_id['id'],
            'yarn' =>$yarn, 
            'knitting' =>$knitting,    
            'colour' =>$colour, 
            'motif' =>$motif, 
            'motif_colour' =>$motif_colour, 
            'qty' =>$qty, 
            'unit' =>$unit, 
            'SAMPLE_UPLOAD'=> $file_data['file_name'],
            );
        $this->db->insert('t_request_order_dtl', $data);
        redirect('Request');
    }
    }*/
     /*function insert_table1(){
        $id = $this->input->post('request_id');
        $customer_fk = $this->input->post('customer_fk');
        $note = $this->input->post('note');
        $status ='Request';
        $data= array (
            'REQUEST_ORDER_HDR_ID' =>$id,
            'CUSTOMER_FK' =>$customer_fk,
            'note' =>$note, 
            'status' =>$status,
        );
        $this->db->insert('t_request_order_hdr', $data);
    }
    function in(){
        

        foreach($_POST['data'] as $d){
            print_r($d);
            //$this->db->insert('t_request_order_dtl',$d);
            }
            //redirect('Request');
    }*/

    function addHeader($data){
        $this->db->insert('t_request_order_hdr',$data);
    }
    function addDetail($data){
        
            $this->db->insert('t_request_order_dtl',$data);
    }
    function getdetail($request_id){

        $this->db->where('REQUEST_ORDER_HDR_FK', $request_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
        $this->db->select("*");
        $this->db->from("t_request_order_dtl");

        return $this->db->get();
    }
}   
