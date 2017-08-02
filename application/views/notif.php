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
    <?php include 'navigation_page.php' ?>

<div id="jobdes">

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
    
<!-- notification -->

<section class="sr-icons">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 text-justified notif">
             <p class="notification">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed est tempus, eleifend dolor sollicitudin, commodo orci. Quisque elit felis, mattis quis aliquam ac, ornare ultrices turpis. Maecenas mattis mauris id arcu ullamcorper mollis.</p>     
        </div>
        <div class="col-lg-3"></div>
    </div><!-- row -->

    <div class="row">
        <div class="row text-center">
        <button type="submit" class="btn btn-default"><a href="<?php echo base_url('apply/progress')?>">Continue</a></button>
        </div>   
    </div> <!-- row -->

</section>

    <?php include 'footer.php' ?>
    <?php include 'jQuery.php' ?>

</body>

</html>