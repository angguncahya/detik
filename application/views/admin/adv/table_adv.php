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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <?php include 'navigasi.php';?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Advertisement</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="<?php echo base_url('adv/advertisement') ?>">Data Advertisement</a></li>
            </ul>
          </div>
          <div><a class="btn btn-info" title="Tambah Advertisement" href="<?php echo base_url('adv/form_adv') ?>" > <i class="fa fa-plus" aria-hidden="true"></i> Advertisement</a></div>
        </div>
        <?php if ($this->session->flashdata('pesan')!= null){ ?>
                <?php
                    echo $this->session->flashdata('pesan');
                    $this->session->set_flashdata('pesan',null);
                  ?>
            <?php }?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Nama Advertisement</th>
                      <th>Kategori</th>
                      <th>SubKategori</th>
                      <!-- <th>Deskripsi</th> -->
                      <th>Status</th>
                      <!-- <th>Persyaratan</th> -->
                      <!-- <th>tugas</th> -->
                      <th>Tampil</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <form method="get" >
                    <?php
                    $no = 1;
                        foreach($advertisement as $a){
                    ?>
                    <tr>
                      <td><?php echo $a->jobdetail_name; ?></td>
                      <td><?php echo $a->nama_tipe; ?></td>
                      <td><?php echo $a->job_name; ?></td>
                      <!-- <td><?php //echo $a->jobdetail_desc; ?></td> -->

                      <td><?php echo ($a->jobdetail_status >= $time) ? $a->jobdetail_status : "Expired"; ?></td>

                      <!-- <td><?php //echo $a->jobdetail_persyaratan; ?></td> -->
                      <!-- <td><?php //echo $a->jobdetail_tugas; ?></td> -->

                      <td><?php echo ($a->jobdetail_is_pagejobdetail == "Y") ? "Tampil" : "Tidak Tampil"; ?></td>
                      
                      <td>
                        <button  class="btn btn-info" type="button" title="Edit Advertisement"><a style="color: #fff; text-align: left;" href="<?php echo base_url("adv/editadvertisement/$a->jobdetail_id") ?>" title="edit"><i class="fa fa-pencil" aria-hidden="true" ></i> Edit </a>                              
                            </button>
                            <button  class="btn btn-danger" type="button" title="Hapus Advertisement"><a style="color: #fff; text-align: left;" href="<?php echo base_url("adv/hapusadvertisement/$a->jobdetail_id")?>" title="hapus"><i class="fa fa-trash" aria-hidden="true"></i> Hapus </a>                              
                            </button>

                        <!-- <div><a class="btn btn-info" href="<?php //echo base_url("adv/editadvertisement/$a->jobdetail_id")?>" title="edit"><i class="fa fa-th-list" aria-hidden="true"></i></a><a class="btn btn-default" href="<?php //echo base_url("adv/hapusadvertisement/$a->jobdetail_id") ?>" title="hapus"><i class="fa fa-th-list" aria-hidden="true"></i></a></div> -->
                        </form>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/js/essential-plugins.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/pace.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript"> 
          $(document).ready( function() {
          $('#id').delay(3000).fadeOut();
           });
        </script>
  </body>
</html>
<?php } ?>