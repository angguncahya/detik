<!DOCTYPE html>
<?php $email = $this->session->userdata("nama");
        if( empty($email)){
          redirect('loginuser/loginform');
        }else{ ?>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Detik Karir </title>


    <!-- Vendor -->


    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap-datepicker.css')?>" rel="stylesheet">


    <!-- Theme CSS -->


    <link href="<?php echo base_url('assets/css/creative.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/page2_jobdes.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/joblist.css')?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max1200.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max993.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max767.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max768.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max600.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max480.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/max414.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/min768.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/min601.css')?>">

    <!-- Script -->

    <script src="<?php echo base_url('assets/vendor/jquery/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/index.js')?>"></script>

</head>

<body id="page-top">
     <?php include 'navigation_page_profil.php' ?>
<div id="applyjob">

<!--Header-->
<div id="page-top" class="container-fluid">
    <div class="row w3-container w3-padding parallax">
            <div class="quote">
                <?php
                    foreach ($get_header->result() as $header):
                ?>
                <img style="margin-left: 16px;" class="img-responsive img-quote " src="<?php echo base_url('assets/img/line.png')?>"/>

                <div class="col-lg-6">

                <h1><?php echo $header->header_name; ?></h1>
                <h5><?php echo $header->header_tagline; ?></h5>
                </div>

                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
    
</div>

<!-- step section -->

<section class="small-padding">

<!-- Step Title -->

    <div class="container">
	    <div class="row form-group">
            <div class="col-xs-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel par">
                    <li class="active">
                        <a href="#step-1">
                            <h4 class="list-group-item-heading">Step 1</h4>
                            <p class="list-group-item-text">Tentang Anda</p>
                        </a>
                    </li>
                    <li class="disabled">
                        <a href="#step-2">
                            <h4 class="list-group-item-heading">Step 2</h4>
                            <p class="list-group-item-text">Pendidikan</p>
                        </a>
                    </li>
                    <li class="disabled">
                        <a href="#step-3">
                            <h4 class="list-group-item-heading">Step 3</h4>
                            <p class="list-group-item-text">Riwayat Pekerjaan</p>
                        </a>
                    </li>
                </ul>
            </div>
	    </div><!-- row -->

    </div>

<!-- <form> 1 -->

<form method="post" action="<?php echo base_url('user/formuser2')?>" class="container">
    <div class="row setup-content" id="step-1">
        <div class=" col-xs-12 text-center">
            <div class="col-md-12  well text-center">
                <h3><b>Let we know who you are</b></h3>
                <p>Tell us and Be part of us !!</p>
                <br>

                <div class="col-md-6 col-lg-offset-3 text-left">
                  <div class="row">
                    <div class="form-group">
                        <label for="first">Nama Lengkap *</label>
                        <input type="text" class="form-control" name="nama" id="namaleng" value="<?php echo $nama; ?>" placeholder="Nama Lengkap" required="true" >
                    </div>

                    <div class="form-group">
                        <label for="first">Email *</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $email; ?>" placeholder="Email" required="true" disabled>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Pengalaman *</label>
                        <select name="pengalaman" class="form-control" id="sel1" required="true">
                            <option selected hidden="true" value="">Pengalaman anda</option>
                            <option value="Pernah bekerja">Pernah Bekerja</option>
                            <option value="Mahasiswa/ baru lulus">Mahasiswa/ baru lulus</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <!-- <input class="botton" id="#" type="submit" name="save" value="SAVE"></input> -->
                        <button class="botton" id="activate-step-2" >NEXT</button>
                    </div>
                  </div><!-- row -->

                </div>
            </div>
        </div>
    </div>

<!-- </form> -->

<!--<form> 2-->


    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h3><b>Education</b></h3>
                <br>

        		<div class="col-md-6 col-lg-offset-3 text-left">

                    <div class="form-group">
                        <label for="first">Sekolah/ Perguruan Tinggi *</label>
                        <input name="sekolah" type="text" class="form-control" id="sekolah" placeholder="Nama Sekolah/ Perguruan Tinggi" required="true">
                    </div>

                    <div class="form-group">
                        <label for="sel1">Kualifikasi *</label>
                        <select name="kualifikasi" class="form-control" id="sel1" required="true">
                            <option selected disabled value="">Kualifikasi anda</option>
                            <option value="Sekolah Dasar (SD)">SD</option>
                            <option value="Sekolah Menengah Pertama (SMP)">SMP</option>
                            <option value="Sekolah Menengah Atas (SMA)">SMA</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="first">Bidang Studi *</label>
                      <input name="jurusan" type="text" class="form-control" id="jurusan" placeholder="Jurusan" required="true">
                    </div>

                    <div class="form-group">
                      <label for="first">Tahun Wisuda *</label>
                      <input name="tahunwisuda" type="text" class="form-control" id="tahunlulus" placeholder="Tahun Lulus/ No. Ijazah" required="true">
                    </div>

                    <div class="form-group">
                      <label for="first">No. Ijazah *</label>
                      <input name="noijazah" type="text" class="form-control" id="tahunlulus" placeholder="No. Ijazah" required="true">
                    </div>

                    <div class="text-center">
                            <!-- <input class="botton" id="#" type="submit" name="save" value="SAVE"></input> -->
                            <button class="botton" id="activate-step-3" >NEXT</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

<!--</form> -->

<!-- form 3 -->

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">

            <div class="col-md-12 well text-center">
                <h3 class="text-center"><b> Employement history</b></h3>
                <br>
                <div class="col-md-6 col-lg-offset-3 text-left">

                    <div class="form-group">
                        <label for="first">Nama Perusahaan *</label>
                        <input name="namaperusahaan" type="text" class="form-control" id="natp" placeholder="Nama, Alamat & Telepon Perusahaan">
                    </div>

                    <div class="form-group">
                        <label for="first">Posisi *</label>
                        <input name="posisi" type="text" class="form-control" id="pend_terakhir" placeholder="Alamat" required="true">
                    </div>

                    <div class="form-group">
                        <label for="sel1">Bulan Bergabung *</label>
                        <select name="bulanbergabung" class="form-control" id="sel1" required="true">
                            <option selected disabled value="">Bulan</option>
                            <option value="januari">Januari</option>
                            <option value="februari">Februari</option>
                            <option value="maret">Maret</option>
                            <option value="april">april</option>
                            <option value="mei">Mei</option>
                            <option value="juni">Juni</option>
                            <option value="juli">Juli</option>
                            <option value="agustus">Agustus</option>
                            <option value="september">September</option>
                            <option value="oktober">Oktober</option>
                            <option value="november">November</option>
                            <option value="desember">Desember</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Tahun Bergabung *</label>
                        <select name="tahunbergabung" class="form-control" id="sel1" required="true">
                            <option selected disabled value="">Tahun</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="first">Spesialisasi *</label>
                        <input name="spesialisasi" type="text" class="form-control" id="pend_terakhir" placeholder="spesialisasi" required="true">
                    </div>

                    <div class="form-group">
                            <label for="first">Bidang Pekerjaan *</label>
                            <input name="bidangpekerjaan" type="text" class="form-control" id="jurusan" placeholder="Telepon" required="true">
                    </div>

                    <div class="text-center">
                    <!-- <input class="botton" id="#" type="submit" name="save" value="Submit"></input> -->
                    <!-- <a href="download" class="botton">SUBMIT</a> -->
                    <input type="submit" value="SUBMIT" class="button" name="submit">
                    <!-- 
                    <a href="download" class="botton">SUBMIT</a> -->
                    <!-- <a href="download"><button class="botton" >Submit</button></a> -->
                    </div>

            </div>
        </div>
    </div>

</form>

</section>

	<?php include 'footer.php' ?>

    <?php include 'jQuery.php' ?>
</body>
</html>
<?php } ?>