<!DOCTYPE html>
<?php $email = $this->session->userdata("email_hrd");
        if( empty($email)){
          redirect("login");
        }else{ ///print_r($admin); die; //id_hrd?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="shortcut icon" href="<?php echo base_url('uploads/header/detik2.png')?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/gaya.css">
    <title>Admin Detik Karir</title>
</head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
        <?php include 'navigasi.php';?>
      <div class="content-wrapper">
          <div class="page-title">
          <div>
            <h1>HR Manager</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="<?php echo base_url('admin/list') ?>">Data Admin</a></li>
            </ul>
          </div>
          <div><a class="btn btn-info" title="tambah admin" href="<?php echo base_url('admin/formadmin') ?>" > <i class="fa fa-plus" aria-hidden="true"></i> HR Manager</a></div>
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
                      <th>No</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                        foreach($admin as $admin){
                    ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $admin->username_hrd; ?></td>
                      <td><?php echo $admin->email_hrd; ?></td>
                      <td>
                      <button <?php echo ($admin->id_hrd == $info->id_hrd) ? "disabled" : "" ?>  class="btn btn-info dropdown-toggle" type="button" title="Edit Advertisement"><a style="color: #fff; text-align: left;" href="<?php echo base_url('admin/editadmin/'.$admin->id_hrd); ?>" title="edit data admin" ><i class="fa fa-pencil" aria-hidden="true" ></i> Edit </a>                              
                            </button>
                            <button <?php echo ($admin->id_hrd == $info->id_hrd) ? "disabled" : "" ?>  class="btn btn-danger dropdown-toggle" type="button" title="Hapus Advertisement"><a style="color: #fff; text-align: left;" href="<?php echo base_url('admin/deleteadmin/'.$admin->id_hrd); ?>" title="hapus data admin" ><i class="fa fa-trash" aria-hidden="true"></i> Hapus </a>                              
                            </button>
<!-- 

                          <div style="text-align: center;">
                          <a class="btn btn-info" href="<?php //echo base_url('admin/editadmin/'.$admin->id_hrd); ?>" title="edit data admin" <?php// echo ($admin->id_hrd == $info->id_hrd) ? "disabled" : "" ?> > <i class="fa fa-pencil" aria-hidden="true" ></i></a>
                          <a class="btn btn-danger" href="<?php //echo base_url('admin/deleteadmin/'.$admin->id_hrd); ?>" title="hapus data admin" <?php //echo ($admin->id_hrd == $info->id_hrd) ? "disabled" : "" ?> > <i class="fa fa-trash" aria-hidden="true"></i></i></a></div> -->                        
                      </td>
                    </tr>
                    <?php $no++; 
                        } ?>
                  </tbody>
                </table>
                <div>
                        <?php if($salah == 3){ ?>
                        <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                                        <!-- Modal content -->
                                <div class="modal-content">
                                  <div class="modal-header" style="padding:35px 50px;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 style="text-align: center;"><br \><STRONG>Update gagal !</STRONG></h4>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-default pull-right" data-dismiss="modal"><span class="glyphicon"></span>     Oke</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <?php } ?>
                        </div>
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
  <script>
      $(document).ready(function(){
              $("#myModal").modal();
      });
    </script>
</html>
<?php } ?>