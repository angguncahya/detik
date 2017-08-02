<!-- Membaca isi form dengan method POST, dengan validasi dan repopulating isi form, insert data ke database -->
<!DOCTYPE HTML> 
<html>
<head>

</head>
<body> 

<h2>User Input</h2>
<form method="POST" autocomplete="on" action="<?php echo base_url('user_form_controller/tambahkontakdarurat'); ?>"">
<table>
	<tr>
		<td valign="top">Name</td>
		<td valign="top">:</td>
		<td valign="top"><input type="text" name="nama_darurat" size="30" maxlength="50" placeholder="Name (max 50 characters)" autofocus</td>
	</tr>
	<tr>
		<td valign="top">Address</td>
		<td valign="top">:</td>
		<td valign="top"><textarea name="alamat_darurat" rows="5" cols="30" placeholder="Address (max 100 characters)"></textarea></td>
	</tr>
	<tr>
		<td valign="top">Telepon</td>
		<td valign="top">:</td>
		<td valign="top"><input type="text" name="notelp_darurat" size="30" maxlength="50" placeholder="Name (max 50 characters)" autofocus> </td>
	</tr>
	<tr>
		<td valign="top">Pekerjaan</td>
		<td valign="top">:</td>
		<td valign="top"><input type="text" name="pekerjaan_darurat" size="30" maxlength="50" placeholder="Name (max 50 characters)" ></td>
	</tr>
	<tr>
		<td valign="top">Hubungan</td>
		<td valign="top">:</td>
		<td valign="top"><input type="text" name="hubungan_darurat" size="30" maxlength="50" placeholder="Name (max 50 characters)" ></td>
		
	</tr>
	<td><input type="submit" value="Login"></td>
	
</table>
</form>

</body>
</html>

