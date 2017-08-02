<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-page">

 
    <!-- <script type="text/javascript">
     $('ul.nav li.dropdown').hover(function() {
     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
     }, function() {
     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
     });
     </script>

 -->

    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>Menu
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
              <img class="main-logo" href="<?=base_url()?>" src="<?=base_url()?>assets/img/logotulisan.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right navbar-black">
                <li>
                    <a class="page-scroll" href="<?php echo base_url('home/homepage_profil')?>"><b> Home</b></a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('home/gallery_profil')?>" id="nav-gallery"><b>Gallery</b></a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('job/karir_profil')?>" id="nav-list"><b>List Job</b></a>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" role="button"><img class="logo-profil" src="<?=base_url()?>assets/img/profil.png"></a>
                <ul class="dropdown-menu">
                    
                  <li> <a href="<?php echo base_url("loginuser/logout")?>">
                    <span>Keluar</span></a></li>
                </ul>
              </li>
            </ul> 
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
