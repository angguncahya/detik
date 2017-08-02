<!DOCTYPE html>
<?php $email = $this->session->userdata("email_hrd");
        if( empty($email)){
          redirect("login");
        }else{ ?>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="shortcut icon" href="<?php echo base_url('uploads/header/detik2.png')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
    <title>Admin Detik Karir</title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
        <?php include 'navigasi.php';?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add Template</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" id="emailform" method="post" action="<?php echo base_url("email/tambahemail") ?>">
                   
                        <?php
                          $i = $jumlah+1;
                         ?>
                      <fieldset>
                        <legend>Add Template</legend>
                        <div class="form-group">
                          <div class="col-lg-10">
                        <div class="form-group">
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">ID Template</label>
                            <input type="text" name= id_template
                             value="<?php echo "TMP_0".$i ?>" class="form-control" required="true" style="display:none">
                             <input type="text" name= id_template
                             value="<?php echo "TMP_0".$i ?>" class="form-control" required="true" disabled>
                          </div>
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Nama Template</label>
                            <input type="text" name= nm_template placeholder="Nama Template" class="form-control" required="true">
                          </div>
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Subjek</label>
                            <input type="text" name= subjek placeholder="Subjek Template" class="form-control" required="true">
                          </div>
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Konten</label>
                            <textarea name=konten rows="4" cols="50" name="comment" form="emailform" required="true" class="form-control" placeholder="Isi konten"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <a href='<?php echo base_url("email/tabelemail") ?>' class="btn btn-default">Cancel</a>
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