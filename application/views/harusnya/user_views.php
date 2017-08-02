<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h2>User Input</h2>
<form method="POST" action="<?php echo base_url(). "index.php/User_controller/tambahuser"; ?>"> <!--buat execute-->
<table>
  <tr>
    <td valign="top">Nama lengkap</td>
    <td valign="top">:</td>
    <td valign="top"><input type="text" name="nama_lengkap" size="30" maxlength="50" placeholder="Nama lengkap"></td>
  </tr>
  <tr>
    <td valign="top">Jenis kelamin</td>
    <td valign="top">:</td>
    <td valign="top">
      <input type="radio" name="jenis_kelamin" value="L" checked>L<br/>
      <input type="radio" name="jenis_kelamin" value="P" >P<br/>
    </td>
  </tr>
  <tr>
    <td valign="top">Tanggal lahir</td>
    <td valign="top">:</td>
    <td valign="top"><input type="date" name="tanggal_lahir" size="30" maxlength="16" placeholder="tanggal lahir"></td>
  </tr>
  <tr>
    <td valign="top">Tempat lahir</td>
    <td valign="top">:</td>
    <td valign="top"><input type="text" name="tempat_lahir" size="30" maxlength="16" placeholder="tempat lahir"></td>
  </tr>
  <tr>
    <td valign="top">Kota</td>
    <td valign="top">:</td>
    <td valign="top"><input type="text" name="kota" size="30" maxlength="16" placeholder="kota"></td>
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
