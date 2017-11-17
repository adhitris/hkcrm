<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_status extends CI_Model{

    function ubah() {
		$now=date('y-m-d');
		echo$now;
		$sql="SELECT * FROM t_promo WHERE DATE_FINISH='$now'";
		$query = $this->db->query($sql);
		if ($query->num_rows()!=0){
			$sql2="UPDATE t_promo SET STATUS='UNPUBLISH' WHERE DATE_FINISH='$now'";
			$query = $this->db->query($sql2);
			echo"berhasil";
		}

    }
}
