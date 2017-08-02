<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>id hrd</th>
			<th>id tipe</th>
			<th>vacancy name</th>
			<th>vacancy description</th>
			<th>requirement</th>
			<th>responsibility</th>
			<th>explanation</th>
			<th>update date</th>
			<th>expired date</th>
		</tr>
		<?php
		$no = 1;
		foreach($detail_lowongan as $d){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $d->id_hrd ?></td>
			<td><?php echo $d->id_tipe ?></td>
			<td><?php echo $d->vacancy_name ?></td>
			<td><?php echo $d->vacancy_description ?></td>
			<td><?php echo $d->requirement ?></td>
			<td><?php echo $d->responsibility ?></td>
			<td><?php echo $d->explanation ?></td>
			<td><?php echo $d->tgl_update ?></td>
			<td><?php echo $d->tgl_exp ?></td>

			<td>
				<?php echo anchor('crud/edit/'.$d->id_lowongan,'Edit'); ?>
				<?php echo anchor('crud/hapus/'.$d->id_lowongan,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
