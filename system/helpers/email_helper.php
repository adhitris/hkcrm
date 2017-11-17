<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Email Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/email_helper.html
 */

// ------------------------------------------------------------------------

if ( ! function_exists('valid_email'))
{
	/**
	 * Validate email address
	 *
	 * @deprecated	3.0.0	Use PHP's filter_var() instead
	 * @param	string	$email
	 * @return	bool
	 */
	function valid_email($email)
	{
		return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('send_email'))
{
	/**
	 * Send an email
	 *
	 * @deprecated	3.0.0	Use PHP's mail() instead
	 * @param	string	$recipient
	 * @param	string	$subject
	 * @param	string	$message
	 * @return	bool
	 */
	function send_email($name, $email, $title, $content)
	{
		$CI =& get_instance();
        $userEmail = $name.' <'.$email.'>';
        //$userEmail = 'Saefudin <saefudin.smart@gmail.com>';
        $subject = 'CRM - Harapan Kurnia';
        $config = Array(        
            'protocol' => 'SMTP',
            'smtp_host' => 'mail.harapankurnia.co.id',
            'smtp_port' => 25,
            'smtp_user' => 'no-reply@harapankurnia.co.id',
            'smtp_pass' => 'P4ssowrd',
            'smtp_timeout' => '4',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1',
            'crlf'      => "\r\n"
        );
        $CI->load->library('email');
        $CI->email->initialize($config);
	    $CI->email->set_newline("\r\n");
    
        $CI->email->from('no-reply@harapankurnia.co.id', 'Harapan Kurnia');
        $data = array(
            /*'name'=> "Saefudin",
            'email'=> "saefudin.smart@gmail.com",
            'title'=> "title",
            'content'=> "content"*/

            'id'=> 0,
            'name'=> $name,
            'email'=> $email,
            'title'=> $title,
            'content'=> $content
		);

        $CI->email->to($userEmail);  // replace it with receiver mail id
    	$CI->email->subject($subject); // replace it with relevant subject 
    
        $body = $CI->load->view('emails/template.php',$data,TRUE);
	    $CI->email->message($body);

        if($CI->email->send()){
	        //return true;
        }
        else{
	        //return false;
        }
        //$CI->load->model('Model_email');
        //$CI->Model_email->history($data);

    }
}
