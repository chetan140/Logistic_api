<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin extends CI_Controller{

function __construct()
		{
			parent::__construct();
			$this->load->model('adminmodel');	
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

    public function forgetpassword()
  {
    
   $this->load->view("admin/forgetpassword");
  }

  public function forget_controller()
  {
    $email = $this->input->post('email');
    $this->db->where("username = '$email'");
    $this->db->from("admin_login");
    $countResult = $this->db->count_all_results();
     
    if ($countResult  == 1) {


    $subject = 'New Enquiry';
    $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#cb2530;padding-left:3%"><h3>New Enquiry</h3></td></tr>';
    $emailContent .='<h4>Contact Number </h4>';
    $emailContent .= $this->input->post('contact');
    $emailContent .='<tr><td style="height:20px"></td></tr>';
    $emailContent .= $this->input->post('message');  //   Post message available here


    $emailContent .='<tr><td style="height:20px"></td></tr>';
    $emailContent .= "<tr><td style='background:#cb2530;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://elevenstechwebtutorials.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.ajhealthandfitness.in/</a></p></td></tr></table></body></html>";
    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'in-v3.mailjet.com';
    $config['smtp_port']    = '587';
    $config['smtp_timeout'] = '60';
    $config['smtp_user']    = '0008ee893700f09ea7afe4978b48adf7';    //Important
    $config['smtp_pass']    = '2dd8b065acb48432614921276156e8db';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 

    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from('mradul.vedanshtechnologies@gmail.com');
    $this->email->to($email);
    $this->email->subject($subject);
    $this->email->message('Working');
    $this->email->send();

    $this->session->set_flashdata('msg',"Mail has been sent successfully");
    $this->session->set_flashdata('msg_class','alert-success');

     } 
   
  
  }

/*Login to the admin panel*/	

	public function login_controller()
	{  
    $number=$this->input->post('username');
    $password=$this->input->post('password');

	  $check=$this->adminmodel->login_model($number, $password);
	  if ($check) {
		$sess_array = array(
		'username' => $user->username,
		'authenticated' => TRUE
		 );
		$this->session->set_userdata($sess_array);
			redirect('admin/index');
	}else{
			$this->session->set_flashdata('message','No Username Found');
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

/*Adding home slider*/

    public function 
    insert_slider_image()
	{ 
		if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
			$extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			$name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
		}
		$data = array(
			'slider_image'=> $name,
			'head'=> $this->input->post('head'),
			'content'=> $this->input->post('content')
		);
		$view = $this->adminmodel->slider_image($data,'slider_table');
        $this->session->set_flashdata('message','Record Inserted');
        redirect('add_slider');
	}

 
  
   public function view_slider_image()
   {
   	$this->logedin();
   	$data['data']=$this->adminmodel->show_slider_image('*');
   	$this->load->view("admin/add_slider",$data);
   }

   /*delete_about_home_data*/

	public function delete_slider_image()
	{
		$id=$this->input->get('id');
		$this->adminmodel->delete_slider($id);
		$this->session->set_flashdata('message','Record Deleted');
        redirect('add_slider');

	}

/*Add Courses */



      public function insert_courses_project()
  { 
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
    }
   /* echo'<pre>';
    print_r($_POST);die();*/
    $data = array(
      'tittle'=> $this->input->post('tittle'),
      'duration'=> $this->input->post('duration'),
      'content'=> $this->input->post('content'),
      'checkbox'=> $this->input->post('checkbox'),
      'image'=> $name
      
    );
    $view = $this->adminmodel->courses_project_add($data,'courses');
        $this->session->set_flashdata('message','Record Inserted');
        redirect('view_courses');
  }
  
  public function courses_project_page()
  {
    $this->logedin(); 
    $data['data']=$this->adminmodel->show_courses_project('*');
    $this->load->view("admin/add_courses",$data);
  }

  public function courses_project_view_page()
  {
    $this->logedin(); 
    $data['data']=$this->adminmodel->show_courses_project('*');
    $this->load->view("admin/view_courses",$data);
  }

  public function delete_courses_project_data()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_courses_project($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('view_courses');

  }

   public function update_courses_project()
    {
      $id = $this->input->get('id');
      $where = array('id'=>$id);
      $data['data'] = $this->adminmodel->get_courses_project('*','courses',$where);
      $this->load->view('admin/edit_course',$data);
    }

    public function changeStatus(){
     $where = array('id'=>$_GET['id']);

       $set = array(

      'checkbox'=> $_GET['status'],
           );

        $check = $this->adminmodel->set_check_project($where,'courses',$set);
      $this->session->set_flashdata('message','Course Added As A Popular Course.');
        redirect('view_courses');

    }

    public function update_courses_project_data(){ 
      $where = array('id'=>$_GET['id']);
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
           }else{
           $name = $_POST['old_1'];
     }
      $set = array(
        
      'tittle'=> $_POST['tittle'],
      'duration'=> $_POST['duration'],
      'content'=> $_POST['content'],
      'checkbox'=> $_POST['checkbox'],
      'image'=> $name
           );
      $check = $this->adminmodel->set_courses_project($where,'courses',$set);
      $this->session->set_flashdata('message','Record Updated');
        redirect('view_courses');
    }   


 

    
    public function insert_online_service_image()
  { 

      if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
    }
      $data = array(
      'url'=> $this->input->post('url'),
      'head'=> $this->input->post('head'),
      'image' => $name
       );
    $view = $this->adminmodel->online_service_image($data,'online_service');
    $this->session->set_flashdata('message','Record Inserted');
    redirect('online_service');
  }
   public function view_online_service_image()
   {
    $this->logedin();
    $data['data']=$this->adminmodel->show_online_service_image('*');
    $this->load->view("admin/online_service",$data);
   }
  public function delete_online_service_image()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_online_service($id);
    $this->session->set_flashdata('message','Record Deleted');
    redirect('online_service');

  }

    /*testimonial*/
   public function insert_testimonial_image()
  { 
    
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
    }
    $data = array(
      'image'=> $name,
      'name'=> $this->input->post('name'),
      'post'=> $this->input->post('post'),
      'content'=> $this->input->post('content')
    );
    $view = $this->adminmodel->testimonial_image($data,'testimonial');
        $this->session->set_flashdata('message','Record Inserted');
        redirect('testimonials');
  }

 
  
   public function view_testimonial_image()
   {
    $this->logedin();
    $data['data']=$this->adminmodel->show_testimonial_image('*');
    $this->load->view("admin/add_testimonial",$data);
   }

  

  public function delete_testimonial_image()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_testimonial($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('testimonials');

  }

   public function update_testimonial()
    {
      $id = $this->input->get('id');
      $where = array('id'=>$id);
      $data['data'] = $this->adminmodel->get_testimonial('*','testimonial',$where);
      $this->load->view('admin/edit_testimonial',$data);
    }

    public function update_testimonial_data(){ 
      $where = array('id'=>$_GET['id']);
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
           }else{
           $name = $_POST['old_1'];
     }
      $set = array(
        
      'post'=> $_POST['post'],
      'name'=> $_POST['name'],
      'content'=> $_POST['content'],
      'image'=> $   name
           );
      $check = $this->adminmodel->set_testimonial($where,'testimonial',$set);
      $this->session->set_flashdata('message','Record Updated');
        redirect('testimonials');
    }

  /*testimonial*/

  /*contact*/

