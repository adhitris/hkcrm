<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Request extends CI_Controller{
	function __construct() {  
        parent::__construct();
        $this->load->model('Model_request');
        $this->load->model('Model_sales');
        $this->load->model('Model_customer');
        $this->load->model('Model_user');
      
    } 
    public function index(){
    if( $data['ROLE'] = $this->session->userdata('ROLE')=="ADMINISTRATOR"){
        $data['listrequest'] = $this->Model_request->getallrequest();
        $data['getfk'] = $this->Model_request->getfk($data['USERNAME'] = $this->session->userdata('USERNAME'));
        $this->load->view('vreqproduct',$data);
        
        }else{   
            $data['getfk'] = $this->Model_request->getfk($data['USERNAME'] = $this->session->userdata('USERNAME'));
            foreach($data['getfk']->result() as $a){
                
                $a=$a->CUSTOMER_ID;
            };
            $data['listrequest'] = $this->Model_request->getallrequestbyfk(@$a);
            $this->load->view('vreqproduct',$data);
        }
    }
    public function insert(){
        $data['table1_data']=$this->Model_request->insert_table1();
        $latest_id=$this->Model_request->get_latest_id();
        $data['table1_data']=$this->Model_request->insert_table2($latest_id);

    }
    public function addDBrequest(){
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
            $this->Model_request->addsales($data);
            //echo"<script>alert('Anda Berhasil Registrasi');history.go(-1);</script>";
            redirect('Request');
        }
        
        
    }
    public function addOrder(){
        $data['getfk'] = $this->Model_request->getfk($data['USERNAME'] = $this->session->userdata('USERNAME'));
        $this->load->view('vaddorder',$data);
    }

    public function multi(){
        $id = $this->input->post('request_id');
        $customer_fk = $this->input->post('customer_fk');
        $note = $this->input->post('note');
        $status ='request';
        $data= array (
            'REQUEST_ORDER_HDR_ID' =>$id,
            'CUSTOMER_FK' =>$customer_fk,
            'NOTE' =>$note, 
            'STATUS' =>$status,
        );
        //print_r($data);
        $this->Model_request->addHeader($data);
        /*$config['upload_path'] = 'assets/uploads/request';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);
       */
       
        $yarn_array=$this->input->post('yarn');
        $knitting_array=$this->input->post('knitting');
        $colour_array=$this->input->post('colour');
        $motif_array=$this->input->post('motif');
        $motif_colour_array=$this->input->post('motif_colour');
        $qty_array=$this->input->post('qty');
        $unit_array=$this->input->post('unit');
          // $img_array=$this->input->post('uploadedimages');
        //$file_data_array=$this->upload->do_upload('userfile');
        $files = $_FILES['uploadedimages']; 
      $this->load->library('upload');
      // next we pass the upload path for the images
      $config['upload_path'] = FCPATH . 'assets/uploads/request';
      // also, we make sure we allow only certain type of images
      $config['allowed_types'] = 'gif|jpg|png';
        $array=$this->input->post('yarn');

            for ($i=0;$i<count($array);$i++){
                //$file_data = $this->upload->data();
                $data=array(
                    'REQUEST_ORDER_HDR_FK' =>$id,
                    'YARN' =>$yarn_array[$i],
                    'KNITTING' =>$knitting_array[$i],
                    'COLOUR' =>$colour_array[$i],
                    'MOTIF' =>$motif_array[$i],
                    'MOTIF_COLOUR' =>$motif_colour_array[$i],
                    'QTY'=>$qty_array[$i],
                    'UNIT'=>$unit_array[$i],
                    'SAMPLE_UPLOAD'=>$files['name'][$i]
                    );

                $_FILES['uploadedimage']['name'] = $files['name'][$i];
                $_FILES['uploadedimage']['type'] = $files['type'][$i];
                $_FILES['uploadedimage']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['uploadedimage']['error'] = $files['error'][$i];
                $_FILES['uploadedimage']['size'] = $files['size'][$i];
        //now we initialize the upload library
                $this->upload->initialize($config);
        // we retrieve the number of files that were uploaded
                if ($this->upload->do_upload('uploadedimage'))
                {
                  $apa['upload'][$i] = $this->upload->data();
              }
              else
              {
                  $apa['upload_errors'][$i] = $this->upload->display_errors();
              }

            $this->Model_request->addDetail($data);
            //redirect('Request');
            //print_r($data);
         }

        //send email to user
        $name = $this->Model_customer->getnames($customer_fk);
        $email = $this->Model_customer->getemail($customer_fk);
        $title = 'Order has Placed!';
        $content = 'You has placed a new order<br>Request Id : '.$id.
            '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
            '<br>Status : Request';
        send_email($name, $email, $title, $content);


        //send email to sales
        $data = $this->Model_sales->getdatasales($this->Model_customer->getsales($customer_fk));
        foreach($data->result() as $row){

            $names = $this->Model_customer->getsales($customer_fk);
            $emails = $row->EMAIL;
            //$email = 'admin@harapankurnia.co.id';
            $title = 'New Order Placed!';
            $content = 'Customer placed a new order<br>Request Id : '.$id.
            '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
            '<br>Status : Request';
            send_email($names, $emails, $title, $content);

        }

        //send email to sales
        $data = $this->Model_user->get_manager();
        foreach($data->result() as $row){

            $names = '';
            $emails = $row->USERNAME;
            //$email = 'admin@harapankurnia.co.id';
            $title = 'New Order Placed!';
            $content = 'Customer placed a new order<br>Request Id : '.$id.
            '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
            '<br>Status : Request';
            send_email($names, $emails, $title, $content);

        }
        redirect('Request');
        //print_r($this->input->post('yarn'));

    }
    public function detail($request_id){
        $data['req'] = $this->Model_request->getdetail($request_id);
        $this->load->view('drequest', $data); 
    }

}
