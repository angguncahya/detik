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
            <h1><i class="fa fa-edit"></i> Add Advertisemnet</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" action="<?php echo base_url('adv/tambahadvertisement'); ?>">
                      <fieldset>
                        <legend>Add Avertisements</legend>
                        <div class="form-group">
                          <div class="col-lg-10">

                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Nama Detail Job</label>
                            <input id="inputEmail" type="text" name="jobdetail_name" placeholder="Nama Detail Job" class="form-control" required="true">
                          </div>

                        <div class="col-lg-10">
                          <label for="inputEmail" class="control-label">Tipe Detail Job</label>
                          <select class="form-control" id="sel1" name="nama_tipe" required="true">
                            <option value="">Tipe Detail job</option>
                            <?php foreach($kategori as $k){
                              echo "<option value='".$k->nama_tipe."'>".$k->nama_tipe."</option>"; }
                          echo "</select>"
                              ?>
                        </div>
                        <div class="col-lg-10">
                          <label for="inputEmail" class="control-label">Sub Kategori Detail Job</label>
                          <select class="form-control" id="sel1" name="job_name" required="true">
                            <option value="">Sub Kategori Detail Job</option>
                            <?php foreach($subkategori as $s){
                              echo "<option value='".$s->job_name."'>".$s->job_name."</option>"; }
                          echo "</select>"
                              ?>
                        </div>
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Deskripsi Detail Job</label>
                            <input id="inputEmail" type="text" name="jobdetail_desc" placeholder="Deskripsi Detail Job" class="form-control" required="true">
                          </div>
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Status Detail Job</label>
                            <input id="inputEmail" type="date" name="jobdetail_status" placeholder="Status Detail Job" class="form-control" required="true">
                          </div>
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Persyaratan Detail Job</label>
                            <input id="inputEmail" type="text" name="jobdetail_persyaratan" placeholder="Persyaratan Detail Job" class="form-control" required="true">
                          </div>
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Tugas Detail Job</label>
                            <input id="inputEmail" type="text" name="jobdetail_tugas" placeholder="Tugas Detail Job" class="form-control" required="true">
                          </div>
                        <div class="col-lg-10">
                          <label for="inputEmail" class="control-label">Tampil</label>
                          <select class="form-control" id="sel1" name="jobdetail_is_pagejobdetail" required="true">
                            <option value="">Tampil</option>
                              <option value='Y'>Tampil</option>";
                              <option value='N'>Tidak Tampil</option>";
                          </select>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <a href='<?php echo base_url('adv/advertisement'); ?>' class="btn btn-default">Cancel</a>
                            <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>

    <!-- Javascripts-->
   <!-- Javascripts-->
    <script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/js/essential-plugins.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/pace.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>
<?php } ?>