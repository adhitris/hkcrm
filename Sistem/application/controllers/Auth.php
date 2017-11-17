<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
        
    public function index(){
         $this->load->view('vlogin');
    }
    
    public function cek_login(){
        $data = array(
            'USERNAME'=>$this->input->post('USERNAME', TRUE),
            'PASSWORD'=> md5($this->input->post('PASSWORD',TRUE))
            );
        $this->load->model('Model_user');
        $hasil = $this->Model_user->cek_user($data);
        if($hasil->num_rows()==1){
            foreach ($hasil->result() as $sess){
                $sess_data['logged_in']='Login Done!';
                $sess_data['USERNAME']=$sess->USERNAME;
                $sess_data['ROLE']=$sess->ROLE;
                $this->session->set_userdata($sess_data);
            }
            if($this->session->userdata('ROLE')=='ADMINISTRATOR'){
                redirect('Home');
            }
            if($this->session->userdata('ROLE')=='SALES'){
                $this->db->where('USER_FK',$sess->USERNAME);
                $this->db->select('*');
                $this->db->from('m_sales');
                $data = $this->db->get();
                foreach($data->result() as $row){
                    $sess_data['SALES_ID']=$row->SALES_ID;
                    $this->session->set_userdata($sess_data);
                }
                redirect('Home');
            }
            if($this->session->userdata('ROLE')=='CUSTOMER'){
                $this->db->where('USER_FK',$sess->USERNAME);
                $this->db->select('*');
                $this->db->from('m_customer');
                $data = $this->db->get();
                foreach($data->result() as $row){
                    $sess_data['CUSTOMER_ID']=$row->CUSTOMER_ID;
                    $this->session->set_userdata($sess_data);
                }
                redirect('Home');
            }
             if($this->session->userdata('ROLE')=='MANAGER'){
                redirect('Home');
            }
            
            
        }
        else{
            echo"<script>alert('GAGAL LOGIN');history.go(-1);</script>";
            //$this->session->set_flashdata('pesan1','eror');

        }
    }
    
   
}
