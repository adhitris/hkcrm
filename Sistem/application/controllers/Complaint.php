<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Complaint extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('Model_complaint');
        $this->load->model('Model_sales');
        $this->load->model('Model_customer');
        $this->load->model('Model_user');
    } 
    public function index(){
    	if(  $data['ROLE'] = $this->session->userdata('ROLE')=="ADMINISTRATOR"){
             $data['listcomplaint']=$this->Model_complaint->getallcomplaint();
             $data['getfk'] = $this->Model_complaint->getfk($data['USERNAME'] = $this->session->userdata('USERNAME'));
    		 $this->load->view('vcomplaint',$data);


        
        }else{   
            $data['getfk'] = $this->Model_complaint->getfk($data['USERNAME'] = $this->session->userdata('USERNAME'));
            foreach($data['getfk']->result() as $a){
                $a=$a->CUSTOMER_ID;
            };
            $data['listcomplaint'] = $this->Model_complaint->getcomplaint(@$a);            
            $this->load->view('vcomplaint',$data);
        }

    }
     public function addDBcomplaint(){
        $config['upload_path'] = 'assets/uploads/complaint';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            echo $this->upload->display_errors();
        } else {
          //here $file_data receives an array that has all the info
          //pertaining to the upload, including 'file_name'
            $file_data = $this->upload->data();
            
            $complaint_id=$this->input->post('complaint_id');
            $customer_fk=$this->input->post('customer_fk');
            $so_number=$this->input->post('so_number');
            $note=$this->input->post('note');
            $pic_name=$this->input->post('pic_name');
            $pic_number=$this->input->post('pic_number');
            $status="request";
            $data=array(
                'COMPLAINT_ID' => $complaint_id,
                'CUSTOMER_FK'=>$customer_fk,
                'SO_NUMBER'=>$so_number,
                'NOTE' =>$note,
                'PIC_NAME'=>$pic_name,
                'PIC_PHONE_NUMBER'=>$pic_number,
                'STATUS'=>$status,
                'SAMPLE_UPLOAD'=> $file_data['file_name'],
            );
            $this->Model_complaint->addcomplaint($data);
            //print_r($file_data); 

            //send email to user
            $name = $this->Model_customer->getnames($customer_fk);
            $email = $this->Model_customer->getemail($customer_fk);
            $title = 'Complaint has Placed!';
            $content = 'You has placed a new complaint<br>Complaint Id : '.$complaint_id.
                '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
                '<br>SO Number : '.$so_number.
                '<br>Note : '.$note.
                '<br>Status : Request';
            send_email($name, $email, $title, $content);


            //send email to sales
            $data = $this->Model_sales->getdatasales($this->Model_customer->getsales($customer_fk));
            foreach($data->result() as $row){

                $names = $this->Model_customer->getsales($customer_fk);
                $emails = $row->EMAIL;
                //$email = 'admin@harapankurnia.co.id';
                $title = 'New Complaint Placed!';
                $content = 'Customer placed a new complaint<br>Complaint Id : '.$complaint_id.
                '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
                '<br>SO Number : '.$so_number.
                '<br>Note : '.$note.
                '<br>Status : Request';
                send_email($names, $emails, $title, $content);

            }

            //send email to sales
            $data = $this->Model_user->get_manager();
            foreach($data->result() as $row){

                $names = '';
                $emails = $row->USERNAME;
                //$email = 'admin@harapankurnia.co.id';
                $title = 'New Complaint Placed!';
                $content = 'Customer placed a new complaint<br>Complaint Id : '.$complaint_id.
                '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
                '<br>SO Number : '.$so_number.
                '<br>Note : '.$note.
                '<br>Status : Request';
                send_email($names, $emails, $title, $content);

            }

            redirect('Complaint');
        }


       /* $complaint_id=$this->input->post('complaint_id');
        $customer_fk=$this->input->post('customer_fk');
        $so_number=$this->input->post('so_number');
        $note=$this->input->post('note');
        $pic_name=$this->input->post('pic_name');
        $pic_number=$this->input->post('pic_number');
        $status="Request";
        echo $data=array(
            'COMPLAINT_ID' => $complaint_id,
            'CUSTOMER_FK'=>$customer_fk,
            'SO_NUMBER'=>$so_number,
            'NOTE' =>$note,
            'PIC_NAME'=>$pic_name,
            'PIC_PHONE_NUMBER'=>$pic_number,
            'STATUS'=>$status,
        );
        $this->Model_complaint->addcomplaint($data);*/
        
        
    }


}
