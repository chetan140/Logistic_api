	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Main extends CI_Controller{
    
    function __construct()
	 	{
	 		parent::__construct();
	 		$this->load->model('adminmodel');
			
		}

	public function index()
	{   
		$data['slider']=$this->adminmodel->show_slider_image('*');
		$data['course']=$this->adminmodel->show_courses_project('*');
		$data['online_service']=$this->adminmodel->show_online_service_image('*');
		$data['testimonial']=$this->adminmodel->show_testimonial_image('*');
		$data['news']=$this->adminmodel->show_news_image('*');
		$data['course_home']=$this->adminmodel->show_home_course_image('*');
		$this->load->view("user/index",$data);
	}

	public function header()
	{
		$data['slider']=$this->adminmodel->show_slider_image('*');
		$this->load->view("user/include/header",$data);
	}

	public function about()
	{   
		$data['data']=$this->adminmodel->show_about_image('*');
		$this->load->view("user/about",$data);
	}

	public function gallery()
	{ 
		$data['data']=$this->adminmodel->show_gallery_image('*');
		$this->load->view("user/gallery",$data);
	}

	public function applyonline()
	{
		$this->load->view("user/applyonline");
	}

	public function bhopal()
	{
		$this->load->view("user/bhopal");
	}

	public function books()
	{   
		$data['book']=$this->adminmodel->show_book_image('*');
		$this->load->view("user/books",$data);
	}

	public function enquiry()
	{

		$this->load->view("user/enquiry");
	}

	public function faq()
	{    
	    $data['data']=$this->adminmodel->show_faq_project('*');
		$this->load->view("user/faq",$data	);
	}

	public function contact()
	{
		$this->load->view("user/contact");
	}

	public function indore()
	{ 
		$this->load->view("user/indore");
		
	}

	public function mppsc($id)
	{    
		$data['data']=$this->adminmodel->courses_details($id);
		$this->load->view("user/mppsc",$data);
	
	}	

	public function newsdetails($id)
	{    
	    $data['data']=$this->adminmodel->news_details($id);
	    $data['news']=$this->adminmodel->show_news_image('*');
		$this->load->view("user/newsdetails",$data);
	}

	public function notes()
	{   
		$data['notes']=$this->adminmodel->show_notes_image('*');
		$this->load->view("user/notes",$data);
	}

	public function online_courses()
	{ 
		$this->load->view("user/online_courses");
	}

	public function register()
	{ 
		$this->load->view("user/register");
		
	}

	public function tikamgarah()
	{ 
		$this->load->view("user/tikamgarah");
		
	}
}


?>

