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
<body id="list">

    <?php include 'navigation_page_profil.php' ?>

<!--Header-->
<div id="page-top" class="container-fluid">
    <div class="row w3-container w3-padding parallax">
            <div class="quote">
                <?php
                    foreach ($get_header->result() as $header):
                ?>
                <img style="margin-left: 16px;" class="img-responsive img-quote " src="<?php echo base_url('assets/img/line.png')?>"/>

                <div class="col-lg-6">

                <h1><?php echo $header->header_name; ?></h1>
                <h5><?php echo $header->header_tagline; ?></h5>
                </div>

                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
    
</div>

<!--back kepage sebelumnya-->
    <div class="container">
      <div class="row text-back">
        <div class="col-lg-6 col-lg-push-1 col-md-6 col-sm-6 col-xs-6 migrasi">
            <a href="<?php echo base_url("home/homepage_profil")?>"><i class="fa fa-chevron-left backarr" aria-hidden="true"></i><span class="backto"> Back to previous page</span></a>
        </div>
        <div class="col-lg-6 col-lg-pull-1 col-md-6 col-sm-6 col-xs-6 form-group no-margin">
            <div class="input-group search search-for">
                <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Find Name Job" title="Type in a name">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-search"></span>
                </span>
            </div>
        </div>
      </div>
    </div>
    <hr class="no-margin">

<!--Job List -->
    <section class="small-padding">
        <div class="container">
            <div class="content">
            <ul id="myUL" style="text-decoration: none;">
                <?php
                    foreach ($get_job->result() as $job):
                ?>
                <li style='list-style-type: none;'>
                <div class="row content-list">    
                    <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4 col-xs-12 "> 
                      <div class="image-container">
                        <img class="img-responsive image" src="<?php echo base_url('uploads/jobimage/'.$job->job_file); ?>">
                        <div class="image-caption">
                            <div class="image-caption-content">
                                <div class="title-faded text-center">
                                    <?php echo $job->job_name; ?><br>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                        <h2> <?php echo $job->job_name; ?></h2>
                        <p> <?php echo $job->job_desc; ?></p>

                        <a class="botton" href="<?php echo base_url('job/jobdes_profil/'.$job->jobslug); ?>"> Find Out More <i class="fa fa-caret-right"></i></a>
                    </div>
                    
                </div> <!-- row -->
                </li>
                <?php
                    endforeach;
                ?>
                <hr style="max-width:950px;">
                </ul>

            </div> <!-- content -->
        </div> <!-- container -->
    </section>

    <?php include 'footer.php' ?>
    <?php include 'jQuery.php' ?>

    <script type="text/javascript">
        $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
        );
    </script>
</body>
</html>
