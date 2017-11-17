<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
	 function __construct() {  
        parent::__construct();
        $this->load->model('add_user');
      
    } 
    public function index(){
        $this->load->model('add_user');
        $data['listuser'] = $this->add_user->getuser();
        $data['role'] = $this->add_user->getrole();
        $this->load->view('vuser',$data);
        
    } 
    public function addDBuser(){
    	 $this->load->model('add_user');
        $username=$this->input->post('username');
        $password=md5($this->input->post('password'));
        $role=$this->input->post('role');
        $status=$this->input->post('status');
        $data=array(
            'username'=>$username,
            'password'=>$password,
            'role'=>$role,
            'status'=>$status,
        );
        $this->add_user->addUser($data);
        // echo"<script>alert('Anda Berhasil Registrasi');history.go(-1);</script>";
         redirect('User');
        
    }
    public function updateuser($id_user){
    	$this->load->model('add_user');
    	$data['user'] = $this->add_user->getupdateuser($id_user);
    	$data['role'] = $this->add_user->getrole();
        $this->load->view('vupdateuser', $data); 
        }
    public function updatedb(){
        if($this->input->post('password')!=""){
        	$data = array(
				'username' => $this->input->post('username'), 
				'password' => md5($this->input->post('password')),
				'role' => $this->input->post('role'),
				'status' => $this->input->post('status')
			);
        }
        else{
            $data = array(
                'username' => $this->input->post('username'), 
                'role' => $this->input->post('role'),
                'status' => $this->input->post('status')
            );
        }
        $condition['username'] = $this->input->post('username'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
        
		$this->add_user->updateusertodb($data, $condition); //passing variable $data ke products_model

		redirect('User'); //redirect page ke halaman utama controller products
	

    }

    
}
