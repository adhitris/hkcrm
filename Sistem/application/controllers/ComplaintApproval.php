<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ComplaintApproval extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('Model_requestcomplaint');
        $this->load->model('Model_salesmonitoring');
      
    } 
    public function index(){
        $data['listrequestcomplaint'] = $this->Model_requestcomplaint->getallrequestcomplaint();
        $this->load->view('vrequestcomplaint',$data); 
    }
    public function detail($complaint_id){
        $data['complaint_id'] = $this->Model_requestcomplaint->getdetail($complaint_id);
        $this->load->view('drequestcomplaint', $data); 
    }

    public function approve(){
        $complaint_id = $this->input->post('id');
        $name = $this->Model_salesmonitoring->complaint_getname($complaint_id);
        $so_number = $this->Model_salesmonitoring->complaint_getso($complaint_id);
        $email = $this->Model_salesmonitoring->complaint_getemail($complaint_id);
        $this->Model_requestcomplaint->approve($complaint_id);
        
        /*$data['name'] = "Saefudin"; 
        $data['email'] = 'saefudin.smart@gmail.com';
        $data['message_body'] = "any message body you want to send";

        $message = $this->load->view('email/complaintapprove',$data,TRUE); // this will return you html data as message
        $this->email->message($message);*/

        //send email to user
        $title = 'Complaint has Approved!';
        $content = 'Harapan kurnia has approved your complaint<br>Complaint Id : '.$complaint_id.
            '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
            '<br>SO Number : '.$so_number.
            '<br>Status : Approved';
        send_email($name, $email, $title, $content);

        echo json_encode(true);
        exit();
    }

    public function reject(){
        $complaint_id = $this->input->post('id');
        $name = $this->Model_salesmonitoring->complaint_getname($complaint_id);
        $so_number = $this->Model_salesmonitoring->complaint_getso($complaint_id);
        $email = $this->Model_salesmonitoring->complaint_getemail($complaint_id);
        $this->Model_requestcomplaint->reject($complaint_id);

        /*$data['name'] = "Saefudin"; 
        $data['email'] = 'saefudin.smart@gmail.com';
        $data['message_body'] = "any message body you want to send";

        $message = $this->load->view('email/complaintreject',$data,TRUE); // this will return you html data as message
        $this->email->message($message);*/

        //send email to user
        $title = 'Complaint has Rejected!';
        $content = 'Harapan kurnia has rejected your complaint<br>Complaint Id : '.$complaint_id.
            '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
            '<br>SO Number : '.$so_number.
            '<br>Status : Rejected';
        send_email($name, $email, $title, $content);

        echo json_encode(true);
        exit();
    }
}