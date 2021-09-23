<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Nevigate Admin Panel</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                    
                    <li><a href="<?= base_url().'admin/log_out' ?>"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <hr>
            
        </div>
        <!-- Nav tabs -->
        
        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            
            <div class="tab-pane animated fadeIn active" id="project_menu">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">
                        <li class="active"><a href="<?php echo base_url('admin/index');?>"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                        <li class="active">
                            <a href="#FileManager" class="has-arrow" aria-expanded="true"><i class="icon-folder"></i> <span>Management  </span></a>
                            <ul aria-expanded="true" class="collapse in" style="">
                                  <li><a href="<?php echo base_url('add_slider');?>"><i class="icon-envelope"></i>Manage Slider</a></li>

                                    <li>
                                    <a href="<?php echo base_url('add_book');?>"><i class="icon-list"></i><span>Manage Book</span></a>
                                    
                                </li>
                                <li>
                                    <a href="<?php echo base_url('add_notes');?>"><i class="icon-list"></i><span>Manage Notes</span></a>
                                    
                                </li>
                                <li><a href="<?php echo base_url('add_courses');?>"><i class="icon-bubbles"></i>Add Courses</a></li>

                                 <li><a href="<?php echo base_url('view_courses');?>"><i class="icon-bubbles"></i>Manage Courses</a></li>
                              
                                <li>
                                    <a href="<?php echo base_url('add_home_courses');?>"><i class="icon-list"></i><span>Manage Home Course Image</span></a>
                                    
                                </li>

                                  <li>
                                    <a href="<?php echo base_url('online_service');?>"><i class="icon-list"></i><span>Manage Online Service</span></a>
                                    
                                </li>
                               <li>
                                    <a href="<?php echo base_url('news');?>"><i class="icon-list"></i><span>Manage News</span></a>
                                    
                                </li>

                                  <li>
                                    <a href="<?php echo base_url('testimonials');?>"><i class="icon-list"></i><span>Manage Testimonials</span></a>
                                    
                                    </li>  
                                <li>
                                    <a href="<?php echo base_url('add_about');?>"><i class="icon-list"></i><span>Manage About</span></a>
                                    
                                </li>
                              
                                <li>
                                    <a href="<?php echo base_url('add_gallery');?>"><i class="icon-list"></i><span>Manage Gallery</span></a>
                                    
                                </li>
                              
                                
                              
                               
                              
                                        
                                        
                                     
                                        
                                    </ul>
                                </li>
                                
                          <li class="active">
                            <a href="#FileManager" class="has-arrow" aria-expanded="true"><i class="icon-folder"></i> <span>All Enquiry</span></a>
                            <ul aria-expanded="true" class="collapse in" style="">
                                <li>
                                    <a href="<?php echo base_url('show_apply');?>"><i class="icon-list"></i><span>Apply Online Enquiry</span></a>
                                    
                                </li>
                             
                                <li>
                                    <a href="<?php echo base_url('show_register');?>"><i class="icon-list"></i><span>Registration</span></a>
                                    
                                </li>
                                  <li>
                                            <a href="<?php echo base_url('show_contact');?>"><i class="icon-list"></i><span>Contact Enquiry</span></a>
                                            
                                        </li>
                                      
                                      
                                    </ul>
                                </li>

                                
                                
                                
                                
                                
                                
                                
                                
                            </ul>
                        </nav>
                    </div>
                    
                </ul>
            </nav>
        </div>
        
    </div>
</div>
</div>