public function insert_contact()
  { 
    
    $data = array(
      'name'=> $this->input->post('name'),
      'message'=> $this->input->post('message'),
      'email'=> $this->input->post('email'),
      'number'=> $this->input->post('number'),
      'city'=> $this->input->post('city')
    );
    $view = $this->adminmodel->contact_add($data,'contact_enquiry');
        $this->session->set_flashdata('message','Your Enquiry Has Been Send Our Team Will Contact You Soon.');
        redirect('index');
  }
public function show_contact()
 {
      $this->logedin();
      $data['data']=$this->adminmodel->contact_view('*');
    $this->load->view("admin/show_contact",$data);
 }  
 public function delete_our_contact()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_contact($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('show_contact');

  }

  /*contact*/

  /*Adding home slider*/

    public function insert_gallery_image()
  { 
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
    }
    $data = array(
      'image'=> $name,
      'tittle'=> $this->input->post('tittle'),
      
    );
    $view = $this->adminmodel->gallery_image($data,'gallery');
        $this->session->set_flashdata('message','Record Inserted');
        redirect('add_gallery');
  }

 
  
   public function view_gallery_image()
   {
    $this->logedin();
    $data['data']=$this->adminmodel->show_gallery_image('*');
    $this->load->view("admin/add_gallery",$data);
   }

   /*delete_about_home_data*/

  public function delete_gallery_image()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_gallery($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('add_gallery');

  }

   public function view_about_image()
   {
    $this->logedin();
    $data['data']=$this->adminmodel->show_about_image('*');
    $this->load->view("admin/show_about",$data);
   }

   public function update_about()
    {
      $id = $this->input->get('id');
      $where = array('id'=>$id);
      $data['data'] = $this->adminmodel->get_about('*','about',$where);
      $this->load->view('admin/edit_about',$data);
    }

    public function update_about_data(){ 
      $where = array('id'=>$_GET['id']);
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
           }else{
           $name = $_POST['old_1'];
     }
      $set = array(
        
      'about_contant'=> $_POST['about_contant'],
      'director_contant'=> $_POST['director_contant'],
      'why_navigate'=> $_POST['why_navigate'],
      'image'=> $name
           );
      $check = $this->adminmodel->set_about($where,'about',$set);
      $this->session->set_flashdata('message','Record Updated');
        redirect('add_about');
    }


    /*Add Courses */



      public function insert_faq_project()
  { 
    $data = array(
      'question'=> $this->input->post('question'),
      'answer'=> $this->input->post('answer'),
      
    );
    $view = $this->adminmodel->faq_project_add($data,'faq');
        $this->session->set_flashdata('message','Record Inserted');
        redirect('add_faq');
  }
  
  public function faq_project_page()
  {
    $this->logedin(); 
    $data['data']=$this->adminmodel->show_faq_project('*');
    $this->load->view("admin/add_faq",$data);
  }

  public function faq_project_view_page()
  {
    $this->logedin(); 
    $data['data']=$this->adminmodel->show_faq_project('*');
    $this->load->view("admin/add_faq",$data);
  }

  public function delete_faq_project_data()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_faq_project($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('add_faq');

  }

   public function update_faq_project()
    {
      $id = $this->input->get('id');
      $where = array('id'=>$id);
      $data['data'] = $this->adminmodel->get_faq_project('*','faq',$where);
      $this->load->view('admin/edit_faq',$data);
    }

    public function update_faq_project_data(){ 
      $where = array('id'=>$_GET['id']);
      $set = array(
      'question'=> $_POST['question'],
      'answer'=> $_POST['answer'],
           );
      $check = $this->adminmodel->set_faq_project($where,'faq',$set);
      $this->session->set_flashdata('message','Record Updated');
      redirect('add_faq');
    }    

    
    public function insert_book_image()
  { 
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
    }

      if (($_FILES['image2']['name'] && $_FILES['image2'] ['size']>1)) {
      $extention=pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION);
      $name_a = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name_a;
            if (move_uploaded_file($_FILES['image2']['tmp_name'], $path)) {
                 $name_a = $name_a;
               }else{
                $name_a = 'dsd';
               }
    }
    $data = array(
      'image'=> $name,
       'image2'=> $name_a,
    );
    $view = $this->adminmodel->book_image($data,'book');
        $this->session->set_flashdata('message','Record Inserted');
        redirect('add_book');
  }

 
  
   public function view_book_image()
   {
    $this->logedin();
    $data['data']=$this->adminmodel->show_book_image('*');
    $this->load->view("admin/add_book",$data);
   }

   /*delete_about_home_data*/

  public function delete_book_image()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_book($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('add_book');

  }


    public function insert_notes_image()
  { 
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
    }
     if (($_FILES['image2']['name'] && $_FILES['image2'] ['size']>1)) {
      $extention=pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION);
      $name_a = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name_a;
            if (move_uploaded_file($_FILES['image2']['tmp_name'], $path)) {
                 $name_a = $name_a;
               }else{
                $name_a = 'dsd';
               }
    }
    $data = array(
      'image'=> $name,
       'image2'=> $name_a,
    );
    $view = $this->adminmodel->notes_image($data,'notes');
        $this->session->set_flashdata('message','Record Inserted');
        redirect('add_notes');
  }

 
  
   public function view_notes_image()
   {
    $this->logedin();
    $data['data']=$this->adminmodel->show_notes_image('*');
    $this->load->view("admin/add_notes",$data);
   }

   /*delete_about_home_data*/

  public function delete_notes_image()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_notes($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('add_notes');

  }

    /*contact*/

