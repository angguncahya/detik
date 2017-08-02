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
    <script src=”http://js.nicedit.com/nicEdit-latest.js”></script>
    <title>Admin Detik Karir</title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
        <?php include 'navigasi.php';?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Edit Template</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div>
                  <div class="well bs-component">
                  <form class="form-horizontal" id="formemail" method="post" action="<?php echo base_url("email/updateemail/$template->id_template") ?>">                
                      <fieldset>
                        <legend style="padding-left: 20px;">Edit Template</legend>
                        <div class="form-group" style="padding-left: 2%;">
                          <div >
                        <div >
                        <table class="col-lg-10">
                          <div class="col-lg-10">
                            <tr>
                            <td style="padding-left: 20px;"><label for="inputEmail" class="control-label">ID Template</label></td>
                            <td><input type="text" name= id_template value="<?php echo $template->id_template ?>" class="form-control" required="true" disabled></td>
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr> 
                          </div>
                          
                          <div class="col-lg-8">
                            <tr>
                            <td class="col-lg-3" style="padding-left: 20px;"><label for="inputEmail" class="control-label">Nama Template</label></td>
                            <td><input type="text" name= nm_template placeholder="Nama Template" value="<?php echo $template->nm_template ?>" class="form-control" required="true"></td> 
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>
                          </div>
                          <div class="col-lg-8">
                            <tr>
                            <td class="col-lg-3" style="padding-left: 20px;"><label for="inputEmail" class="control-label">Subjek</label></td>
                            <td><input type="text" name= subjek placeholder="Subjek Template" value="<?php echo $template->subjek ?>" class="form-control" required="true"></td> 
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>
                          </div>
                          <div class="col-lg-8">
                            <tr>
                            <td class="col-lg-3" style="padding-left: 20px;"><label for="inputEmail" class="control-label">Konten</label></td>
                            <td><textarea style="width: 100%;" class="col-lg-8" id="area1" name= konten cols="5000" form="formemail" required="true" class="form-control" ><?php echo $template->konten ?></textarea></td> 
                            </tr>
                            <tr class="form-control" style="border: #fff;"></tr>
                          </div>
                       </table>
                        </div>
                        <div class="form-group col-lg-12" style="padding-left: 25%;">
                          <div class="col-lg-10 col-lg-offset-2">
                            <a href='<?php echo base_url("email/tabelemail") ?>' class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>

    <!-- Javascripts-->
   <!-- Javascripts-->
    <script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/js/essential-plugins.js"></script>
    <script src="<?=base_url()?>assets/js/nicEdit.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/pace.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
    <script type="text/javascript">
      bkLib.onDomLoaded(function() {
            new nicEditor({maxHeight : 3}).panelInstance('area1');
            //new nicEditor({fullPanel : true}).panelInstance('area2');
            //new nicEditor({iconsPath : "<?=base_url()?>assets/js/nicEditorIcons.gif"}).panelInstance('area3');
            //new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
            //new nicEditor({maxHeight : 30}).panelInstance('area5');
      });
  </script>
    <script src="<?php echo base_url()?>assets/js/nicEdit.js"></script>
<script type="text/javascript">
  bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</script>
  </body>
</html>
<?php } ?>