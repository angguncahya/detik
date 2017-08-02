<section id="footer" class="small-padding bg-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 service-footer">
        <?php
          foreach ($get_footer->result() as $footer):
            ?>
        <h2 class="foole big-title"><?php echo $footer->footer_name_left; ?></h2>
        <hr class="hr-3">
        <p class="foole"><?php echo $footer->footer_desc_left; ?></p>
        <!-- <hr class="hr-4">
        <p>Nam eget nunc sit amet nunc varius iaculis in ac tellus. Nunc dictum ex vel turpis ullamcorper.Nunc dictum ex vel turpis ullamcorper.</p>
        <p style="font-size:8pt;">Sample Text - <span class="blue">Ranger Squad</span></p> -->
      </div>
      <div class="col-lg-6 service-footer">
        <h2 class="foole big-title text-right"><?php echo $footer->footer_name_right; ?></h2>
        <p class="text-right">
        <?php echo $footer->footer_desc_right; ?></p>
        <hr class="hr-4">
        <p class="text-right">Visit Us : <a href="http://www.detik.com">  <span class="white"><?php echo $footer->footer_name_website; ?></span></a></p>

            <ul class="list-inline social-buttons">
                <li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin fa-3x"></i></a></li>
            </ul>

      </div>

    </div>
  </div>
</section>
<?php
  endforeach;
?>

<footer>
  <div class="container-fluid no-padding bg-footer-copyright">
    <div class="row">
      <div class="service-footer">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding foo-left">
        <p class="foo">&copy 2017 Detik Karir - All Rights Reserved</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding foo-right">
        <a class="page-scroll" href="#page-top"><i class="fa fa-chevron-up back-to-top" aria-hidden="true"></i></a>
        <p class="foo text-right foo-right"><span class="white">recruitment@detik.com</span> - Detik Karir </p>
      </div>
      </div>
    </div>
  </div>
</footer>
