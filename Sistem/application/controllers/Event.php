<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event extends CI_Controller{
	function __construct() {  
        parent::__construct();
        $this->load->model('Model_event');
        $this->load->model('Model_sales');
        $this->load->model('Model_customer'); 
        $this->load->helper('text'); 
      
    } 
    public function index(){
        $data['event']=$this->Model_event->getallevent();
        $this->load->view('vevent',$data);
        
    }

    public function multi(){
        $id=$this->input->post('id');
        $title = $this->input->post('title');
        $note = $this->input->post('note');
        $date = $this->input->post('dateev');
        $status ='PUBLISH';
        $data= array (
            'EVENT_ID'=>$id,
            'TITLE' =>$title,
            'DETAIL_NOTE' =>$note, 
            'DATE_EVENT' =>$date,
            'STATUS' =>$status,
        );
        //print_r($data);
        $this->Model_event->addHeader($data);
        /*$config['upload_path'] = 'assets/uploads/request';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);
       */
       
        // $img_array=$this->input->post('uploadedimages');
        //$file_data_array=$this->upload->do_upload('userfile');
        $files = $_FILES['uploadedimages']; 
        $this->load->library('upload');
        // next we pass the upload path for the images
        $config['upload_path'] = FCPATH . 'assets/uploads/event';
        // also, we make sure we allow only certain type of images
        $config['allowed_types'] = 'gif|jpg|png';
        $array=$this->input->post('ida');
        //print_r($array);

            for ($i=0;$i<count($array);$i++){
                //$file_data = $this->upload->data();
                $data=array(
                    'EVENT_ID_FK' =>$id,
                    'IMAGE'=>$files['name'][$i]
                    );

                $_FILES['uploadedimage']['name'] = $files['name'][$i];
                $_FILES['uploadedimage']['type'] = $files['type'][$i];
                $_FILES['uploadedimage']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['uploadedimage']['error'] = $files['error'][$i];
                $_FILES['uploadedimage']['size'] = $files['size'][$i];
        //now we initialize the upload library
                $this->upload->initialize($config);
        // we retrieve the number of files that were uploaded
                if ($this->upload->do_upload('uploadedimage'))
                {
                  $apa['upload'][$i] = $this->upload->data();
              }
              else
              {
                  $apa['upload_errors'][$i] = $this->upload->display_errors();
              }

            $this->Model_event->addDetail($data);
            //redirect('Request');
           //print_r($data);
         }

        redirect('Event');
        //print_r($this->input->post('uploadedimages'));

    }
    // public function detail($request_id){
    //     $data['req'] = $this->Model_event->getdetail($request_id);
    //     $this->load->view('drequest', $data); 
    // }
    public function delete($id){
        $this->db->where('EVENT_ID', $id);
        $this->db->delete('t_event'); 
        redirect('Event');
    }
     public function addOrder(){
        $data['getfk'] = $this->Model_event->getfk($data['USERNAME'] = $this->session->userdata('USERNAME'));
        $this->load->view('vaddevent',$data);
    }


}
