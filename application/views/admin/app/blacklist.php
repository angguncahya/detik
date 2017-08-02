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
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/gaya.css">
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
            <h1>Blacklist</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Data Table</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Nama Pelamar</th>
                      <th>Lamar Pekerjaan</th>
                      <th>Status Lamaran</th>
                      <th>Tanggal Lamaran</th>
                      <th>Updated By</th>
                      <th>File</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                        foreach($blacklist as $a){
                    ?>
                    <tr>
                      <td><?php echo $a->nama_applicant; ?></td>
                      <td><?php echo $a->nama_job; ?></td>
                      <td><?php echo $a->status; ?></td>
                      <td><?php echo $a->tanggal_apply; ?></td>
                      <td><?php echo $a->email_update; ?></td>
                      <td>
                        <form>
                        
                            <button style="background-color: #e5e5e5; color: #000;" class="btn btn-info" type="button" >
                            <a style="color: #000;" href="<?php echo base_url("app/download_cv/$a->iduser") ?>" title="download"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                            </button><!-- 
                              <ul class="dropdown-menu" >
                                <li><div style="text-align: left; padding: 2% 2% 2% 2%; "><a style="text-align: left; background-color: #fff; color: #000; width: 100%;" class="btn btn-info" href="<?php //echo base_url("app/download_cv/$a->iduser") ?>" title="download"> <i class="fa fa-download" aria-hidden="true"></i> Download</a></div></li>
                              </ul> -->
                          
                          <!-- <div style="text-align: center;">
                              <a class="btn btn-info" href="<?php //echo base_url("app/download_cv/$a->iduser") ?>" title="download"> <i class="fa fa-download" aria-hidden="true"></i></a> 
                          </div> -->
                        </form>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                </table>
              </div>
            </div>
          </div>
        </div>
                  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
              <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class=""></span><br \>Apakah anda ingin download ?</h4>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon "></span> Cancel</button>
          <button type="submit" class="btn btn-primary btn-default pull-right" data-dismiss="modal"><span class="glyphicon"></span>     Oke</button>
        </div>
      </div>
      
    </div>
  </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/js/essential-plugins.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/pace.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>
<?php } ?>