public function insert_register()
  { 
    
    $data = array(
      'fname'=> $this->input->post('fname'),
      'lname'=> $this->input->post('lname'),
      'number'=> $this->input->post('number'),
      'cname'=> $this->input->post('cname'),
      'cbranch'=> $this->input->post('cbranch'),
      'subject'=> $this->input->post('subject'),
    );
    $view = $this->adminmodel->register_add($data,'registration');
        $this->session->set_flashdata('message','Your Enquiry Has Been Send Our Team Will register You Soon.');
        redirect('register');
  }
public function show_register()
 {
      $this->logedin();
      $data['data']=$this->adminmodel->register_view('*');
    $this->load->view("admin/show_register",$data);
 }  
 public function delete_our_register()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_register($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('show_register');

  }

public function insert_apply()
  { 
    
    $data = array(
      'fname'=> $this->input->post('fname'),
      'lname'=> $this->input->post('lname'),
      'number'=> $this->input->post('number'),
      
      'course'=> $this->input->post('course'),
    );
    $view = $this->adminmodel->apply_add($data,'apply_online');
        $this->session->set_flashdata('message','Your Enquiry Has Been Send Our Team Will apply You Soon.');
        redirect('applyonline');
  }
public function show_apply()
 {
      $this->logedin();
      $data['data']=$this->adminmodel->apply_view('*');
    $this->load->view("admin/show_apply",$data);
 }  
 public function delete_our_apply()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_apply($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('show_apply');

  }


   /*testimonial*/
   public function insert_news_image()
  { 
    
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
    }
    $data = array(
      'image'=> $name,
      'tittle'=> $this->input->post('tittle'),
      'content'=> $this->input->post('content')
    );
    $view = $this->adminmodel->news_image($data,'news');
        $this->session->set_flashdata('message','Record Inserted');
        redirect('news');
  }

 
  
   public function view_news_image()
   {
    $this->logedin();
    $data['data']=$this->adminmodel->show_news_image('*');
    $this->load->view("admin/add_news",$data);
   }

  

  public function delete_news_image()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_news($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('news');

  }

   public function update_news()
    {
      $id = $this->input->get('id');
      $where = array('id'=>$id);
      $data['data'] = $this->adminmodel->get_news('*','news',$where);
      $this->load->view('admin/edit_news',$data);
    }

    public function update_news_data(){ 
      $where = array('id'=>$_GET['id']);
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
           }else{
           $name = $_POST['old_1'];
     }
      $set = array(
        
      
      'tittle'=> $_POST['tittle'],
      'content'=> $_POST['content'],
      'image'=> $name
           );
      $check = $this->adminmodel->set_news($where,'news',$set);
      $this->session->set_flashdata('message','Record Updated');
        redirect('news');
    }

  /*testimonial*/
 public function insert_home_course_image()
 
  { 
    if (($_FILES['image']['name'] && $_FILES['image'] ['size']>1)) {
      $extention=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $name = 'USR-'.time().mt_rand(0000,1111).'.'.$extention;
            $path = 'newimage/'.$name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                 $name = $name;
               }else{
                $name = 'dsd';
               }
    }
    $data = array(
      'image'=> $name,
     
      
    );
    $view = $this->adminmodel->home_course_image($data,'home_course');
        $this->session->set_flashdata('message','Record Inserted');
        redirect('add_home_courses');
  }

 
  
   public function view_home_course_image()
   {
    $this->logedin();
    $data['data']=$this->adminmodel->show_home_course_image('*');
    $this->load->view("admin/add_home_courses",$data);
   }

   /*delete_about_home_data*/

  public function delete_home_course_image()
  {
    $id=$this->input->get('id');
    $this->adminmodel->delete_home_course($id);
    $this->session->set_flashdata('message','Record Deleted');
        redirect('add_home_courses');

  }




	
}
?>