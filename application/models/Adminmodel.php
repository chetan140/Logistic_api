<?php

class Adminmodel extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

/*login_to_adminpanel*/
    public function login_model($number,$password)
    {
    
      $query=$this->db->query("SELECT * FROM `tb_admin_login` WHERE (username ='$number' OR email ='$number')  AND password = '$password'");

      if ($query->num_rows() >= 1) {
          return true;
      }
    }


    function set_password($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }
   /*Adding home slider*/

    public function slider_image($data,$table)
    {
        $set=$this->db->insert('slider_table',$data);
    }   

   
    public function show_slider_image()
    {
       $set=$this->db->get('slider_table');
       return $set->result();
    }

      public function delete_slider($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('slider_table');
    }
  
    /*Adding Courses*/


    public function services_project_add($data,$table)
    {
        $set=$this->db->insert('services',$data);
    } 

     public function show_services_project()
    {
       $set=$this->db->get('services');
       return $set->result();
    }

     public function delete_services_project($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('services');
    }

      function get_services_project($select,$table,$where){
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }



    function set_services_project($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }
  function set_check_project($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }


         public function courses_details($id)
    {
       $this->db->where('id',$id);
       $set=$this->db->get('courses');
       return $set->result();
    
    }

     public function online_service_image($data,$table)
    {
        $set=$this->db->insert('online_service',$data);
    }   

   
    public function show_online_service_image()
    {
       $set=$this->db->get('online_service');
       return $set->result();
    }

      public function delete_online_service($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('online_service');
    }

    // testimonial

 public function testimonial_image($data,$table)
    {
        $set=$this->db->insert('testimonial',$data);
    }   

   
    public function show_testimonial_image()
    {
       $set=$this->db->get('testimonial');
       return $set->result();
    }

      public function delete_testimonial($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('testimonial');
    }

     
       function get_testimonial($select,$table,$where){
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }



    function set_testimonial($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }
/*    testimonial*/

   public function contact_add($data,$table)
    {
        $set=$this->db->insert('contact',$data);
    }

    public function contact_view()
    {
       $set=$this->db->get('contact');
       return $set->result();
    }

     public function delete_contact($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('contact');
    }


 public function submitcv_add($data,$table)
    {
        $set=$this->db->insert('submitcv',$data);
    }

    public function submitcv_view()
    {
       $set=$this->db->get('submitcv');
       return $set->result();
    }

     public function delete_submitcv($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('submitcv');
    }


    public function gallery_image($data,$table)
    {
        $set=$this->db->insert('gallery',$data);
    }   

   
    public function show_gallery_image()
    {
       $set=$this->db->get('gallery');
       return $set->result();
    }

      public function delete_gallery($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('gallery');
    }

      // testimonial

   
    public function show_about_image()
    {
       $set=$this->db->get('about');
       return $set->result();
    }

     
       function get_about($select,$table,$where){
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }



    function set_about($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }


     public function show_employ_image()
    {
       $set=$this->db->get('for_employee');
       return $set->result();
    }

     
       function get_employ($select,$table,$where){
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }



    function set_employ($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }


     public function show_counter_image()
    {
       $set=$this->db->get('home_counter');
       return $set->result();
    }

     
       function get_counter($select,$table,$where){
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }



    function set_counter($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }


 public function show_why_c_u_image()
    {
       $set=$this->db->get('why_choose_us');
       return $set->result();
    }

     
       function get_why_c_u($select,$table,$where){
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }



    function set_why_c_u($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }


     public function show_staffing_partner_image()
    {
       $set=$this->db->get('staffing_partner');
       return $set->result();
    }

     
       function get_staffing_partner($select,$table,$where){
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }



    function set_staffing_partner($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }



     /*Adding Courses*/


    public function faq_project_add($data,$table)
    {
        $set=$this->db->insert('faq',$data);
    } 

     public function show_faq_project()
    {
       $set=$this->db->get('faq');
       return $set->result();
    }

     public function delete_faq_project($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('faq');
    }

      function get_faq_project($select,$table,$where){
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }



    function set_faq_project($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }


    public function book_image($data,$table)
    {
        $set=$this->db->insert('book',$data);
    }   

   
    public function show_book_image()
    {
       $set=$this->db->get('book');
       return $set->result();
    }

      public function delete_book($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('book');
    }

     public function notes_image($data,$table)
    {
        $set=$this->db->insert('notes',$data);
    }   

   
    public function show_notes_image()
    {
       $set=$this->db->get('notes');
       return $set->result();
    }

      public function delete_notes($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('notes');
    }


   public function register_add($data,$table)
    {
        $set=$this->db->insert('registration',$data);
    }

    public function register_view()
    {
       $set=$this->db->get('registration');
       return $set->result();
    }

     public function delete_register($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('registration');
    }

       public function apply_add($data,$table)
    {
        $set=$this->db->insert('apply_online',$data);
    }

    public function apply_view()
    {
       $set=$this->db->get('apply_online');
       return $set->result();
    }

     public function delete_apply($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('apply_online');
    }

    // testimonial

 public function news_image($data,$table)
    {
        $set=$this->db->insert('news',$data);
    }   

   
    public function show_news_image()
    {
       $set=$this->db->get('news');
       return $set->result();
    }

      public function delete_news($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('news');
    }

     
       function get_news($select,$table,$where){
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }else{
            return false;
        }
    }



    function set_news($where,$table,$set){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }


           public function news_details($id)
    {
       $this->db->where('id',$id);
       $set=$this->db->get('news');
       return $set->result();     
    
    }

public function home_course_image($data,$table)
    {
        $set=$this->db->insert('home_course',$data);
    }   

   
    public function show_home_course_image()
    {
       $set=$this->db->get('home_course');
       return $set->result();
    }

      public function delete_home_course($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('home_course');
    }

      public function service_details($id)
    {
       $this->db->where('id',$id);
       $set=$this->db->get('services');
       return $set->result();
    
    }

    public function video_image($data,$table)
    {
        $set=$this->db->insert('video',$data);
    }   

   
    public function show_video_image()
    {
       $set=$this->db->get('video');
       return $set->result();
    }

      public function delete_video($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('video');
    }

        public function ourteam_image($data,$table)
    {
        $set=$this->db->insert('ourteam',$data);
    }   

   
    public function show_ourteam_image()
    {
       $set=$this->db->get('ourteam');
       return $set->result();
    }

      public function delete_ourteam($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('ourteam');
    }

         public function ourcompanies_image($data,$table)
    {
        $set=$this->db->insert('ourcompanies',$data);
    }   

   
    public function show_ourcompanies_image()
    {
       $set=$this->db->get('ourcompanies');
       return $set->result();
    }

      public function delete_ourcompanies($id)
    {
         $this->db->where('id',$id);
        $this->db->delete('ourcompanies');
    }



  
}

?>