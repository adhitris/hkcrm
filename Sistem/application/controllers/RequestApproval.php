<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RequestApproval extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('Model_requestapproval');
        $this->load->model('Model_salesmonitoring');
      
    } 
    public function index(){
        $data['listrequestapproval'] = $this->Model_requestapproval->getallrequestapproval();
        $this->load->view('vrequestapproval',$data); 
    }
    public function detail($hdr_id){
    	$data['hdr_id'] = $this->Model_requestapproval->getdetail($hdr_id);
        $this->load->view('drequestapproval', $data); 
    }

    public function approve(){
        $hdr_id = $this->input->post('id');
        $name = $this->Model_salesmonitoring->request_getname($hdr_id);
        $email = $this->Model_salesmonitoring->request_getemail($hdr_id);
        $this->Model_requestapproval->approve($hdr_id);

        /*$data['name'] = "Saefudin"; 
        $data['email'] = 'saefudin.smart@gmail.com';
        $data['message_body'] = "any message body you want to send";

        $message = $this->load->view('email/requestapprove',$data,TRUE); // this will return you html data as message
        $this->email->message($message);*/

        //send email to user
        $title = 'Order has approved!';
        $content = 'Harapan kurnia has approved your order<br>Request Id : '.$hdr_id.
            '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
            '<br>Status : Approved';
        send_email($name, $email, $title, $content);

        echo json_encode(true);
        exit();
    }

    public function reject(){
        $hdr_id = $this->input->post('id');
        $name = $this->Model_salesmonitoring->request_getname($hdr_id);
        $email = $this->Model_salesmonitoring->request_getemail($hdr_id);
        $this->Model_requestapproval->reject($hdr_id);

        /*$data['name'] = "Saefudin"; 
        $data['email'] = 'saefudin.smart@gmail.com';
        $data['message_body'] = "any message body you want to send";

        $message = $this->load->view('email/requestreject',$data,TRUE); // this will return you html data as message
        $this->email->message($message);*/

        //send email to user
        $title = 'Order has rejected!';
        $content = 'Harapan kurnia has rejected your order<br>Request Id : '.$hdr_id.
            '<br>Date : '.date_format(date_create(date("Y-m-d H:i:s")), 'd/m/Y H:i:s').
            '<br>Status : Rejected';
        send_email($name, $email, $title, $content);

        echo json_encode(true);
        exit();
    }
}
