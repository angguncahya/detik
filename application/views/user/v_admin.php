<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
  <h2>Hai, <?php echo $this->session->userdata("id"); ?></h2>
	<a href="<?php echo base_url('Login/logout'); ?>">Logout</a>
</body>
</html>
