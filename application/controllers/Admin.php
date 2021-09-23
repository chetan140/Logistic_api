<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*ob_start();*/

Class Admin extends CI_Controller{

function __construct(){
			parent::__construct();
			$this->load->model('Adminmodel');
			$this->load->model('Api_model','AP');
		}
		
public function index()
{
	$this->logedin();
	$this->load->view("admin/index");
}
public function login()
{
 $this->load->view("admin/login");
}


public function transaction_admin()
{
 $this->load->view("admin/transaction_admin");
}

public function user_data()
{
	$this->logedin();
 $this->load->view("admin/user");
}

public function vendor_data()
{
	$this->logedin();
 $this->load->view("admin/vendor");
}

public function vendor_driver_data()
{
	$this->logedin();
 $this->load->view("admin/vendor_driver");
}

public function vendor_vehical_data()
{ 
 $this->logedin();
 $id = $this->input->get('id');
 $data['vendor'] = $this->AP->getSelectRowWhere('name','tb_users',array('id'=>$id));
 $this->load->view("admin/vendor_vehical",$data);
}

public function Update_password()
{
	$this->load->view('admin/update_password');
}
public function forgetpassword()
{

 $this->load->view("admin/forgetpassword"); 
}
public function enter_otp()
{
  $this->load->view("admin/enter_otp"); 
}
public function forget_controller()
{
		$this->load->library("email");
		$email = $this->input->post('email');
		$this->db->where("email = '$email'");
		$this->db->from("tb_admin_login");
		$countResult = $this->db->count_all_results();
		if ($countResult  == 1) {
		$message=rand(1000, 9999);
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
    $this->email->to($email);
    $this->email->subject($subject);
    $this->email->message('Otp For Your Password Recovery Is '.$message);
    $this->email->send();
		$this->session->set_flashdata('msg',"Mail has been sent successfully");
		$this->session->set_flashdata('msg_class','alert-success');
		if ($this->session->flashdata('msg')) {
		$this->session->set_userdata('Otp',$message);
		redirect('Admin/enter_otp');
		}

		}else{
		$this->session->set_flashdata('msg','Email Address Not Exist, Please Enter Valid One!');
		redirect($_SERVER['HTTP_REFERER']);
	}
}

public function otp_controller()
{
	$otp = $this->input->post('otp');
	$sess_otp = $this->session->userdata('Otp');
	if ($otp == $sess_otp){
		$this->session->set_flashdata('msg',"Otp Varified successfully");
		redirect('Admin/Update_password');
	}else{
		$this->session->set_flashdata('error_otp','Otp Not Matched, Please Enter Valid One!');
	    redirect($_SERVER['HTTP_REFERER']);
	}
}

public function update_password_set()
{
	$id = $this->input->get('id');
	$where = array('id' => $id);
	$set = array('password' => $this->input->post('password'));
	$query = $this->Adminmodel->set_password($where,'tb_admin_login',$set);
	if ($query) {
		redirect('Admin/index');
	}else{
		$this->session->set_flashdata('error','Internal Server Issue, Please Check After Some Time!');
	    redirect($_SERVER['HTTP_REFERER']);
	}
}

/*Login to the Admin panel*/
public function login_controller()
{
	$number=$this->input->post('username');
	$password=$this->input->post('password');
	$check=$this->Adminmodel->login_model($number, $password);
	if ($check) {
	$sess_array = array(
	'authenticated' => TRUE,
	'email' => $number,
	);
	$this->session->set_userdata($sess_array);
	redirect('admin/index');
	}else{
	$this->session->set_flashdata('message','Invalid Credentials,Please Enter Valid One!');
	redirect('admin/login');
	}
}

private function logedin()
{
	if (!$this->session->userdata('authenticated')) {
	$this->session->set_flashdata('message','Please Login To See The Next Page');
	redirect('admin/login');
}
}
public function log_out()
{
	$this->session->sess_destroy();
	$this->session->set_flashdata('message','Loged Out');
	redirect ('admin/login');
}	

 public function ChangeUserStatus(){
      $this->db->set('status',$_GET['status'])->where('id',$_GET['id'])->update('tb_users');
    }
 }
?>