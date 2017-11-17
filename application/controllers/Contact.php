<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('vcontact');
	}
	public function kirim()
	{	
		$email = $this->input->post('email');
		$nama = $this->input->post('name');
		$subjek = $this->input->post('subject');
		$pesan = $this->input->post('message');
		//add db
		$data=array(
            'name'=>$nama,
            'email'=>$email,
            'title'=>$subjek,
            'content'=>$pesan
        );
        $this->db->insert('t_email', $data);

		//kirim email
			$names = ' ada pengunjung yang meninggalkan pesan melalui sistem.';
	        $sendTo = 'marketing@harapankurnia.co.id';
	        //$email = 'admin@harapankurnia.co.id';
	        $title = "Pesan Baru";
	        $content = $pesan;
	        $content = '
	        Dari, '.$nama.' ('.$email.') <br>
	       	Perihal : '.$subjek.'<br><br>
	        '.$pesan;
	        send_email($names, $sendTo, $title, $content);
	         //echo"<script>alert('Anda Berhasil Registrasi');history.go(-1);</script>";
	        //$this->session->set_flashdata('alert', true);
	        redirect('Contact');
		
	    // $url = $_SERVER['HTTP_REFERER'];
	    // $this->email->set_newline("\r\n");
	    // $this->email->from($email);
	    // $this->email->to('kurniawanditya11@gmail.com'); //email tujuan. Isikan dengan emailmu!
	    // $this->email->subject($subjek);
	    // $this->email->message($pesan);
	    // if($this->email->send())
	    // {
	    //   echo 'Email sent. <a href="'.$url.'">KEMBALI</a>';
	    // }
	    // else
	    // {
	    //   show_error($this->email->print_debugger());
	    // }
	}	
}
