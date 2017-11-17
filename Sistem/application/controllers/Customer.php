<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller{
	 function __construct() { 
        parent::__construct();
        $this->load->model('model_customer'); 
      
    } 
    public function index(){
        $this->load->model('model_customer');
        $data['listcustomer'] = $this->model_customer->getallcustomer();
        $this->load->view('vcustomer',$data);
        
    }
     public function updatecustomer($customer_id){
        $data['customer'] = $this->model_customer->getupdatecustomer($customer_id);
        $this->load->view('vupdatecustomer', $data); 
        }
    public function detail($customer_id){
        $data['customer'] = $this->model_customer->getupdatecustomer($customer_id);
        $this->load->view('dcustomer', $data); 
        }

    public function addDB(){
        $customer_id=$this->input->post('customer_id');
        $user_id=$this->input->post('user_id');
        $sales_id=$this->input->post('sales_id');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $phone_number=$this->input->post('phone_number');
        $address=$this->input->post('address');
        $city=$this->input->post('city');
        $province=$this->input->post('province');
        $postal_code=$this->input->post('postal_code');
        $country=$this->input->post('country');
        $data=array(
            'customer_id'=>$customer_id,
            'user_fk'=>$user_id,
            'sales_fk'=>$sales_id,
            'name'=>$name,
            'email'=>$email,
            'phone_number'=>$phone_number,
            'address'=>$address,
            'city'=>$city,
            'province'=>$province,
            'postal_code'=>$postal_code,
            'country'=>$country,
        );
        $this->model_customer->addCustomer($data);
         //echo"<script>alert('Anda Berhasil Registrasi');history.go(-1);</script>";
         redirect('Customer');
        
    }
     public function updatedb(){
    	$customer_id=$this->input->post('customer_id');
        $user_id=$this->input->post('user_id');
        $sales_id=$this->input->post('sales_id');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $phone_number=$this->input->post('phone_number');
        $address=$this->input->post('address');
        $city=$this->input->post('city');
        $province=$this->input->post('province');
        $postal_code=$this->input->post('postal_code');
        $country=$this->input->post('country');
        $data=array(
            'customer_id'=>$customer_id,
            'user_fk'=>$user_id,
            'sales_fk'=>$sales_id,
            'name'=>$name,
            'email'=>$email,
            'phone_number'=>$phone_number,
            'address'=>$address,
            'city'=>$city,
            'province'=>$province,
            'postal_code'=>$postal_code,
            'country'=>$country,
        );
        $condition['customer_id'] = $this->input->post('customer_id'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
        
		$this->model_customer->updateusertodb($data, $condition); //passing variable $data ke products_model

		redirect('Customer'); //redirect page ke halaman utama controller products
	

    }
}
