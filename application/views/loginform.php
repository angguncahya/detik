<html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css')?>">

<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>



<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" method="post" action="<?php echo base_url('loginuser/loginform') ?>">
    <p><input name="email" type="email" placeholder="Email"></p>
    <p><input type="password" name="password" placeholder="Password"></p>
    <p><input type="submit" value="Log in"></p>
  </form>
</div>
</html>


