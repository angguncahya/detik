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
        <div class="row user">
          <div class="col-md-12">
            <div class="tab-content">
              <div id="user-settings" class="tab-pane active">
                <div class="card user-settings">
                  <h4 class="line-head">Settings Admin</h4>
                  <form method="post" action="<?php echo base_url("admin/update")?>">
                    <div class="row">
                      <div class="col-md-4 mb-20">
                        <label>Email</label>
                        <input type="text" class="form-control" value="<?php echo $email?>" disabled="true">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-4 mb-20">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-4 mb-20">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password">
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="row mb-10">
                      <div class="col-md-8">
                      <a href='<?php echo base_url(""); ?>' class="btn btn-primary">Cancel</a>
                        <button type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php } ?>