<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<center></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $user){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $user->nama ?></td>
			<td><?php echo $user->alamat ?></td>
			<td><?php echo $user->pekerjaan ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>