<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LRegistration extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('Regis_user');
        $this->load->model('Model_customer');
        $this->load->model('Add_user');
        $this->load->model('Model_sales');
    } 
    public function index(){
        $this->load->model('Regis_user');
        $data['listregis'] = $this->Regis_user->getallregis();

        $this->load->view('vregistrasi',$data);
        
    }

    public function approve(){
        $id_regis = $this->input->post('id');
        $customer_id = $this->input->post('customer_id');
        $sales_fk = $this->input->post('sales_fk');
        $this->Regis_user->approve($id_regis,$customer_id);
        
        /*$data['name'] = "Saefudin"; 
        $data['email'] = 'saefudin.smart@gmail.com';
        $data['message_body'] = "any message body you want to send";

        $message = $this->load->view('email/requestapprove',$data,TRUE); // this will return you html data as message
        $this->email->message($message);*/

        $data = $this->Regis_user->getdata($id_regis);
        foreach ($data->result() as $row) {
	        	//echo json_encode($row);
	        //exit();
	        $username=$row->EMAIL;
            $passwordrand = rand(0000000,9999999);
	        $password=md5($passwordrand);
	        $role='CUSTOMER';
	        $status=1;
	        $data=array(
	            'username'=>$username,
	            'password'=>$password,
	            'role'=>$role,
	            'status'=>$status
	        );

	        $this->Add_user->addUser($data);

	        $user_id=$row->EMAIL;
	        $name=$row->NAME;
	        $email=$row->EMAIL;
	        $phone_number=$row->PHONE_NUMBER;
	        $address=$row->ADDRESS;
	        $city=$row->CITY;
	        $province=$row->PROVINCE;
	        $postal_code=$row->POSTAL_CODE;
	        $country=$row->COUNTRY;
	        $data=array(
	            'customer_id'=>$customer_id,
                'sales_fk'=>$sales_fk,
	            'user_fk'=>$user_id,
	            'name'=>$name,
	            'email'=>$email,
	            'phone_number'=>$phone_number,
	            'address'=>$address,
	            'city'=>$city,
	            'province'=>$province,
	            'postal_code'=>$postal_code,
	            'country'=>$country,
	        );

	        $this->Model_customer->addCustomer($data);

            //send email to user
            $title = 'Welcome to Harapan Kurnia!';
            $content = 'Your account has been our validation , please go to the following account<br>Username : '.$username
            .'<br>Password : '.$passwordrand
            .'<br>Link address to access your account : <a href="http://crm.harapankurnia.co.id" target="_blank">http://crm.harapankurnia.co.id</a>';
            send_email($name, $email, $title, $content);

            //send email to sales
            $data = $this->Model_sales->getdatasales($sales_fk);
            foreach($data->result() as $row){

                $names = $sales_fk;
                $emails = $row->EMAIL;
                //$email = 'admin@harapankurnia.co.id';
                $title = 'New Client has valid account';
                $content = $name.' has valid account with Harapan Kurnia<br>Name : '.$name.
                '<br>Email : '.$email.
                '<br>Phone Number : '.$phone_number;
                send_email($names, $emails, $title, $content);



            }


	        echo json_encode(true);
	    }
    }

    public function reject(){
        $id_regis = $this->input->post('id');
        $this->Regis_user->reject($id_regis);

        /*$data['name'] = "Saefudin"; 
        $data['email'] = 'saefudin.smart@gmail.com';
        $data['message_body'] = "any message body you want to send";

        $message = $this->load->view('email/requestreject',$data,TRUE); // this will return you html data as message
        $this->email->message($message);*/

        echo json_encode(true);
        exit();
    }

    public function member(){
        $id_regis = $this->input->post('id');
        $this->Regis_user->member($id_regis);

        /*$data['name'] = "Saefudin"; 
        $data['email'] = 'saefudin.smart@gmail.com';
        $data['message_body'] = "any message body you want to send";

        $message = $this->load->view('email/requestreject',$data,TRUE); // this will return you html data as message
        $this->email->message($message);*/

        echo json_encode(true);
        exit();
    }
}
