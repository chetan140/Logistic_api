<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTable extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('DataTableModel','DTM');
	}

      public function getUserToke(){
        $column_order = array(null,'slider_name','vehicle','mobile','token','from','to','type');
        $column_search = array('slider_name','vehicle','mobile','token','from','to','type');
        $where = array('user_id'=>$this->session->userdata('AdminSes')['id']);
        $table = 'tbl_token';
        $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
        $data = array();  
        $i=0;
        foreach($getData as $row){  
          $i++;
          //<span class="badge badge-pill badge-soft-success font-size-12"> $val->token </span>
          $token = '';
          if ($row->expire >= date('Y-m-d H:i:s')) {
          	$token='<span class="badge badge-pill badge-soft-success font-size-12">'.$row->token .'</span>';
          }else{
          	$token='<span class="badge badge-pill badge-soft-danger font-size-12">'.$row->token .'</span>';
          }
          $sub_array = array();  
          $sub_array[] = $token;
          $sub_array[] = $row->type;
          $sub_array[] = $row->vehicle;
          $sub_array[] = $row->from;
          $sub_array[] = $row->to;
          $sub_array[] = $row->amount;
          $sub_array[] = $row->name;
          $sub_array[] = $row->mobile;
          $sub_array[] = $row->created_at;

          $data[] = $sub_array;  
        }  
         $output = array(  
              "draw"                    =>     intval($_POST["draw"]),  
              "recordsTotal"          =>      $this->DTM->get_all_data($table),  
              "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_token',$where,$column_order,$column_search),  
              "data"                    =>     $data  
         );  
         echo json_encode($output); 
      }

     

}