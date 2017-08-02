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

<body id="gallery">
    <?php include 'navigation_page.php' ?>

    <!-- Photo grid -->

 <div id="page-top"class="container-fluid bg-gallery shading">
   <div class="row text-center" style="padding-bottom:40px;">
     <h1 style="color:#fff;">Gallery Detik Karir</h1>
     <p style="color:#fff">Together, we deliver news for everyone, smalll thing will be very important.<br> Be part of us, be part of something <b>BIG</b></p>
     <hr style="max-width:100px;height:3px;border:none;background-color:#fff;">
   </div>
<div class="col-lg-10 col-lg-offset-1">
    <div class="row no-gutter popup-gallery">
    <?php
        foreach ($get_gallery->result() as $gallery):
    ?> 
      <div class="col-lg-4">
        <a href="<?php echo base_url('uploads/images/'.$gallery->gallery_file); ?>" class="portfolio-box ">
        <img src="<?php echo base_url('uploads/images/'.$gallery->gallery_file); ?>" class="img-responsive dom" alt="">
            <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                        <?php echo $gallery->gallery_name; ?>
                    </div>
                    <div class="project-name">
                        <?php echo $gallery->gallery_desc; ?>
                    </div>
                </div>
            </div>
        </a>
      </div>
      <?php
        endforeach;
      ?>
    </div>
  </div>
</div>
<!-- </div> -->
<!-- Pagination -->
  <div class="text-center pagination-padding">
    <ul class="pagination">
      <li><a class="black" href="#">1</a></li>
      <li><a class="hover-black" href="#">2</a></li>
      <li><a class="hover-black" href="#">3</a></li>
      <li><a class="hover-black" href="#">4</a></li>
      <li><a class="hover-black" href="#">»</a></li>
    </ul>
  </div>

    <?php include 'footer.php' ?>
    <?php include 'jQuery.php' ?>
</body>
</html>
