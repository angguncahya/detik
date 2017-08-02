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
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="<?php base_url(); ?>">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <!-- <div class="row mt-25"> -->
          <br>
          <br>
          <div >
          <div class="col-md-6" > <!--mulai 1 -->
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('admin_home/applicants')?>"><div class="widget-small" style="background-color: #b165d4; height: 120px;"><i class="btn icon fa fa-users fa-4x" style="width: 120px;"></i>
              <div class="info">
                
                <h4>APPLICANTS</h4>
                <h4> <b>TOTAL :   <?php echo $app;?></b></h4>
              </div>
            </div> </a> </div>
            </div> <!--stop-->
            

            <div class="col-md-6" > <!--mulai 2 -->
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('admin_home/job')?>"><div class="widget-small " style="background-color: #49ab81; height: 120px;"><i class="btn icon fa fa-suitcase fa-4x" style="width: 120px;"></i>
              <div class="info">
                <h4>JOB ADVERTISEMENTS</h4>
                <h4><b>TOTAL :   <?php echo $job;?></b></h4>
              </div>
            </div> </a> </div>
            
            </div> <!--stop-->
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
