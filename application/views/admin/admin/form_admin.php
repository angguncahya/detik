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
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
        <?php include 'navigasi.php';?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add Admin</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                  <div class="well bs-component">
                    <?php echo form_open_multipart('admin/tambahadmin');?>
                      <fieldset>
                        <legend style="padding-left: 2%;">Add Admin</legend>
                        <div class="form-group" style="padding-left: 2%;">
                          <div >
                        <div >
                        <table class="col-lg-10">
                            <tr>
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Username Admin</label></td>
                            <td class="col-lg-10"><input  type="text" name= username_hrd placeholder="Username Admin" class="form-control" required="true" ></td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>

                            <tr>
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Email Admin</label></td>
                            <td class="col-lg-10"><input type="email" name= email_hrd placeholder="email@gmail.com" class="form-control" required="true" ></td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>

                            <tr>
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Password</label></td>
                            <td class="col-lg-10"><input type="password" name=password placeholder="" class="form-control" required="true" ></td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>
                       </table>
                        </div>
                        <div class="form-group col-lg-12" style="padding-left: 25%;">
                          <div class="col-lg-10 col-lg-offset-2">
                            <a href='<?php echo base_url('admin/list'); ?>' class="btn btn-default" title="Cancel">Cancel</a>
                            <button type="submit" class="btn btn-primary" title="Submit">Submit</button>
                          </div>
                        </div>
                      </fieldset>

                   
                      <!-- <fieldset>
                        <legend>Add Admin</legend>
                        <div class="form-group">
                          <div class="col-lg-10">
                        <div class="form-group">
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Username Admin</label>
                            <input type="text" name= username_hrd placeholder="Username Admin" class="form-control" required="true">
                          </div>
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Email Admin</label>
                            <input type="email" name= email_hrd placeholder="email@gmail.com" class="form-control" required="true">
                          </div>
                          <div class="col-lg-10">
                            <label for="inputEmail" class="control-label">Password</label>
                            <input type="password" name=password placeholder="" class="form-control" required="true">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <a href='<?php //echo base_url("") ?>' class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </fieldset> -->
                    </form>
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