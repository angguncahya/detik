<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detik Karir</title>

 
    <!-- Vendor -->

  
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet">


    <!-- Theme CSS -->


    <link href="<?php echo base_url('assets/css/creative.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/page2_jobdes.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/joblist.css')?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max1200.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max993.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max767.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max768.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max600.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max480.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max414.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/min768.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/min601.css')?>">



</head>

<body id="page-top">
  <?php include 'navigation_page.php' ?>

<div id="jobdes">

<!--Header-->

<div class="container-fluid">
    <div class="row">
        <div class="row w3-container w3-padding parallax">
            <div class="quote">
                
                <?php
                  foreach ($job->result() as $job):
                ?>
                <img style="margin-left: 16px;" class="img-responsive img-quote " src="<?php echo base_url('assets/img/line.png')?>"/>
                  <div class="col-lg-6">

                    <h1><?php print_r($job->job_name); //echo $job->job_name ?></h1>
                    <p class="tagline"><?php echo $job->job_desc; ?></p>

                  </div>

                  <?php
                    endforeach;
                  ?>
            </div> <!-- quote -->

        </div>
    </div>

</div>


<div class="container">
  <div class="row text-back">
    <div class="col-lg-6 col-lg-push-1" style="margin-top: 7px;">
      <a href="<?php echo base_url('job/karir')?>"><i class="fa fa-chevron-left backarr" aria-hidden="true"></i><span class="backto"> Back to previous page</span></a>
    </div>
      <div class="col-lg-6 col-lg-pull-1 form-group no-margin">
      </div>
  </div>
</div>

<hr class="no-margin">


<!--Job Description-->


<?php
  foreach ($get_jobdetail->result() as $jobdetail):
?>

<section class="small-padding">
  <div class="container">
    <div class="row bg-border">
      <div class="col-sm-2 col-sm-offset-1">
        <img class="img-jobdes" src="<?php echo base_url('assets/img/icon-jobdes.png')?>" alt="">
      </div>

      <div class="col-sm-8 col-sm-offset-0 col-xs-12 des">
        <h2 >Job Description</h2>
        <!-- <hr class="title-line"> -->
        <p class="space white no-margin"><?php echo $jobdetail->jobdetail_desc; ?></p>
      </div>

    </div>
  </div>
</section>


<section class="point">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-lg-offset-1 text-justified">
            <h2 class="text-center">Qualification</h2>
            <hr class="faded-line">
            <ul class="space">
              <?php echo $jobdetail->jobdetail_persyaratan; ?>
            </ul>
          </div>
          <div class="col-lg-5 text-justified">
            <h2 class="text-center">Duties & Responsibilities</h2>
            <hr class="faded-line">
            <ul class="space">
              <?php echo $jobdetail->jobdetail_tugas; ?>
            </ul>
          </div>
        </div>
      </div><!--container-->


<!-- Apply section -->

      <div class="container">
        <?php $data_masuk = $this->input->get('id'); ?>
        <div class="row text-center" style="margin-top:40px;">
          <a class="apply-botton" data-toggle="modal" data-target="#myModal">APPLY NOW</a>
        </div>
      </div>
</section>


</div>
      
      </div>
      
    </div>
  </div>

<?php
  endforeach;
?>

  <?php include 'footer.php' ?>
  <?php include 'jQuery.php' ?>

</body>

</html>
