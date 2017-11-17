<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sendmails extends CI_Controller {

    public function index(){
        $name = 'Saefudin';
        $email = 'saefudin.smart@gmail.com';
        $title = 'Judul';
        $content = 'Content';
        echo send_email($name, $email, $title, $content);
    }
       
}