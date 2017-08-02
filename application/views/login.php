<html>

  <!-- Theme Css -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css')?>">

  <!-- Script -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>


<!-- <div class="login">
  <div class="login-triangle"></div>
    <h2 class="login-header">Log in</h2>

  <form class="login-container" method="post" action="<?php //echo base_url('loginuser/login') ?>">
    <p><input name="email" type="email" placeholder="Email"></p>s
    <p><input type="password" name="password" placeholder="Password"></p>
    <p><input type="submit" value="Log in"></p>
    <p><input type="button" value="Register" onclick="window.location = '<?php //echo base_url('loginuser/register'); ?>'"></p>
  </form>

</div> -->
  <!-- <form class="login-container" method="post" action="<?php// echo base_url('loginuser/register') ?>">
    <p><input type="submit" value="Register"></p>
  </form> -->

<div class="login" style="width: 100%;">
        <div class="modal-header" style="background-color: #2288dd;">
          <h2 class="login-header" >Log in</h2>
        </div>
        <div class="modal-body" style="background-color: #ebebeb;">
          <form class="login-container" method="post" action="<?php echo base_url('loginuser/login') ?>">
          <p><input name="email" type="email" placeholder="Email"></p>
          <p><input type="password" name="password" placeholder="Password"></p>
        </div>
          <div class="modal-footer" style="background-color: #ebebeb;">
            <p><input type="submit" value="Log in"></p>
            <p><input type="button" value="Register" id="closemodal" data-toggle="modal" data-target="#myModal2"></p>
          </form>
          </div>
</div>

</html>

<script type="text/javascript">
    $('#closemodal').click(function() {
    $('#myModal').modal('hide');
});
</script>

