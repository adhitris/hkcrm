<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_salesmonitoring extends CI_Model{

    function getallsalesmonitoring() {
        $this->db->from("t_sales_dss");
        $this->db->group_by("SALES_DSS_ID");
        return $this->db->get();
    }

	function getdetail($group_by, $month, $year, $weight, $id){
        if($this->session->userdata('ROLE')=='SALES'){

            $this->db->where('USER_FK',$this->session->userdata('USERNAME'));
            $this->db->select('*');
            $this->db->from('m_sales');
            $data = $this->db->get();
            foreach($data->result() as $row){
                $this->db->where('SALES_FK', $row->SALES_ID);
            }
        }
        $weight = strtoupper($weight);
        $this->db->where('BN', $weight);
        switch ($group_by) {
            case 'Sales':
                $this->db->where('MONTH', $month);
                $this->db->where('YEAR', $year);
                $this->db->select("*, sum(KG) as totalrows");
                $this->db->from("t_sales_dss");
                $this->db->group_by('SALES_FK');
            break;

            case 'SalesDetail':
                $this->db->where('MONTH', $month);
                $this->db->where('YEAR', $year);
                $this->db->where('SALES_FK', $id);
                $this->db->select("*, sum(KG) as totalrows");
                $this->db->from("t_sales_dss");
                $this->db->group_by('YARN');
                $this->db->group_by('KNITTING');
            break;

            case 'Customer':
                $this->db->where('MONTH', $month);
                $this->db->where('YEAR', $year);
                $this->db->select("*, sum(KG) as totalrows");
                $this->db->from("t_sales_dss");
                $this->db->group_by('CUSTOMER_FK');
            break; 

            case 'CustomerDetail':
                $this->db->where('MONTH', $month);
                $this->db->where('YEAR', $year);
                $this->db->where('CUSTOMER_FK', $id);
                $this->db->select("*, sum(KG) as totalrows");
                $this->db->from("t_sales_dss");
                $this->db->group_by('YARN');
                $this->db->group_by('KNITTING');
            break;
            
            default:
                $this->db->where('MONTH', $month);
                $this->db->where('YEAR', $year);
                $this->db->select("*, sum(KG) as totalrows");
                $this->db->from("t_sales_dss");
                $this->db->group_by('YARN');
                $this->db->group_by('KNITTING');
            break;
        }
        
        return $this->db->get();
    }

    function getname($kondisi){
        $this->db->where('CUSTOMER_ID',$kondisi);
        $this->db->select('*');
        $this->db->from('m_customer');
        $data = $this->db->get();
        foreach($data->result() as $row){
            return $row->NAME;
        }
    }
}
