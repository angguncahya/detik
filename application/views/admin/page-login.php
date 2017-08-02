<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="shortcut icon" href="<?php echo base_url('uploads/header/detik2.png')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/gaya.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title >Admin Detik Karir</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1 style="color: #000;">Login Detik Karir</h1>
      </div>
      <img style="width: 100%; height: 100%; position: fixed; " src="<?=base_url()?>assets/images/background.jpg" alt="gambar" class="bg" />
      <div class="login-box">
        <form action="<?php echo base_url('login/login_admin'); ?>" method="post" class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input type="text" name="email" placeholder="email@gmail.com" autofocus class="form-control">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input type="password" name="password" placeholder="Password" class="form-control" id=form-password >
            <div style="padding-bottom: 5px;"></div>
            <input type="checkbox" class="squaredFour" id=form-checkbox> Show password
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">SIGN IN <i class="fa fa-sign-in fa-lg"></i></button>
          </div>
          <div style="padding-bottom: 3px;"></div>
          <?php if($salah == 1){ ?>
            <div class="alert alert-danger">
              <strong> Masukkan Username dan Password !</strong>
            </div>
          <?php } ?>
          <?php if($salah == 2){ ?>
            <div class="alert alert-danger">
              <strong> Password Salah !</strong>
            </div>
          <?php } ?>
          <?php if($salah == 3){ ?>
            <div class="alert alert-danger">
              <strong> Password Harap dimasukkan !</strong>
            </div>
          <?php } ?>
          <?php if($salah == 4){ ?>
            <div class="alert alert-danger">
              <strong> Username Belum Terdaftar !</strong>
            </div>
          <?php } ?>
        </form>
      </div>
    </section>
  </body>
  <style type="text/css">
    .squaredFour {
  width: 20px;
  position: relative;
  margin: 20px auto;
  label {
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
    background: #fcfff4;
    background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    border-radius: 4px;
    box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
    &:after {
      content: '';
      width: 9px;
      height: 5px;
      position: absolute;
      top: 4px;
      left: 4px;
      border: 3px solid #333;
      border-top: none;
      border-right: none;
      background: transparent;
      opacity: 0;
      transform: rotate(-45deg);
    }
    &:hover::after {
      opacity: 0.5;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }
  }    
}

  </style>
  <script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
  <script src="<?=base_url()?>assets/js/essential-plugins.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/pace.min.js"></script>
  <script src="<?=base_url()?>assets/js/main.js"></script>
  <script>
      $(document).ready(function(){
              $("#myModal").modal();
      });
    </script>
    <script type="text/javascript">
  $(document).ready(function(){   
    $('#form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('#form-password').attr('type','text');
      }else{
        $('#form-password').attr('type','password');
      }
    });
  });

  </script>

</html>
