<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTable extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('DataTableModel','DTM');
	}

      public function getUserList(){
        $column_order = array(null,'name','email','created_at','status');
        $column_search = array('name','email');
        $where = array('id !='=> 0);
        $table = 'tb_users';
        $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
        $data = array();  
        $i=0;
        foreach($getData as $row){
        if ($row->user_type == 'Vendor') { 
        $status = '<a href="javascript:void(0)" class="order-status btn btn-outline-danger" id="'.$row->id.'" status="0">De-Activate</a>';
        if($row->status != 1){
        $status = '<a href="javascript:void(0)" class="order-status btn btn-outline-success" id="'.$row->id.'" status="1">Activate</a>';
        }
          $i++;
          $sub_array = array();
          $sub_array[] = $i;  
          $sub_array[] = $row->name;
          $sub_array[] = $row->email;
          $sub_array[] = date('d-M-Y',strtotime($row->created_at));
          $sub_array[] = $status;
          $data[] = $sub_array;  
        }  
      } 
         $output = array(  
              "draw"                    =>     intval($_POST["draw"]),  
              "recordsTotal"          =>      $this->DTM->get_all_data($table),  
              "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tb_users',$where,$column_order,$column_search),  
              "data"                    =>     $data  
         );  
         echo json_encode($output); 
      }

      public function getVendorList(){
        $column_order = array(null,'name','email','created_at','status');
        $column_search = array('name','email');
        $where = array('id !='=> 0);
        $table = 'tb_users';
        $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
        $data = array();  
        $i=0;
        foreach($getData as $row){
        if ($row->user_type == 'Transporter') { 
        $status = '<a href="javascript:void(0)" class="order-status btn btn-outline-danger" id="'.$row->id.'" status="0">De-Activate</a>';
        if($row->status != 1){
        $status = '<a href="javascript:void(0)" class="order-status btn btn-outline-success" id="'.$row->id.'" status="1">Activate</a>';
        }
          $i++;
          $sub_array = array();
          $sub_array[] = $i;  
          $sub_array[] = '<a href="'.base_url().'Admin/Vendor-Vehical-List/?id='.$row->id.'" >'.$row->name.'</a>';
          $sub_array[] = $row->email;
          $sub_array[] = date('d-M-Y',strtotime($row->created_at));
          $sub_array[] = $status;
          $data[] = $sub_array;  
        }  
      } 
         $output = array(  
              "draw"                    =>     intval($_POST["draw"]),  
              "recordsTotal"          =>      $this->DTM->get_all_data($table),  
              "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tb_users',$where,$column_order,$column_search),  
              "data"                    =>     $data  
         );  
         echo json_encode($output); 
      }

    public function getVendorDriverList(){
        $column_order = array(null,'driver_name','driver_number','driver_email','driver_id_proof','','owner_id_proof','driver_licence','created_at','status');
        $column_search = array('driver_name','driver_number','driver_email','driver_id_proof','owner_id_proof','driver_licence','created_at','status');
        $where = array('id !='=> 0);
        $table = 'tb_vendor_driver_registration';
         $select = '*,(SELECT name from tb_users where tb_users.id = tb_vendor_driver_registration.vendor_id)as vendor_name';
        $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
        $data = array();  
        $i=0;
        foreach($getData as $row){ 
          $i++;
          $sub_array = array();
          $sub_array[] = $i;  
          $sub_array[] = $row->vendor_name;
          $sub_array[] = $row->driver_name;
          $sub_array[] = $row->driver_number;
          $sub_array[] = $row->driver_email;
          $sub_array[] = $row->driver_id_proof;
          $sub_array[] = $row->owner_id_proof;
          $sub_array[] = $row->driver_licence;
          $sub_array[] = date('d-M-Y',strtotime($row->created_at));
          $data[] = $sub_array;  
        }  
         $output = array(  
              "draw"                    =>     intval($_POST["draw"]),  
              "recordsTotal"          =>      $this->DTM->get_all_data($table),  
              "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tb_vendor_driver_registration',$where,$column_order,$column_search),  
              "data"                    =>     $data  
         );  
         echo json_encode($output); 
      }

        public function getVendorVehicalList(){
        $id = $_GET['id'];
        $column_order = array(null,'owner_name','vehical_number','vehical_capacity','insurance_number','rc_number','owner_id_proof','vehical_type','material_grade','created_at','status');
        $column_search = array('owner_name','vehical_number','vehical_capacity','insurance_number','rc_number','owner_id_proof','vehical_type','material_grade','created_at','status');
        $where = array('vendor_id'=> $id);
        $table = 'tb_vendor_vehicle_registration';
        $select = '*';
        $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
        $data = array();  
        $i=0;
        foreach($getData as $row){ 
          $i++;
          $sub_array = array();
          $sub_array[] = $i;  
          $sub_array[] = $row->owner_name;
          $sub_array[] = $row->vehical_number;
          $sub_array[] = $row->vehical_capacity;
          $sub_array[] = $row->insurance_number;
          $sub_array[] = $row->rc_number;
          $sub_array[] = $row->owner_id_proof;
          $sub_array[] = $row->vehical_type;
          $sub_array[] = $row->material_grade;
          $sub_array[] = date('d-M-Y',strtotime($row->created_at));
          $data[] = $sub_array;  
        }  
         $output = array(  
              "draw"                    =>     intval($_POST["draw"]),  
              "recordsTotal"          =>      $this->DTM->get_all_data($table),  
              "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tb_vendor_driver_registration',$where,$column_order,$column_search),  
              "data"                    =>     $data  
         );  
         echo json_encode($output); 
      }

     

}