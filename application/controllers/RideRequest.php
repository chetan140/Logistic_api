<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RideRequest extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Api_model','AP');
		$this->load->library('form_validation');
		$this->load->helper('security');
	}

   public function RideRequestByVendor(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
				$post = $this->input->post();
				$data1 = array(
					'vendor_id'=>$post['vendor_id'],
					'vendor_name'=>$post['vendor_name'],
					'vendor_phoneNumber'=>$post['vendor_phoneNumber'],
					'pickup_address'=>$post['pickup_address'],
					'dropoff_address'=>$post['dropoff_address'],
					'vehicleType'=>$post['vehicleType'],
					'pickup_latitude'=>$post['pickup_latitude'],
					'pickup_longitude'=>$post['pickup_longitude'],
					'dropoff_latitude'=>$post['dropoff_latitude'],
					'dropoff_longitude'=>$post['dropoff_longitude'],	
					'driver_id'=>$post['driver_id'],
				);
				$data1 = $this->security->xss_clean($data1);
				$check = $this->AP->insertData('tb_ride_request',$data1);
				$query = "SELECT * FROM `tb_ride_request` WHERE `id`='$check'";
			    $full_data = $this->AP->sqlQuery($query);
				if($check){
					$status = '200';
					$data['error'] = false;
					$data['status'] = '1';
					$data['message'] = 'Data Inserted!.';
					$data['inserted_data'] = $full_data;
				}else{
					$status = '201';
					$data['status'] = '0';
					$data['error'] = true;
					$data['message'] = 'Internal Server Error!.';
				}
			
		}else{
			$data['error'] = true;
			$data['message'] = POST;
			$data['status'] = '0';
			$status = '200';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}


	
		
}