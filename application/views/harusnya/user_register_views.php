<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h2>User Input</h2>
<form method="POST" action="<?php echo base_url(). "index.php/User_register_controller/tambahuser"; ?>"> <!--buat execute-->
<table>
  <tr>
    <td valign="top">User Name</td>
    <td valign="top">:</td>
    <td valign="top"><input type="text" name="username" size="30" maxlength="50" placeholder="User Name (max 50 characters)"></td>
  </tr>
  <tr>
    <td valign="top">Email</td>
    <td valign="top">:</td>
    <td valign="top"><input type="email" name="email" size="30" maxlength="50" placeholder="email (max 50 characters)"></td>
  </tr>
  <tr>
    <td valign="top">No Telp</td>
    <td valign="top">:</td>
    <td valign="top"><input type="text" name="no_telp" size="30" maxlength="16" placeholder="no telp (max 16 characters)"></td>
  </tr>
  <tr>
    <td valign="top">password</td>
    <td valign="top">:</td>
    <td valign="top"><input type="text" name="password" size="30" maxlength="16" placeholder="no telp (max 16 characters)"></td>
  </tr>
	<tr>
		<td valign="top" colspan="3">
        <br>
        <input type="submit" name="submit" value="Submit">
		    <input type="reset" name="reset" value="Reset">
    </td>
	</tr>
</table>
</form>

</body>
</html>
