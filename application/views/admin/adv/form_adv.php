<!DOCTYPE html>
<?php $email = $this->session->userdata("email_hrd");
        if( empty($email)){
          redirect("login");
        }else{ ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="shortcut icon" href="<?php echo base_url('uploads/header/detik2.png')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
    <title>Admin Detik Karir</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
        <?php include 'navigasi.php';?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add Advertisemnet</h1>
          </div>
        </div>
        <?php if ($this->session->flashdata('pesan')!= null){ ?>
                <?php
                    echo $this->session->flashdata('pesan');
                    $this->session->set_flashdata('pesan',null);
                  ?>
            <?php }?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                  <div class="well bs-component">
                    <form class="form-horizontal" id="formemail" method="post" action="<?php echo base_url('adv/tambahadvertisement'); ?>">
                      <fieldset>
                        <legend style="padding-left: 2%;">Add Avertisements</legend>
                        <div class="form-group" style="padding-left: 2%;">
                          <div >
                        <div >
                        <table class="col-lg-10">

                            <tr> <!--input 2-->
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Nama Detail Job</label></td>
                            <td class="col-lg-10"><input id="inputEmail" type="text" name= jobdetail_name placeholder="Nama Detail Job" class="form-control" required="true" pattern="[A-Za-z].{1,}" title="Masukkan hanya huruf"></td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>

                            <tr> <!--input 3-->
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Kategori Job</label></td>
                            <td class="col-lg-10"><select class="form-control" id="sel1" name= nama_tipe required="true">
                            <option value="">Tipe Detail job</option>
                            <?php foreach($kategori as $k){
                              echo "<option value='".$k->id_tipe."'>".$k->nama_tipe."</option>"; }
                          echo "</select>"
                              ?></td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>
                             
                            <tr> <!--input 4-->
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Sub Kategori Job</label></td>
                            <td class="col-lg-10"><select class="form-control" id="sel1" name="job_name" required="true">
                            <option hidden="true" value="">Sub Kategori Job</option>
                            <?php foreach($subkategori as $s){
                              echo "<option value='".$s->job_id."'>".$s->job_name."</option>"; }
                          echo "</select>"
                              ?></td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>

                            <tr> <!--input a-->
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Deskripsi Detail Job</label></td>
                            <td class="col-lg-10">
                              <textarea id="area1" rows="5" placeholder="Isi konten" name= jobdetail_desc placeholder="Deskripsi Detail Job" class="form-control" required="true"></textarea>
                            </td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>

                            <tr> <!--input b-->
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Masa Berlaku Detail Job</label></td>
                            <td class="col-lg-10"><input id="inputEmail" type="date" name= jobdetail_status class="form-control" required="true"></td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>

                            <tr> <!--input c-->
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Persyaratan Detail Job</label></td>
                            <td class="col-lg-10">
                              <textarea  id="area1" rows="5" name= jobdetail_persyaratan placeholder="Persyaratan Detail Job" class="form-control" required="true"></textarea>
                            </td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>

                            <tr> <!--input d-->
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Tugas Detail Job</label></td>
                            <td class="col-lg-10">
                              <textarea rows="5" name= jobdetail_tugas placeholder="Tugas Detail Job" class="form-control" required="true"></textarea>
                            </td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>

                            <tr> <!--input 6-->
                            <td style="padding-left: 2%;"><label for="inputEmail" class=" control-label">Tampilkan</label></td>
                            <td class="col-lg-10"><select class="form-control" id="sel1" name="jobdetail_is_pagejobdetail" required="true">
                            <option hidden="true" value="">Tampil</option>
                              <option value='Y'>Tampil</option>";
                              <option value='N'>Tidak Tampil</option>";
                          </select></td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>

                       </table>
                        </div>
                        <div class="form-group col-lg-12" style="padding-left: 25%;">
                          <div class="col-lg-10 col-lg-offset-2">
                            <a href='<?php echo base_url('adv/advertisement'); ?>' class="btn btn-default" title="Cancel">Cancel</a>
                            <button type="submit" class="btn btn-primary" title="Submit">Submit</button>
                          </div>
                        </div>
                      </fieldset>

                      
                    </form>
                  </div>

    <!-- Javascripts-->
   <!-- Javascripts-->
    <script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/js/essential-plugins.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/pace.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript"> 
          $(document).ready( function() {
          $('#id').delay(3000).fadeOut();
           });
    </script>
  </body>
</html>
<?php } ?>