<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_salesmonitoring extends CI_Model{

    function getallsalesmonitoring() {
        $this->db->from("t_sales_dss");
        $this->db->group_by("SALES_DSS_ID");
        return $this->db->get();
    }

	function getdetail($order_by, $group_by, $month, $year, $weight, $id){
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
        if($weight=="BOTH"){

        }
        else{
            $this->db->where('BN', $weight);
        }
        $this->db->where('MONTH', $month);
        $this->db->where('YEAR', $year);
        $this->db->from("t_sales_dss as dss");

        switch ($order_by) {
            case 'Sales':
                switch ($group_by) {
                    case 'All':
                        $this->db->join('m_sales as s', 'dss.SALES_FK=s.SALES_ID');
                        $this->db->select("*, s.SALES_ID as 'SALES',s.NAME as 'NAMA',ROUND(SUM(dss.KG),2)'totalrows',s.SELLING_TARGET as 'TARGET',CONCAT(ROUND(((SUM(dss.KG)/s.SELLING_TARGET)*100),2),'%') as 'persen' ");
                        $this->db->group_by('SALES_FK');
                        break;

                    case 'GroupCustomer':
                        $this->db->select("*, s.SALES_ID as 'SALES', s.NAME as 'NAMA',c.GRUP_ID as 'GRUPCUST', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_sales as s', 'dss.SALES_FK=s.SALES_ID');
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK=c.CUSTOMER_ID');
                        $this->db->group_by('dss.SALES_FK');
                        $this->db->order_by('dss.SALES_FK');
                        $this->db->order_by('c.GRUP_ID');
                        break;

                    case 'Customer':
                        $this->db->select("*,s.SALES_ID as 'SALES', s.NAME as 'NAMA',c.CUSTOMER_ID as 'CUST',c.NAME as 'CUST.NAME', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_sales as s', 'dss.SALES_FK=s.SALES_ID');
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK=c.CUSTOMER_ID');
                        $this->db->group_by('dss.SALES_FK');
                        $this->db->group_by('dss.CUSTOMER_FK');
                        $this->db->order_by('dss.SALES_FK');
                        $this->db->order_by('dss.CUSTOMER_FK');
                        break;

                    case 'Product':
                        $this->db->select("*,s.SALES_ID as 'SALES', s.NAME as 'NAMA',dss.YARN as 'YARN',dss.KNITTING as 'KNITTING', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_sales as s', 'dss.SALES_FK=s.SALES_ID');
                        $this->db->group_by('dss.SALES_FK');
                        $this->db->group_by('dss.YARN');
                        $this->db->group_by('dss.KNITTING');
                        $this->db->order_by('dss.SALES_FK');
                        $this->db->order_by('dss.YARN');
                        $this->db->order_by('dss.KNITTING');
                        break;

                    default:
                        # code...
                    break;
                }
            break;

            case 'Customer':
                switch ($group_by) {
                    case 'All':
                        $this->db->select("*,c.CUSTOMER_ID as 'CUSTOMER', c.NAME as 'NAME', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK=c.CUSTOMER_ID');
                        $this->db->group_by('dss.CUSTOMER_FK');
                        $this->db->order_by('dss.CUSTOMER_FK');
                        break;

                    case 'Product':
                        $this->db->select("*,c.CUSTOMER_ID as 'CUSTOMER', c.NAME as 'NAME',dss.YARN as 'YARN',dss.KNITTING as 'KNITTING', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK =  c.CUSTOMER_ID');
                        $this->db->group_by('dss.CUSTOMER_FK');
                        $this->db->group_by('dss.YARN');
                        $this->db->group_by('dss.KNITTING');
                        $this->db->order_by('dss.CUSTOMER_FK');
                        $this->db->order_by('dss.YARN');
                        $this->db->order_by('dss.KNITTING');
                        break;
                    
                    default:
                        # code...
                        break;
                }
            break;

            case 'GroupCustomer':
                switch ($group_by) {
                    case 'All':
                        $this->db->select("*, c.GRUP_ID as 'GRUPCUST', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK =  c.CUSTOMER_ID');
                        $this->db->group_by('c.GRUP_ID');
                        $this->db->order_by('c.GRUP_ID');
                        break;

                    case 'Sales':
                        $this->db->select("*, c.GRUP_ID as 'GRUPCUST',s.SALES_ID as 'SALES',s.NAME as 'NAME', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK=c.CUSTOMER_ID');
                        $this->db->join('m_sales as s', 'dss.SALES_FK=s.SALES_ID');
                        $this->db->group_by('c.GRUP_ID');
                        $this->db->group_by('dss.SALES_FK');
                        $this->db->order_by('c.GRUP_ID');
                        $this->db->order_by('dss.SALES_FK');
                        break;

                    case 'Customer':
                        $this->db->select("*,c.GRUP_ID as 'GRUPCUST',c.CUSTOMER_ID as 'CUSTOMER',c.NAME as 'NAMA', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK=c.CUSTOMER_ID');
                        $this->db->group_by('c.GRUP_ID');
                        $this->db->group_by('dss.CUSTOMER_FK');
                        $this->db->order_by('c.GRUP_ID');
                        $this->db->order_by('dss.CUSTOMER_FK');
                        break;

                    case 'Product':
                        $this->db->select("*,c.GRUP_ID as 'GRUPCUST',dss.YARN as 'YARN',dss.KNITTING as 'KNITTING', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK=c.CUSTOMER_ID');
                        $this->db->group_by('c.GRUP_ID');
                        $this->db->group_by('dss.YARN');
                        $this->db->group_by('dss.KNITTING');
                        $this->db->order_by('c.GRUP_ID');
                        $this->db->order_by('dss.YARN');
                        $this->db->order_by('dss.KNITTING');
                        break;

                    default:
                        # code...
                    break;
                }
            break;

            case 'Product':
                switch ($group_by) {
                    case 'All':
                        $this->db->select("*, dss.YARN as 'YARN',dss.KNITTING as 'KNITTING', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->group_by('dss.YARN');
                        $this->db->group_by('dss.KNITTING');
                        $this->db->order_by('dss.YARN');
                        $this->db->order_by('dss.KNITTING');
                        break;

                    case 'Sales':
                        $this->db->select("*, dss.YARN as 'YARN',dss.KNITTING as 'KNITTING',s.SALES_ID as 'SALES',s.NAME as 'NAMA', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_sales as s', 'dss.SALES_FK=s.SALES_ID');
                        $this->db->group_by('dss.YARN');
                        $this->db->group_by('dss.KNITTING');
                        $this->db->group_by('dss.SALES_FK');
                        $this->db->order_by('dss.YARN');
                        $this->db->order_by('dss.KNITTING');
                        $this->db->order_by('dss.SALES_FK');
                        break;

                    case 'Customer':
                        $this->db->select("*,dss.YARN as 'YARN',dss.KNITTING as 'KNITTING',c.CUSTOMER_ID as 'CUSTOMER',c.NAME as 'NAMA', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK=c.CUSTOMER_ID');
                        $this->db->group_by('dss.YARN');
                        $this->db->group_by('dss.KNITTING');
                        $this->db->group_by('dss.CUSTOMER_FK');
                        $this->db->order_by('dss.YARN');
                        $this->db->order_by('dss.KNITTING');
                        $this->db->order_by('dss.CUSTOMER_FK');
                        break;

                    case 'GroupCustomer':
                        $this->db->select("*,dss.YARN as 'YARN',dss.KNITTING as 'KNITTING',c.GRUP_ID as 'GRUPCUST', round(sum(dss.KG),2) 'totalrows'");
                        $this->db->join('m_customer as c', 'dss.CUSTOMER_FK = c.CUSTOMER_ID');
                        $this->db->group_by('dss.YARN');
                        $this->db->group_by('dss.KNITTING');
                        $this->db->group_by('c.CUSTOMER_ID');
                        $this->db->order_by('dss.YARN');
                        $this->db->order_by('dss.KNITTING');
                        $this->db->order_by('c.CUSTOMER_ID');
                        break;

                    default:
                        # code...
                    break;
                }
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

    function complaint_getname($complaint_id){
        $this->db->where('COMPLAINT_ID',$complaint_id);
        $this->db->select("*");
        $this->db->from("t_complaint");
        $data = $this->db->get();
        foreach($data->result() as $row){
            $this->db->where('CUSTOMER_ID',$row->CUSTOMER_FK);
            $this->db->select('*');
            $this->db->from('m_customer');
            $data = $this->db->get();
            foreach($data->result() as $row){
                return $row->NAME;
            }
        }
    }

    function complaint_getso($complaint_id){
        $this->db->where('COMPLAINT_ID',$complaint_id);
        $this->db->select("*");
        $this->db->from("t_complaint");
        $data = $this->db->get();
        foreach($data->result() as $row){
            return $row->SO_NUMBER;
        }
    }

    function complaint_getemail($complaint_id){
        $this->db->where('COMPLAINT_ID',$complaint_id);
        $this->db->select("*");
        $this->db->from("t_complaint");
        $data = $this->db->get();
        foreach($data->result() as $row){
            $this->db->where('CUSTOMER_ID',$row->CUSTOMER_FK);
            $this->db->select('*');
            $this->db->from('m_customer');
            $data = $this->db->get();
            foreach($data->result() as $row){
                return $row->EMAIL;
            }
        }
    }

    function request_getname($hdr_id){
        $this->db->where('REQUEST_ORDER_HDR_ID',$hdr_id);
        $this->db->select("*");
        $this->db->from("t_request_order_hdr");
        $data = $this->db->get();
        foreach($data->result() as $row){
            $this->db->where('CUSTOMER_ID',$row->CUSTOMER_FK);
            $this->db->select('*');
            $this->db->from('m_customer');
            $data = $this->db->get();
            foreach($data->result() as $row){
                return $row->NAME;
            }
        }
    }

    function request_getemail($hdr_id){
        $this->db->where('REQUEST_ORDER_HDR_ID',$hdr_id);
        $this->db->select("*");
        $this->db->from("t_request_order_hdr");
        $data = $this->db->get();
        foreach($data->result() as $row){
            $this->db->where('CUSTOMER_ID',$row->CUSTOMER_FK);
            $this->db->select('*');
            $this->db->from('m_customer');
            $data = $this->db->get();
            foreach($data->result() as $row){
                return $row->EMAIL;
            }
        }
    }
}
