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
    <link rel="shortcut icon" href="<?php echo base_url('uploads/header/detik2.png')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
    <title>Admin Detik Karir</title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <?php include 'navigasi_home.php'; ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Applicants</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="<?php base_url('admin_home/applicants'); ?>">Applicants</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-20">
          <br>
          <div class="col-md-4 hm-zoom"> <!--mulai 1 -->
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('app/applicant')?>"><div class="widget-small primary" style="background-color: #b165d4"><i class="btn icon fa fa-users fa-3x"></i>
              <div class="info">
                <h4>Applicants</h4>
                <p> <b><?php echo $jumlah;?></b></p>
              </div>
            </div> </a> </div>
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('app/unprocess')?>"><div class="widget-small danger" style="background-color: #ee4035;"><i class="btn icon fa fa-th-list fa-3x"></i>
              <div class="info">
                <h4>Unprocess</h4>
                <p> <b><?php echo $unprocess;?></b></p>
              </div>
            </div></a> </div>
            <a href="<?php echo base_url('app/shortlist')?>"><div class="widget-small info" style="background-color: #5fb6b8;"><i class="btn icon fa fa-bookmark fa-3x"></i>
              <div class="info">
                <h4>Shortlist</h4>
                <p> <b><?php echo $shortlist;?></b></p>
              </div>
            </div></a>
            </div> <!--stop-->
            <div style="height: 150px;" class="col-md-4" > <!--mulai 2 -->
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('app/accepted')?>"><div class="widget-small info" style="background-color: #49ab81;"><i class="btn icon fa fa-check fa-3x"></i>
              <div class="info">
                <h4>Accepted</h4>
                <p> <b><?php echo $accepted;?></b></p>
              </div>
            </div> </a> </div>
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('app/interviewuser')?>"><div class="widget-small danger" style="background-color: #ecb939;"><i class="btn icon fa fa-user fa-3x"></i>
              <div class="info">
                <h4>Interview User</h4>
                <p> <b><?php echo $interviewuser;?></b></p>
              </div>
            </div></a> </div>
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('app/psikotest')?>"><div class="widget-small info" style="background-color: #e8702a"><i class="btn icon fa fa-files-o fa-3x"></i>
              <div class="info">
                <h4>Psikotest</h4>
                <p> <b><?php echo $psikotest;?></b></p>
              </div>
            </div></a> </div>
            </div> <!--stop-->
            <div class="col-md-4"> <!-- mulai 3 -->
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('app/blacklist')?>"><div class="widget-small warning" style="background-color: #403E3D;"><i class="btn icon fa fa-times fa-3x"></i>
             <div class="info">
                <h4>Blacklist</h4>
                <p> <b><?php echo $blacklist;?></b></p>
              </div>
            </div></a> </div>
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('app/interviewhrd')?>"><div class="widget-small primary" style="background-color: #8ae429;"><i class="btn icon fa fa-star fa-3x"></i>
              <div class="info">
                <h4>Interview HRD</h4>
                <p><b><?php echo $interviewhrd;?></b></p>
            </div>
          </div></a> </div>
          <div style="padding-bottom: 3%;">
          <a href="<?php echo base_url('app/skilltest')?>"><div class="widget-small danger" style="background-color: #b37853;"><i class="btn icon fa fa-pencil-square-o fa-3x"></i>
            <div class="info">
              <h4>Skill Test</h4>
              <p><b><?php echo $skilltest;?></b></p>
            </div>
          </div>
        </div></a></div>
        </div>

    <!-- Javascripts-->
    <script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/js/essential-plugins.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/pace.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/chart.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.vmap.sampledata.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	var data = {
      		labels: ["January", "February", "March", "April", "May", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
      		datasets: [
      			{
      				label: "Data",
      				fillColor: "rgba(220,220,220,0.2)",
      				strokeColor: "rgba(220,220,220,1)",
      				pointColor: "rgba(220,220,220,1)",
      				pointStrokeColor: "#fff",
      				pointHighlightFill: "#fff",
      				pointHighlightStroke: "rgba(220,220,220,1)",
      				data: [65, 59, 80, 81, 56, 90, 78, 12]
      			}//,
      			// {
      			// 	label: "My Second dataset",
      			// 	fillColor: "rgba(151,187,205,0.2)",
      			// 	strokeColor: "rgba(151,187,205,1)",
      			// 	pointColor: "rgba(151,187,205,1)",
      			// 	pointStrokeColor: "#fff",
      			// 	pointHighlightFill: "#fff",
      			// 	pointHighlightStroke: "rgba(151,187,205,1)",
      			// 	data: [28, 48, 40, 19, 86, 12, 80, 95]
      			// }
      		]
      	};
      	var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      	var lineChart = new Chart(ctxl).Line(data);

      });
    </script>
  </body>
</html>
<?php } ?>
