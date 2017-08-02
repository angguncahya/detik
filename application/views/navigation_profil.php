<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
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
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#page-top"><b>Home</b></a>
                </li>
                <li>
                    <a class="page-scroll" href="#lifedetik"><b>Life@Detik</b></a>
                </li>
                <li>
                    <a class="page-scroll" href="#gallery"><b>Gallery</b></a>
                </li>
                <li>
                    <a class="page-scroll" href="#value"><b>Value</b></a>
                </li>
                <li>
                    <a class="page-scroll" href="#karir"><b>Job</b></a>
                </li>

                <li class="dropdown"><a href="#" data-toggle="dropdown" role="button"><img class="logo-profil" src="<?=base_url()?>assets/img/profil.png"></a>
                <ul class="dropdown-menu ">
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
