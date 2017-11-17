<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reqmultiple extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('model_request');
      
    } 
    public function index(){
         if($_POST==NULL) {
                $this->load->view('vmultiple');
            }else {
                redirect('Reqmultiple/add_multiple_post/'.$_POST['banyak_data']);
            }
           
    }



    /*function add_multiple() {
        if($_POST==NULL) {
            $this->load->view('add_multiple');
        }else {
            redirect('Buku/add_multiple_post/'.$_POST['banyak_data']);
        }
    }*/
    function add_multiple_post($banyak_data=0) {
        if($_POST==NULL) {
             $data['getfk'] = $this->model_request->getfk($data['USERNAME'] = $this->session->userdata('USERNAME'));
           
            $data['banyak_data'] = $banyak_data;
            $this->load->view('form',$data);
        }else {
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
           $this->model_request->in();
        }
    }
    function lihat_data(){
            $data['buku'] = $this->db->get('buku')->result();
            $this->load->view('list_buku',$data);
    }




    /*public function insert(){
        $data['table1_data']=$this->model_request->insert_table1();
        $latest_id=$this->model_request->get_latest_id();
        $data['table1_data']=$this->model_request->insert_table2($latest_id);

    }*/
    /*public function addDBrequest(){
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
                $fk = $this->input->post('customer_fk');
                $note = $this->input->post('note');
                $yarn = $this->input->post('yarn');
                $knitting = $this->input->post('knitting');
                $colour = $this->input->post('colour');
                $motif = $this->input->post('motif');
                $motif_colour= $this->input->post('motif_colour');
                $qty= $this->input->post('qty');
                $unit= $this->input->post('unit');
                $note= $this->input->post('note');
                $data= array (
                    'CUSTOMER_FK' =>$fk,
                    'note' =>$note,
                    'yarn' =>$yarn, 
                    'knitting' =>$knitting,    
                    'colour' =>$colour, 
                    'motif' =>$motif, 
                    'motif_colour' =>$motif_colour, 
                    'qty' =>$qty, 
                    'unit' =>$unit, 
                    'note' =>$note, 
                    'SAMPLE_UPLOAD'=> $file_data['file_name'],
            );
            $this->model_request->addsales($data);
            echo"<script>alert('Anda Berhasil Registrasi');history.go(-1);</script>";
            redirect('Request');
        }
        
        
    }*/
    
}
