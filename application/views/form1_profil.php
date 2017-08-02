
<!DOCTYPE html>
<?php  $email = $this->session->userdata("nama");
        if( empty($email)){
          redirect('loginuser/login');
        }else{ ?>
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
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet">


    <!-- Theme CSS -->

    <link href="<?php echo base_url('assets/css/form.css')?>" rel="stylesheet">
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
     <?php include 'navigation_page_profil.php' ?>

<div id="applyjob">

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

    <!-- FORM -->
    <section class="sr-icons" id="apply">
        <div class="container text-left well">
        <div class="col-lg-3"></div>
        <?php echo form_open_multipart('user/formuser1');?>
        	<!-- <form method="post" action="<?php //echo base_url('apply/notif_form1')?>"> -->
            <div class="col-lg-6">
                <h3 class="text-center">APPLY FOR THIS POSITION</h3>
                <hr class="title-line">
                <br>
                <div class="form-group">
                    <label for="first">Full Name *</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="firstname" placeholder="Full Name" required="true">
                </div>
                <div class="form-group">
                    <label for="last">Handphone *</label>
                    <input type="text" class="form-control" name="handphone" id="lastname" placeholder="handphone" required="true">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Curriculum Vitae in PDF, DOC, DOCX only with maximum 5MB files *</label>
                    <input type="file" name="adminfile" id="inputfile" required="true">
                </div>
                <!-- <div class="form-group">
                    <label for="phone">Email *</label>
                    <input type="text" class="form-control" name="linkedin" id="phone" placeholder="email" required="true">
                </div> -->
                
                <div class="row text-center">
                <button type="submit" class="btn btn-default">Submit</button>
                <!-- <button type="submit" class="btn btn-default"><a href="progress">Submit</a></button> -->
                </div>
                </div>
                <div class="col-lg-3"></div>
            </form>
        </div>
    </section>

    <?php include 'footer.php' ?>

    <?php include 'jQuery.php' ?>

</body>

    <!-- JAVASCRIPT -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/progress-bar.js')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>">
</html>
<?php } ?>
