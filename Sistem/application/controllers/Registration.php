<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration extends CI_Controller{
   function __construct(){
    parent::__construct(); 
    $this->load->model('regis_user');
	}
    public function index(){
      $this->load->view('vregis');
    }
    public function addCustomer(){
        
    }
    public function addDB(){
    	// set post fields
	$post = [
	    'secret' => '6LejvSATAAAAACFxI0KP8f2oCkhhQhSJCOGkwpgF',
	    'response' => $this->input->post('g-recaptcha-response'),
	    'remoteip'   => $_SERVER["REMOTE_ADDR"],
	];
	
	$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	
	// execute!
	$response = curl_exec($ch);
	
	// close the connection, release resources used
	curl_close($ch);
	
	// do anything you want with your response
	$response = json_decode($response);
	if($response->success){
	        $email=$this->input->post('email');
	
		if(!$this->regis_user->checkEmail($email)){
		        $name=$this->input->post('name');
		        $phone_number=$this->input->post('phone_number');
		        $address=$this->input->post('address');
		        $city=$this->input->post('city');
		        $province=$this->input->post('province');
		        $postal_code=$this->input->post('postal_code');
		        $country=$this->input->post('country');
		        $data=array(
		            'name'=>$name,
		            'email'=>$email,
		            'phone_number'=>$phone_number,
		            'address'=>$address,
		            'city'=>$city,
		            'province'=>$province,
		            'postal_code'=>$postal_code,
		            'country'=>$country,
		        );
		        $this->regis_user->addCustomer($data);
		
		
		        //send email to user
		        $title = 'Welcome to HKTI CRM!';
		        $content = 'With this CRM you can monitor the progress of your order, request new order or send a complaint ticket. 
		            <br>Our sales team will contact you in 1x24hours';
		        send_email($name, $email, $title, $content);
		
		        //send email to admin HK
		        $names = 'Marketing HKTI CRM';
		        $emails = 'marketing@harapankurnia.co.id';
		        //$email = 'admin@harapankurnia.co.id';
		        $title = 'New Client Signed Up';
		        $content = $name.' has just signed up with Harapan Kurnia<br>Name : '.$name.
		        '<br>Email : '.$email.
		        '<br>Phone Number : '.$phone_number;
		        send_email($names, $emails, $title, $content);
		         //echo"<script>alert('Anda Berhasil Registrasi');history.go(-1);</script>";
		        $this->session->set_flashdata('alert', true);
		        redirect('auth');
	        }
	        else{
	        	$this->session->set_flashdata('taken', true);
		        redirect('registration');
	        }
        }
        else{
        	$this->session->set_flashdata('alert', true);
	        redirect('registration');
        }
        
    }

    /*public function regis(){
        if($this->input->post('submit')){
            $this->regis_user->tambah();
            redirect('auth');
        }
         $this->load->view('vregis');
       
    }*/
}