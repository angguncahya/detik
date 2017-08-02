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
            <h1>Unprocess Applicants</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Data Table</a></li>
            </ul>
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
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Nama Pelamar</th>
                      <th>Lamar Pekerjaan</th>
                      <th>Status Lamaran</th>
                      <th>Tanggal Lamaran</th>
                      <th>Updated By</th>
                      <th >Action</th>
                      <th >File</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                        foreach($unprocess as $a){
                    ?>
                    <tr> 
                      <td><?php echo $a->nama_applicant; ?></td>
                      <td><?php echo $a->nama_job; ?></td>
                      <td><?php echo $a->status; ?></td>
                      <td><?php echo $a->tanggal_apply; ?></td>
                      <td><?php echo ($a->email_update == null) ? "none" : $a->email_update; ?></td>
                      <td>
                          <form method="post" action="<?php echo base_url('app/prosesuser/'.$a->id_apply); ?>">
                          <div class="dropdown">
                            <button style="background-color: #e5e5e5; color: #000;" class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Status
                              <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu" >
                                <li><div style=" padding: 2% 2% 2% 2%; "><button style="text-align: left; background-color: #fff; color: #000; width: 100%;" class="btn btn-default" type="submit" name="status" value="shortlist" title="shortlist"> <i class="fa fa-th-list" aria-hidden="true"></i> Shortlist</button></div></li>

                                <li><div style="text-align: left; padding: 2% 2% 2% 2%; "><button style="text-align: left; background-color: #fff; color: #000; width: 100%;" class="btn btn-warning" type="submit" name="status" value="interview user" title="Interview user"> <i class="fa fa-user" aria-hidden="true"></i> Interview User</button></div></li>
                                
                                <li><div style="text-align: left; padding: 2% 2% 2% 2%; "><button style=" text-align: left;background-color: #fff; color: #000; width: 100%;" class="btn btn-primary" type="submit" name="status" value="psikotest" title="psikotest" > <i class="fa fa-pencil-square-o" aria-hidden="true"></i> psikotest</button></div></li>
                                
                                <li><div style="text-align: left; padding: 2% 2% 2% 2%; "><button style="text-align: left; background-color: #fff; color: #000; width: 100%;" class="btn btn-warning" type="submit" name="status" value="interview hrd" title="interview hrd"> <i class="fa fa-user" aria-hidden="true"></i> Interview HRD</button></div></li>
                                
                                <li><div style="text-align: left; padding: 2% 2% 2% 2%; "><button style="text-align: left; background-color: #fff; color: #000; width: 100%;" class="btn btn-primary" type="submit" name="status" value="skill test" title="skill test"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Skill Test</button></div></li>
                                
                                <li><div style="text-align: left; padding: 2% 2% 2% 2%; "><button style="text-align: left; background-color: #fff; color: #000; width: 100%;" class="btn btn-success" type="submit" name="status" value="accepted" title="accepted" > <i class="fa fa-check" aria-hidden="true"></i> Accepted</button></div></li>
                                
                                <li><div style="text-align: left; padding: 2% 2% 2% 2%; "><button style="text-align: left; background-color: #fff; color: #000; width: 100%;" class="btn btn-danger" type="submit" name="status" value="blacklist" title="blacklist"> <i class="fa fa-times" aria-hidden="true"></i> Blacklist</button></div></li>
                                
                              </ul>
                          </div>
                              <!-- <div style="text-align: center; padding-bottom: 2%;">
                              1 <button class="btn btn-default" type="submit" name="status" value="shortlist" title="shortlist"> <i class="fa fa-th-list" aria-hidden="true"></i></button> uda
                              2 <button class="btn btn-warning" type="submit" name="status" value="interview user" title="Interview user"> <i class="fa fa-user" aria-hidden="true"></i></button> uda
                              3 <button class="btn btn-primary" type="submit" name="status" value="psikotest" title="psikotest" > <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                              4 <button class="btn btn-warning" type="submit" name="status" value="interview hrd" title="interview hrd"> <i class="fa fa-user" aria-hidden="true"></i></button>
                              5 <button class="btn btn-primary" type="submit" name="status" value="skill test" title="skill test"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><br>
                              </div>
                              <div style="text-align: center;">
                              <button class="btn btn-success" type="submit" name="status" value="accepted" title="accepted" > <i class="fa fa-check-square" aria-hidden="true"></i></button>
                              <button class="btn btn-danger" type="submit" name="status" value="blacklist" title="blacklist"> <i class="fa fa-times" aria-hidden="true"></i></button>
                              <a class="btn btn-info" href="<?php //echo base_url("app/download_cv/$a->iduser") ?>" title="download"> <i class="fa fa-download" aria-hidden="true"></i></a> </div> -->
                            </form>
                      </td>
                      <td>
                        <button style="background-color: #e5e5e5; color: #000;" class="btn btn-info" type="button">
                            <a style="color: #000;" href="<?php echo base_url("app/download_cv/$a->iduser") ?>" title="download"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                            </button>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
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
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript"> 
          $(document).ready( function() {
          $('#id').delay(3000).fadeOut();
           });
        </script>
  </body>
</html>
<?php } ?>