
<!-- Css -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css')?>">

<!-- Script -->

<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>

<!-- <div class="login">
  <div class="login-triangle"></div>
  	<h2 class="login-header">Register</h2>
	  <form class="login-container" method="post" action="<?php //echo base_url('loginuser/tambahuser')?>">
	    <p><input name="username" type="username" placeholder="Username"></p>
	    <p><input name="email" type="email"  placeholder="Email"></p>
	    <p><input name="password" type="password" placeholder="Password"></p>
	    <p><input type="submit" value="Register"></p>
	  </form>
</div> -->

<div class="login" style="width: 100%;">
        <div class="modal-header" style="background-color: #2288dd;">
          <h2 class="login-header" >Register</h2>
        </div>
        <div class="modal-body" style="background-color: #ebebeb;">
          <form class="login-container" method="post" action="<?php echo base_url('loginuser/tambahuser')?>">
          	<p><input name="username" type="username" placeholder="Username"></p>
	    	<p><input name="email" type="email"  placeholder="Email"></p>
	    	<p><input name="password" type="password" placeholder="Password"></p>
        </div>
          <div class="modal-footer" style="background-color: #ebebeb;">
            <p><input type="submit" value="Register"></p>
          </form>
          </div>
</div>

