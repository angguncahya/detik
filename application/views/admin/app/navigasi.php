<!DOCTYPE html>

<?php $email = $this->session->userdata("email_hrd");
        if( empty($email)){
          redirect("login");
        }else{ ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
    <title>Admin Detik Karir</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a href="<?php echo base_url('admin_home')?>" style="font-family: 'Lato';" class="logo">Detik Karir</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
                  <li><a href="<?php echo base_url('admin/page_admin')?>"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="<?php echo base_url('login/logout')?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img src="<?=base_url('uploads\foto\profil.jpg')?>" alt="User Image" class="img-circle"></div>
            <div class="pull-right info">
              <!-- <p>John Doe</p> -->
              <p class="designation"><br><?php echo $email?></p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li><a href="<?php echo base_url('admin_home')?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

            <li class="treeview"><a><i class="fa fa-edit"></i><span>Job Advertisement</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('adv/advertisement')?>"> <i class="fa fa-circle-o"></i> Advertisement</a></li>
                <li><a href="<?php echo base_url('adv/kategori')?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
                <li><a href="<?php echo base_url('adv/subkategori')?>"><i class="fa fa-circle-o"></i> Sub Kategori</a></li>

              </ul>
            </li>
            <?php 
                $this->load->helper('url');
                $data = $this->uri->segment(2);
            ?>
            <li class="treeview active"><a><i class="fa fa-th-list"></i><span>Applicants</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu "> 
                <li><a href="<?php echo base_url('app/applicant')?>"><i  <?php echo ($data == "applicant") ? 'class="fa fa-circle"' : 'class="fa fa-circle-o"' ?> ></i> Applicants</a></li>

                <li><a href="<?php echo base_url('app/unprocess')?>"><i  <?php echo ($data == "unprocess") ? 'class="fa fa-circle"' : 'class="fa fa-circle-o"' ?> ></i> Unprocess</a></li>

                <li><a href="<?php echo base_url('app/shortlist')?>"><i  <?php echo ($data == "shortlist") ? 'class="fa fa-circle"' : 'class="fa fa-circle-o"' ?> ></i> Shortlist</a></li>

                <li><a href="<?php echo base_url('app/interviewuser')?>"><i  <?php echo ($data == "interviewuser") ? 'class="fa fa-circle"' : 'class="fa fa-circle-o"' ?> ></i> Interview User</a></li>

                <li><a href="<?php echo base_url('app/psikotest')?>"><i  <?php echo ($data == "psikotest") ? 'class="fa fa-circle"' : 'class="fa fa-circle-o"' ?> ></i> Psikotest</a></li>

                <li><a href="<?php echo base_url('app/interviewhrd')?>"><i  <?php echo ($data == "interviewhrd") ? 'class="fa fa-circle"' : 'class="fa fa-circle-o"' ?> ></i> Interview HRD</a></li>

                <li><a href="<?php echo base_url('app/skilltest')?>"><i  <?php echo ($data == "skilltest") ? 'class="fa fa-circle"' : 'class="fa fa-circle-o"' ?> ></i> Skill test</a></li>

                <li><a href="<?php echo base_url('app/accepted')?>"><i  <?php echo ($data == "accepted") ? 'class="fa fa-circle"' : 'class="fa fa-circle-o"' ?> ></i> Accepted</a></li>

                <li><a href="<?php echo base_url('app/blacklist')?>"><i  <?php echo ($data == "blacklist") ? 'class="fa fa-circle"' : 'class="fa fa-circle-o"' ?> ></i> Blacklist</a></li>
                <!-- <li><a href="<?php// echo base_url('app/applicant')?>"><i class="fa fa-circle-o"></i> Applicant</a></li> -->
              </ul>
            </li>
                        
              <li><a href="<?php echo base_url("email/tabelemail")?>"><i class="fa fa-envelope" aria-hidden="true"></i><span>Template</span></a></li>
            
            <li><a href="<?php echo base_url("admin/list")?>"><i class="fa fa-user" aria-hidden="true"></i><span>HR Manager</span></a></li>

          </ul>
        </section>
        </aside>
      </body>
      </html>
      <?php } ?>
