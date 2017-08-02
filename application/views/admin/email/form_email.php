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
            <h1><i class="fa fa-edit"></i> Edit Kategori</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" action="<?php echo base_url("adv/updatekategori/$kategori->id_tipe") ?>">
                      <fieldset>
                        <legend>Kategori</legend>
                        <div class="form-group">
                          <div class="col-lg-10">
                        <div class="form-group">
                          <label for="inputEmail" class="col-lg-2 control-label">Nama Kategori</label>
                          <div class="col-lg-10">
                            <input type="text" name="nama_tipe" value="<?php echo $kategori->nama_tipe; ?>" class="form-control" required="true">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <a href='<?php echo base_url("adv/kategori") ?>' class="btn btn-default">Cancel</a>
                            <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
                            <button type="submit" class="btn btn-primary">Save</button>
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