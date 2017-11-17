<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Sales extends CI_Controller{
	 function __construct() { 
        parent::__construct();
        $this->load->model('model_sales');
      
    } 
    public function index(){
        $data['listsales'] = $this->model_sales->getsales();
        $this->load->view('vsales',$data);
        
    }
    public function addDBsales(){
        $sales_id=$this->input->post('sales_id');
        $user_fk=$this->input->post('user_fk');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $target=$this->input->post('target');
        
        $data=array(
            'sales_id'=>$sales_id,
            'user_fk'=>$user_fk,
            'name'=>$name,
            'email'=>$email,
            'selling_target'=>$target,
        );
        $this->model_sales->addsales($data);
         //echo"<script>alert('Anda Berhasil Registrasi');history.go(-1);</script>";
         redirect('Sales');
        
    }
    public function updatesales($id_user){
        $data['sales'] = $this->model_sales->getupdatesales($id_user);
        $this->load->view('vupdatesales', $data); 
        }
    public function updatedb(){
        $user_fk=$this->input->post('user_fk');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $target=$this->input->post('target');
        $data=array(
            'user_fk'=>$user_fk,
            'name'=>$name,
            'email'=>$email,
            'selling_target' =>$target
        );
        $condition['sales_id'] = $this->input->post('sales_id'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
        
        $this->model_sales->updatesalestodb($data, $condition); //passing variable $data ke products_model

        redirect('Sales'); //redirect page ke halaman utama controller products
    
    }

}
