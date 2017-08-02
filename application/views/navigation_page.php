
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-page">
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
                    <a class="page-scroll" href="<?php echo base_url()?>"><b> Home</b></a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('home/gallery')?>" id="nav-gallery"><b>Gallery</b></a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('job/karir')?>" id="nav-list"><b>List Job</b></a>
                </li>
                <li>
                    <a class="page-scroll" data-toggle="modal" data-target="#myModal"><b>Login  </b></a>
                </li>
                <li>
                    <a class="page-scroll" data-toggle="modal" data-target="#myModal2"><b>register</b></a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<div class="modal fade" id="myModal">
    <div class="modal-dialog " style="width: 400px; padding: auto;">
    
      <!-- Modal content-->
      <div class="modal-content">

        <?php $this->load->view('login'); ?>
      
      </div>
      
    </div>
  </div>

<div class="modal fade" id="myModal2">
    <div class="modal-dialog " style="width: 400px; padding: auto;">
    
      <!-- Modal content-->
      <div class="modal-content">

        <?php $this->load->view('register'); ?>
      
      </div>
      
    </div>
  </div>
