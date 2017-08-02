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
            <h1><i class="fa fa-dashboard"></i> Job</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="<?php base_url('admin_home/job'); ?>">Job</a></li>
            </ul>
          </div>
        </div>
        <!-- <div class="row mt-25"> -->
          <br>            

            <?php //print_r($jumlah); die;
            foreach( $jumlah as $a) {
              $data = $this->db->query('select * from apply where job_id = '.$a->job_id)->num_rows();
              // print_r($data); die;
            ?>
            <div class="col-md-4" > <!--mulai 2 -->
            <div style="padding-bottom: 3%;">
            <a href="<?php echo base_url('adv/subkategori')?>"><div class="widget-small info" style=" background-color: #2196F3;"><i class="btn icon fa fa-suitcase fa-3x"></i>
              <div class="info">
                <h4><?php echo $a->job_name; ?> </h4>
                <p> <?php echo ($a->id_tipe == 1) ? "Job Vacancy" : "Intership";  ?></p>
                <p> <?php echo $data; ?></p>
              </div>
            </div> </a> </div>
            
            </div> <!--stop-->
            <?php
                    };
                ?>
            

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
