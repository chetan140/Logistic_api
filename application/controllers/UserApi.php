<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserApi extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Api_model','AP');
		$this->load->library('form_validation');
		$this->load->helper('security');
	}

   public function UserSignUp(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('name','Name','required|trim');
			$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[tb_users.email]|trim');
			$this->form_validation->set_rules('password','Password','required|min_length[6]');
			$this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');
			$this->form_validation->set_message('is_unique', 'The %s is already registered');
			$this->form_validation->set_message('matches', 'Password And Confirm Password Not Matching');
			if($this->form_validation->run()===TRUE){
				$otp=rand(1000, 9999); 
				$post = $this->input->post();
				$data1 = array(
					'name'=>$post['name'],
					'email'=>$post['email'],
					'user_type'=>$post['user_type'],
					'password'=>md5($post['password']),
					'otp'=>$otp
				);
				$data1 = $this->security->xss_clean($data1);
				$check = $this->AP->insertData('tb_users',$data1);
				if($check){
					$this->load->library('email');
				    $this->session->set_userdata('user_id',$check);
				    $email = $this->input->post('email');
				    $subject = 'Otp Verification';
				    $config['protocol']    = 'smtp';
				    $config['smtp_host']    = 'in-v3.mailjet.com';
				    $config['smtp_port']    = '587';
				    $config['smtp_timeout'] = '60';
				    $config['smtp_user']    = 'bd0a2f8880955f9711fb48a64ec08c6b'; 
				    $config['smtp_pass']    = '8e355ce6ceb09fd2b230b0b291a3dda1'; 
				    $config['charset']    = 'utf-8';
				    $config['newline']    = "\r\n";
				    $config['mailtype'] = 'html'; 
				    $config['validation'] = TRUE;
				    $this->email->initialize($config);
				    $this->email->set_mailtype("html");
				    $this->email->from('mradul.edithtech@gmail.com');
				    $this->email->to($email);
				    $this->email->subject($subject);
				    $this->email->message('Your Verifivation Code Is '.$otp);
				    $this->email->send();
					$status = '200';
					$data['error'] = false;
					$data['status'] = '1';
					$data['message'] = 'Verify Contact Number!.';
					$data['otp'] = $otp;
					$data['UserId'] = $check;
				}else{
					$status = '200';
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
			$status = '500';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}

	public function UserResendOtp(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('email','Email','required|valid_email|trim');
			if($this->form_validation->run()===TRUE){
				$post = $this->input->post();
				$check = $this->AP->getSelectRowWhere('id,email,otp','tb_users',array('email'=>$post['email']));
				if(!empty($check)){
					$otp = $check->otp;
					$this->load->library('email');
				    $subject = 'Otp Verification';
				    $config['protocol']    = 'smtp';
				    $config['smtp_host']    = 'in-v3.mailjet.com';
				    $config['smtp_port']    = '587';
				    $config['smtp_timeout'] = '60';
				    $config['smtp_user']    = 'bd0a2f8880955f9711fb48a64ec08c6b'; 
				    $config['smtp_pass']    = '8e355ce6ceb09fd2b230b0b291a3dda1'; 
				    $config['charset']    = 'utf-8';
				    $config['newline']    = "\r\n";
				    $config['mailtype'] = 'html'; 
				    $config['validation'] = TRUE;
				    $this->email->initialize($config);
				    $this->email->set_mailtype("html");
				    $this->email->from('mradul.edithtech@gmail.com');
				    $this->email->to($check->email);
				    $this->email->subject($subject);
				    $this->email->message('Your Verification Code Is '.$otp);
				    $this->email->send();
					$status = '200';
					$data['error'] = false;
					$data['message'] = 'OTP Send!.';
					$data['otp'] = $otp;
					$data['UserId'] = $check->id;
				}else{
					$data['error'] = true;
					$data['message'] = 'Unable To Send OTP!.';
					$status = '201';		
				}
			}else{
				$error = explode(',', str_replace(array('<p>','</p>'),array('',','), validation_errors()));
				$data['error'] = true;
				$data['message'] = $error[0];
				$status = '201';
			}
		}else{
			$data['error'] = true;
			$data['message'] = POST;
			$status = '201';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}

	public function UserVerify(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('otp','OTP','required|min_length[4]|max_length[4]|numeric|trim');
			$this->form_validation->set_rules('email','Email','required|valid_email|trim');
			if($this->form_validation->run()===TRUE){
				$post = $this->input->post();
				$check = $this->AP->getSelectRowWhere('otp','tb_users',array('email'=>$post['email'],'otp'=>$post['otp']));
				if(!empty($check)){
					unset($check);
					$check = $this->AP->UpdateData(array('status'=>'1','otp'=>''),array('email'=>$post['email']),'tb_users');
					if($check){
						$status = '200';
						$data['error'] = false;
						$data['message'] = 'User Verify!.';
					}else{
						$status = '201';
						$data['error'] = true;
						$data['message'] = 'Internal Server Error!.';
					}
				}else{
					$data['error'] = true;
					$data['message'] = 'Invalid OTP!.';
					$status = '201';
				}
			}else{
				$error = explode(',', str_replace(array('<p>','</p>'),array('',','), validation_errors()));
				$data['error'] = true;
				$data['message'] = $error[0];
				$status = '201';
			}
		}else{
			$data['error'] = true;
			$data['message'] = POST;
			$status = '201';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}

	 public function UserSignIn(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$query = "SELECT * FROM `tb_users` WHERE `email`='$email' AND `password`='$password'";
			$check = $this->AP->sqlQuery($query);
			if(!empty($check)){
				if($check->status == '0'){
					$data['error'] = true;
					$data['message'] = 'Account Is Not Verified!.';
					$status = '201';
				}else{
					$data['error'] = false;
					$data['message'] = 'User Sign-In Successfully!.';
					$data['data']=$check;
					$status = '200';				}
			}else{
				$data['error'] = true;
				$data['message'] = 'Inavalid Email Or Password!.';
				$status = '201';
			}
		}else{
			$data['error'] = true;
			$data['message'] = POST;
			$status = '201';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}

  public function UserForgotPassword(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('email','Email','required');
			if($this->form_validation->run()===TRUE){
				$email = $this->input->post('email',TRUE);
				$query = "SELECT `id`,`email` FROM `tb_users` WHERE `email`='$email'";
				$check = $this->AP->sqlQuery($query);
				if(!empty($check)){
					$otp = mt_rand(1000, 9999);
					$this->load->library('email');
				    $subject = 'Otp For Your Password Recovery';
				    $config['protocol']    = 'smtp';
				    $config['smtp_host']    = 'in-v3.mailjet.com';
				    $config['smtp_port']    = '587';
				    $config['smtp_timeout'] = '60';
				    $config['smtp_user']    = 'bd0a2f8880955f9711fb48a64ec08c6b'; 
				    $config['smtp_pass']    = '8e355ce6ceb09fd2b230b0b291a3dda1'; 
				    $config['charset']    = 'utf-8';
				    $config['newline']    = "\r\n";
				    $config['mailtype'] = 'html'; 
				    $config['validation'] = TRUE;
				    $this->email->initialize($config);
				    $this->email->set_mailtype("html");
				    $this->email->from('mradul.edithtech@gmail.com');
				    $this->email->to($check->email);
				    $this->email->subject($subject);
				    $this->email->message('Otp For Your Password Recovery Is '.$otp);
				    $this->email->send();
					$this->AP->UpdateData(array('otp'=>$otp),array('id'=>$check->id),'tb_users');
					$data['error'] = false;
					$data['message'] = 'Please Verify Email';
					$data['otp'] = $otp;
					$data['userId'] = $check->id;
					$status = '200';	
				}else{
					$data['error'] = true;
					$data['message'] = 'No Account Found With This Email';
					$status = '201';
				}
			}else{
				$error = explode(',', str_replace(array('<p>','</p>'),array('',','), validation_errors()));
				$data['error'] = true;
				$data['message'] = $error[0];
				$status = '201';
			}
		}else{
			$data['error'] = true;
			$data['message'] = POST;
			$status = '201';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}

	public function UserChangePassword(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('userId','User Id','required');
			$this->form_validation->set_rules('password','Password','required|min_length[6]');
			$this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');
			$this->form_validation->set_message('matches', 'Password And Confirm Password Not Matching');
			if($this->form_validation->run()===TRUE){
				$password = md5($this->input->post('password'));
				$this->AP->UpdateData(array('password'=>$password),array('id'=>$_POST['userId']),'tb_users');
				$data['error'] = false;
				$data['message'] = 'Password Changed!.';
				$status = '200';
			}else{
				$error = explode(',', str_replace(array('<p>','</p>'),array('',','), validation_errors()));
				$data['error'] = true;
				$data['message'] = $error[0];
				$status = '201';
			}
		}else{
			$data['error'] = true;
			$data['message'] = POST;
			$status = '201';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}

	public function UserDetails(){
		$id = $this->input->post('userId');
		$get = $this->AP->getSelectWhereResult('*',array('id'=>$id),'tb_users');
		if(!empty($get)){
			$data['error'] = false;
			$data['message'] = 'Data Fetched!.';
			$data['data'] = $get;
			$status = '200';
		}else{
			$data['error'] = true;
			$data['message'] = 'No Record Found!.';
			$status = '201';
		}
		return $this->output->set_content_type('application/json')->set_status_header(200)
		->set_output(json_encode($data));
	}

	public function UserProfileEdit(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('name','Name','required|trim');
			$this->form_validation->set_rules('email','Email','required|valid_email|trim');
			if($this->form_validation->run()===TRUE){
				$id = $this->input->post('userId');
				$post = $this->input->post();
				$data1 = array(
					'name'=>$post['name'],
					'email'=>$post['email'],
				);
		  $get = $this->AP->UpdateData($data1,array('id'=>$post['userId']),'tb_users');	     
		  if(!empty($get)){
			$data['error'] = false;
			$data['message'] = 'Data Updated!.';
			$data['data'] = $get;
			$status = '200';
		  }else{
		  	$data['error'] = true;
			$data['message'] = 'Data Is Not Updated!.';
			$status = '201';
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

	public function UserUpdatePasswordAfterLogin(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('password','Password','required|min_length[6]');
			$this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');
			if($this->form_validation->run()===TRUE){
				$id = $this->input->post('userId');
				$post = $this->input->post();
				$password = md5($post['password']);
				$data1 = array(
					'password'=>$password,
				);
		  $get = $this->AP->UpdateData($data1,array('id'=>$post['userId']),'tb_users');	     
		  if(!empty($get)){
			$data['error'] = false;
			$data['message'] = 'Data Updated!.';
			$data['data'] = $get;
			$status = '200';
		  }else{
		  	$data['error'] = true;
			$data['message'] = 'Data Is Not Updated!.';
			$status = '201';
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