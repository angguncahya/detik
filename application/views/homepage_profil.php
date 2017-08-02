<!DOCTYPE html>
<?php  $email = $this->session->userdata("nama");
        if( empty($email)){
          redirect('');
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
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>"" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet">


    <!-- Theme CSS -->
    <link href="<?php echo base_url('assets/css/creative.css')?>" rel="stylesheet">
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

<!-- NAVIGASI -->

    <?php include 'navigation_profil.php' ?>

<!-- HEADER -->
    <header>
      <div class="container-fluid">
        <div class="row">

          <?php
            foreach ($get_video2->result() as $video2):
          ?>
          <video autoplay muted loop class="vide">
              <source src="<?php echo base_url('uploads/videos/'.$video2->video_file); ?>" type="video/mp4"/>
          </video>
          <img class="shadow" src="<?php echo base_url('assets/img/shadow.png')?>" alt="">
          <?php
            endforeach;
          ?>
        </div>
      </div>
      <div class="header-content">
          <div class="header-content-inner">
              <h2 id="homeHeading">Why detikcom?</h2>
              <hr class="hr-1">
              <p class="text-center">Working at detikcom means doing what you love. You’ll be challenged<span class="texto"> and </span><span class="texty">. You’ll be inspired. And you’ll be proud. Because whatever your job is here,</span> you’ll be part of something <b>BIG</b>.</p>
              <div class="container-arrow">
              <h5>Check Out More</h5>
              <a class="page-scroll" href="#lifedetik"><img class="arrow" src="<?php echo base_url('assets/img/arrow.png')?>" alt=""></a>
            </div>
          </div>
      </div>
    </header>


<!-- SECTION LIFE@DETIK -->
    <section id="lifedetik" class="bg-primary no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center bg-title">
                    <h1 class="section-heading"><b>Life@Detik</b></h1>
                    <p>Get to know who we are. INSIDE OUT</p>
                </div>
                <div class="col-lg-12 text-center sr-icons">
                    <div class="wrapper">
                      <?php
                        foreach ($get_video->result() as $video):
                      ?>
                      <video class="video" src="<?php echo base_url('uploads/videos/'.$video->video_file); ?>"></video>
                      <div class="shade"></div>
                      <div class="playpause"></div>
                     
                    </div>
                     <?php
                        endforeach;
                      ?>
                </div>
            </div>
        </div>
    </section>
     
<!-- GALLERY -->
    <section class="no-padding" id="gallery">
        <div class="container-fluid background-gallery shading">
          <div class="col-lg-12 title">
            <ul>
              <li class="col-md-2 col-sm-12 text-center">
              <h2 class="white section-title"><b>Gallery</b></h2>
              </li>
              <li class="col-md-9 col-sm-12"><p class="white section-subtitle">“To make it fast one might be done thyself, but to make it even far one must be done together”</p></li>
              <a href="<?php echo base_url('home/gallery_profil')?>"><li class="col-md-1 section-float-right"><img class="section-icon" src="<?php echo base_url('assets/img/icon-gallery.png')?>" alt=""></li></a>
            </ul>
          </div>
          <div class="col-lg-10 col-lg-offset-1" style="clear:both;">
            <div class="row no-gutter popup-gallery">
                <?php
                  foreach ($get_gallery->result() as $gallery):    
                ?> 

                      <div class="col-lg-4 col-sm-4 col-xs-6">
                          <a href="<?php echo base_url('uploads/images/'.$gallery->gallery_file); ?>" class="portfolio-box">
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
    </section>

<!-- VALUES -->
    <section id="value" class="special-padding bg-primary">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 title">
              <ul>
                <li class="col-md-2 col-sm-12 text-center"><h2 class="section-title"><b>Detikvalues</b></h2></li>
                <li class="col-md-9 col-sm-12"><p class="section-subtitle">Our Values at Work on being a detikcom employees. Some companies manage by rules. Some by hierarchies.detikcom manages by its values. In the end, detikcom determined that our actions will be driven by these values:</p></li>
                <li class="list-title section-float-right"><img class=" col-md-1 section-icon" src="<?php echo base_url('assets/img/icon-value.png')?>" alt=""></li>
              </ul>
            </div>
            <hr class="hr-2">
          </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-1 col-md-6 col-sm-6 col-xs-6 no-padding text-center">
                    <div class="service-box sr-contact">
                        <img class="icon-value" src="<?php echo base_url('assets/img/Asset 1.png')?>" alt="">
                        <h4>Fast & Accurate</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 no-padding text-center">
                    <div class="service-box separator sr-contact">
                        <img class="icon-value" src="<?php echo base_url('assets/img/Asset 2.png')?>" alt="">
                        <h4>Integrity</h4>
                        <hr class="vertical">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 no-padding text-center">
                    <div class="service-box separator sr-contact">
                        <img class="icon-value" src="<?php echo base_url('assets/img/Asset 3.png')?>" alt="">
                        <h4>Teamwork</h4>
                        <hr class="vertical">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 no-padding text-center">
                    <div class="service-box separator sr-contact">
                        <img class="icon-value" src="<?php echo base_url('assets/img/Asset 5.png')?>" alt="">
                        <h4>Independent</h4>
                        <hr class="vertical">
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 no-padding text-center">
                    <div class="service-box separator sr-contact">
                        <img class="icon-value" src="<?php echo base_url('assets/img/Asset 4.png')?>" alt="">
                        <h4>Creative & Innovative</h4>
                        <hr class="vertical">
                    </div>
                </div>
            </div>
        </div> 
    </section> 

<!-- JOB VACANCY -->
    <section id="karir" class="no-padding">
        <div class="container-fluid background-karir">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1 title">
                <ul>
                  <li class="col-md-2 col-sm-12 text-center"><h2 class="section-title white"><b>DetikKarir</b></h2></li>
                  <li class="col-md-9 col-sm-12"><p class="section-subtitle white">Nam eget nunc sit amet nunc varius iaculis in ac tellus. Nunc dictum ex vel turpis ullamcorper.</p></li>
                  <li class="col-md-1 list-title section-float-right"><img class="section-icon" src="<?php echo base_url('assets/img/icon-karir.png')?>" alt=""></li>
                </ul>
              </div>
            </div>
            <div class="row extra-small-padding">
              <div class="col-lg-10 col-lg-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-6 sr-icons">
                  <div class="service-karir">
                    <a href="<?php echo base_url('job/karir_profil')?>"><img class="img-karir" src="<?php echo base_url('assets/img/job-vacancy.png')?>" alt=""></a>
                    <a href="<?php echo base_url('job/karir_profil')?>"><h2 class="control-h">Job Vacancy</h2></a>
                    <hr class="hr-3">
                    <p class="control-p">Nam eget nunc sit amet nunc varius iaculis in ac tellus</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 sr-icons">
                  <div class="service-karir">
                  <a href="<?php echo base_url('job/karir_profil')?>">
                    <img class="img-karir" src="<?php echo base_url('assets/img/internship.png')?>" alt=""></a>
                    <a href="<?php echo base_url('job/karir_profil')?>">
                    <h2 class="control-h">Internship</h2></a>
                    <hr class="hr-3">
                    <p class="control-p">Nam eget nunc sit amet nunc varius iaculis in ac tellus</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php' ?>

    <?php include 'jQuery.php' ?>

</body>

</html>
<?php } ?>