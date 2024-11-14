<div id="left">
   <div class="media user-media bg-dark dker">
      <div class="user-media-toggleHover">
         <span class="fa fa-user"></span>
      </div>
      <div class="user-wrapper bg-dark">
         <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
               src="<?=base_url()?>img/admin.jpg">
            <p class="text-white user-info">Welcome <?=$this->session->username?></p>
         </a>

      </div>
   </div>
   <!-- #menu -->


   <ul id="menu" class="bg-blue dker">
     <?php


  ?>
     <li class="<?php if (uri_string() == 'dashboard') echo "active";?>">
         <a href="<?=base_url('dashboard')?>">
        <i class="fa fa-home"></i>
        <span class="link-title">&nbsp;Dashboard</span>
        </a>
     </li>
     <?php

     if ($status == "2"){
       $this->session->set_flashdata('SUCCESSMSG','your account is Inactive');
       redirect('login');
       
     }

     ?>
       <?php

	if ($acct_type == "1"){

    ?>

    <li class="<?php if (uri_string() == 'calendar') echo "active";?>">
        <a href="<?=base_url('calendar')?>">
       <i class="fa fa-calendar" aria-hidden="true"></i>
       <span class="link-title">&nbsp;Calendar</span>
       </a>
    </li>

      <li class="<?php if (uri_string() == 'view-users' || uri_string() == 'users-register' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp; Users</span>
         <span class="fa arrow"></span>
         </a>
         <ul>

            <li class="<?php if (uri_string() == 'users-register') echo "active";?>">
                <a href="<?=base_url('users-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp; Register Users
               </a>
            </li>
			<li class="<?php if (uri_string() == 'view-users') echo "active";?>">
               <a href="<?=base_url('view-users')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Users
               </a>

            </li>
         </ul>
      </li>
      <?php } ?>

      <li class="<?php if (uri_string() == 'view-alumni' || uri_string() == 'alumni-register' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-mortar-board"></i>
         <span class="link-title">&nbsp; Alumni</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
            <li class="<?php if (uri_string() == 'alumni-register') echo "active";?>">
                <a href="<?=base_url('alumni-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp; Register Alumni
               </a>
            </li>
			<li class="<?php if (uri_string() == 'view-alumni') echo "active";?>">
               <a href="<?=base_url('view-alumni')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Alumni
               </a>
            </li>
         </ul>
      </li>
<!--events-->
      <li class="<?php if (uri_string() == 'view-events' || uri_string() == 'events-register' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-mortar-board"></i>
         <span class="link-title">&nbsp; Events</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
            <li class="<?php if (uri_string() == 'events-register') echo "active";?>">
                <a href="<?=base_url('events-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp; Register Events
               </a>
            </li>
      <li class="<?php if (uri_string() == 'view-events') echo "active";?>">
               <a href="<?=base_url('view-events')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Events
               </a>
            </li>
         </ul>
      </li>



	<li class="<?php if (uri_string() == 'attendance-register' || uri_string() == 'view-attendance' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-calendar-check-o"></i>
         <span class="link-title">&nbsp; Attendance</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
			<li class="<?php if (uri_string() == 'attendance-register') echo "active";?>">
                <a href="<?=base_url('attendance-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Attendance Register
               </a>
            </li>

            <li class="<?php if (uri_string() == 'view-attendance') echo "active";?>">
               <a href="<?=base_url('view-attendance')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Attendance
               </a>
            </li>
         </ul>
      </li>



   </ul>

   <!-- /#menu -->
</div>
