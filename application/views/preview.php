<!DOCTYPE html>
<html>
<head>
	<title>TEMPLATE DOWNLOAD</title>
</head>
<body style="font-family:  'Roboto', sans-serif;" onload="window.print();">
	<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td width="25">
				</td>
			</tr>
			<tr>
				<td align="center" width="560" >
					<table valign="top" cellpadding="0" cellspacing="0" width="100%" height="93" border="0">
						<tbody>
							<tr>
								<td>
									<div class="contentEditableContainer contentImageEditable">
										<div class="contentEditable" >
											<div style="border-bottom: 2px solid #dbdbdb; ">
											<img style="margin-left: 100px;" src="<?php echo base_url('assets/img/logotulisan.png') ?>" width="250" height='60' >
											</div>
											<div style="text-align: center">
											<h1 >FORMULIR DATA PELAMAR</h1>
											<h5>"Semua kesempatan adalah sama tanpa memandang jenis kelamin, suku bangsa, agama, warna kulit, dan keturunan"</h5>
											</div>
										</div>
										
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</table>
	
	 </div>
	
<?php

// $coba = $form2->pengalaman;
// print_r($form2->pengalaman); die;
    //foreach($form2 as $a){
?>
	<!-- FORM 1 -->
<div style="margin-left: 180px;">
	<h3>TENTANG ANDA</h3>

	<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<td>
						<table align="center" border="0" cellpadding="0" cellspacing="0" valign="top" width="100%">
							<tbody>
								<tr>
									<td valign="top" width="150" class="specbundle">
										<table align="left" border="0" cellpadding="0" cellspacing="0" valign="top" width="100%">
											<tbody>
												<tr>
													<td>
														Nama Lengkap
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Email
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Pengalaman
													</td>
												</tr>
											</tbody>
										</table>
									</td>
									<td class="specbundle" valign="top" width="365">
										<table align="center" border="0" cellpadding="0" cellspacing="0" valign="top" width="100%">
											<tbody>
												<tr>
													<td>
														: <?php echo $nama ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $email ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $form2->pengalaman ?>
													</td>
												</tr>
											</tbody> <!-- tbody -->
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td height="20">
					</td>
				</tr>
			</tbody>
		</table>
	</div> <!-- div full -->


	<!-- FORM 2 -->

	<h3>PENDIDIKAN</h3>
	<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<td>
						<table align="center" border="0" cellpadding="0" cellspacing="0" valign="top" width="100%">
							<tbody>
								<tr>
									<td valign="top" width="150" class="specbundle">
										<table align="left" border="0" cellpadding="0" cellspacing="0" valign="top" width="100%">
											<tbody>
												<tr>
													<td>
														Sekolah/ Perguruan Tinggi
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Kualifikasi
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Bidang Studi
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Tahun Wisuda
													</td>
												</tr>
											</tbody>
										</table>
									</td>
									<td class="specbundle" valign="top" width="365">
										<table align="center" border="0" cellpadding="0" cellspacing="0" valign="top" width="100%">
											<tbody>
												<tr>
													<td>
														: <?php echo $form2->sekolah; ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $form2->kualifikasi; ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $form2->jurusan; ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $form2->tahunwisuda; ?>
													</td>
												</tr>
											</tbody> <!-- tbody -->
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td height="20">
					</td>
				</tr>
			</tbody>
		</table>
	</div> <!-- div full -->


	<!-- FORM 3 -->

	<h3>RIWAYAT PEKERJAAN</h3>
	<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<td>
						<table align="center" border="0" cellpadding="0" cellspacing="0" valign="top" width="100%">
							<tbody>
								<tr>
									<td valign="top" width="150" class="specbundle">
										<table align="left" border="0" cellpadding="0" cellspacing="0" valign="top" width="100%">
											<tbody>
												<tr>
													<td>
														Nama Perusahaan
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Posisi
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Bulan Bergabung
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Tahun Bergabung
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Spesialisasi
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														Bidang Pekerjaan
													</td>	
												</tr>
												
											</tbody>
										</table>
									</td>
									<td class="specbundle" valign="top" width="365">
										<table align="center" border="0" cellpadding="0" cellspacing="0" valign="top" width="100%">
											<tbody>
												<tr>
													<td>
														: <?php echo $form2->namaperusahaan; ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $form2->posisi; ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $form2->bulanbergabung; ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $form2->tahunbergabung; ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $form2->spesialisasi; ?>
													</td>
												</tr>
												<tr>
													<td colspan="3" height="10">
													</td>
												</tr>
												<tr>
													<td>
														: <?php echo $form2->bidangpekerjaan; ?>
													</td>
												</tr>
											</tbody> <!-- tbody -->
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td height="20">
					</td>
				</tr>
			</tbody>
		</table>
	</div> <!-- div full -->
</div> <!-- div terakhir banget -->
</body>
</html>