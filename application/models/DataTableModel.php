<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class DataTableModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

      function make_query($select,$table,$where,$column_order,$column_search){  
           $this->db->select($select);  
           $this->db->from($table);
           $this->db->where($where);
           $this->db->order_by('id','DESC');

           if (isset($_POST['fromDate']) && !empty($_POST['fromDate'])) {
              $this->db->where('date >= ',date('Y-m-d',strtotime(str_replace('/','-',$_POST['fromDate']))));
           }

           if (isset($_POST['toDate']) && !empty($_POST['toDate'])) {
             $this->db->where('date <= ',date('Y-m-d',strtotime(str_replace('/','-',$_POST['toDate']))));
           }
           if (isset($_POST['delStatus']) && !empty($_POST['delStatus'])) {
             $this->db->where('deievery_status',$_POST['delStatus']);
           }
           if (isset($_POST['ordStatus']) && !empty($_POST['ordStatus'])) {
            $this->db->where('status',$_POST['ordStatus']); 
           }

           if (isset($_POST['fromDateUser']) && !empty($_POST['fromDateUser'])) {
              $this->db->where('created_at >= ',date('Y-m-d',strtotime(str_replace('/','-',$_POST['fromDateUser']))));
           }

           if (isset($_POST['toDateUser']) && !empty($_POST['toDateUser'])) {
             $this->db->where('created_at <= ',date('Y-m-d',strtotime(str_replace('/','-',$_POST['toDateUser']))));
           }

        $i = 0;
        foreach ($column_search as $item){
            if($_POST['search']['value']){
                if($i===0){
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                }else{
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if(isset($_POST['order'])){
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }else if(isset($order)){
            $order = $order;
            $this->db->order_by(key($order), $order[key($order)]);
        }  
      }  
      function make_datatables($select,$table,$where,$column_order,$column_search){  
           $this->make_query($select,$table,$where,$column_order,$column_search);  
           if($_POST["length"] != -1)  {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data($select,$table,$where,$column_order,$column_search){
           $this->make_query($select,$table,$where,$column_order,$column_search);  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data($table){  
           $this->db->select("id");  
           $this->db->from($table);  
           return $this->db->count_all_results();  
      }    
}