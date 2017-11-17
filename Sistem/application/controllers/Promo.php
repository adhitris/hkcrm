<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Promo extends CI_Controller{
	function __construct() { 
        parent::__construct();
        $this->load->model('Model_company');
      
    } 
    public function index(){
    	$data['pr']=$this->Model_company->getpromo();
    	$this->load->view('vpromo',$data);
    }
    public function Delete($kondisi){
        $this->db->where('PROMO_ID', $kondisi);
        $this->db->delete('t_promo');
         redirect('Promo');
        }
     public function addpromo(){
        $config['upload_path'] = 'assets/uploads/promo';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            echo $this->upload->display_errors();
        } else {
          //here $file_data receives an array that has all the info
          //pertaining to the upload, including 'file_name'
            $file_data = $this->upload->data();
            
            $tittle=$this->input->post('tittle');
            $start=$this->input->post('date_start');
            $finish=$this->input->post('date_finish');
            $status="PUBLISH";
            $data=array(
                'TITLE' => $tittle,
                'DATE_START'=>$start,
                'DATE_FINISH'=>$finish,
                'STATUS'=>$status,
                'IMAGE'=> $file_data['file_name'],
            );
            $this->Model_company->addtopromo($data);
            //print_r($file_data); 

            }
            redirect('Promo');
        }
}
