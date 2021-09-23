<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main/index';
$route['index'] = 'main/index';
$route['about'] = 'main/about';
$route['contact'] = 'main/contact';
$route['applyonline'] = 'main/applyonline';
$route['bhopal'] = 'main/bhopal';
$route['books'] = 'main/books';
$route['enquiry'] = 'main/enquiry';
$route['faq'] = 'main/faq';
$route['gallery'] = 'main/gallery';
$route['indore'] = 'main/indore';
$route['mppsc'] = 'main/mppsc';
$route['newsdetails'] = 'main/newsdetails';
$route['notes'] = 'main/notes';
$route['online_courses'] = 'main/online_courses';
$route['register'] = 'main/register';
$route['tikamgarah'] = 'main/tikamgarah';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin'] = 'admin/login';
$route['admin/login'] = 'admin/login';
$route['admin/forget_password'] = 'admin/forgetpassword';
$route['admin/index'] = 'admin/show_contact';
$route['contact'] = 'admin/contact';
$route['add_slider'] = 'admin/view_slider_image';
$route['add_courses'] = 'admin/courses_project_page';
$route['view_courses'] = 'admin/courses_project_view_page';
$route['online_service'] = 'admin/view_online_service_image';
$route['testimonials'] = 'admin/view_testimonial_image';
$route['show_contact'] = 'admin/show_contact';
$route['add_gallery'] = 'admin/view_gallery_image';
$route['add_about'] = 'admin/view_about_image';
$route['add_faq'] = 'admin/faq_project_view_page';
$route['add_book'] = 'admin/view_book_image';
$route['add_notes'] = 'admin/view_notes_image';
$route['show_register'] = 'admin/show_register';
$route['show_apply'] = 'admin/show_apply';
$route['news'] = 'admin/view_news_image';
$route['add_home_courses'] = 'admin/view_home_course_image';
                        
$route['translate_uri_dashes'] = FALSE;
