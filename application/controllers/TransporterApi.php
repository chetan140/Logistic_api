<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TransporterApi extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Api_model','AP');
		$this->load->library('form_validation');
		$this->load->helper('security');
	}

   public function TransporterVehicleRegistration(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
				$post = $this->input->post();
				$data1 = array(
					'transporter_id'=>$post['vendor_id'],
					'owner_name'=>$post['owner_name'],
					'vehical_number'=>$post['vehical_number'],
					'vehical_capacity'=>$post['vehical_capacity'],
					'insurance_number'=>$post['insurance_number'],
					'rc_number'=>$post['rc_number'],
					'owner_id_proof'=>$post['owner_id_proof'],
					'vehical_type'=>$post['vehical_type'],
					'material_grade'=>$post['material_grade'],	
				);
				$data1 = $this->security->xss_clean($data1);
				$check = $this->AP->insertData('tb_vendor_vehicle_registration',$data1);
				if($check){
					$status = '200';
					$data['error'] = false;
					$data['status'] = '1';
					$data['message'] = 'Data Inserted!.';
					$data['inserted_data'] = $check;
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
			$status = '201';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}


	public function TransporterDriverRegistration(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('driver_email','Email','required|valid_email|is_unique[tb_vendor_driver_registration.driver_email]|trim');
			$this->form_validation->set_message('is_unique', 'The %s is already registered');
			if($this->form_validation->run()===TRUE){
				$post = $this->input->post();
				$data1 = array(
					'transporter_id'=>$post['vendor_id'],
					'driver_name'=>$post['driver_name'],
					'driver_number'=>$post['driver_number'],
					'driver_email'=>$post['driver_email'],
					'driver_licence'=>$post['driver_licence'],
					'driver_id_proof'=>$post['driver_id_proof'],
					'driver_password'=>$post['driver_password'],
				);
				$data1 = $this->security->xss_clean($data1);
				$check = $this->AP->insertData('tb_vendor_driver_registration',$data1);
				if($check){
					$status = '200';
					$data['error'] = false;
					$data['status'] = '1';
					$data['message'] = 'Data Inserted!.';
					$data['inserted_data'] = $check;
				}else{
					$status = '201';
					$data['status'] = '0';
					$data['error'] = true;
					$data['message'] = 'Internal Server Error!.';
				}
			}else{
				$error = explode(',', str_replace(array('<p>','</p>'),array('',','), validation_errors()));
				$data['error'] = true;
				$data['status'] = '0';
				$data['message'] = $error[0];
				$status = '201';
			}	
			
		}else{
			$data['error'] = true;
			$data['message'] = POST;
			$data['status'] = '0';
			$status = '201';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}
		
}