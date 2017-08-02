<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detik Karir</title>

    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <!-- Plugin CSS -->
    <link href="<?=base_url()?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?=base_url()?>assets/css/creative.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/css/page2_jobdes.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/form.css">


</head>

<body id="page-top">
     <?php include 'navigation_page_profil.php' ?>

<div id="applyjob">
      <!--Header-->
<div class="container-fluid">
    <div class="row">
        <div class="w3-container w3-padding parallax">
            <div class="quote">
                <img class="img-responsive img-quote " src="<?=base_url()?>assets/img/line.png"/>
                <h1>Web Programmer</h1>

                <p class="tagline">Together, we deliver news for everyone, smalll thing will be very important.<br> Be part of us, be part of something <b>BIG</b></p>
            </div>
        </div>
    </div>
</div>
    <!-- FORM -->
    <section class="sr-icons" id="apply">
        <div class="container text-left well">
        <div class="col-lg-3"></div>
          <form>
            <div class="col-lg-6">
                <h3 class="text-center">APPLY FOR THIS POSITION</h3>
                <hr class="title-line">
                <br>
                <div class="form-group">
                    <label for="first">Full Name *</label>
                    <input type="text" class="form-control" id="firstname" placeholder="First Name" required="true">
					<span class="error">* <?php echo $nameErr;?></span> <!-- Ini baru -->
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone Number" required="true">
					<span class="error">* <?php echo $phoneErr;?></span> <!-- Ini baru -->
                </div>
                <div class="form-group">
                    <label for="phone">Email *</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" required="true">
					<span class="error">* <?php echo $emailErr;?></span> <!-- Ini baru -->
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Curriculum Vitae in PDF, DOC, DOCX only with maximum 2MB files *</label>
                    <input type="file" id="inputfile" required="true">
                </div>
                <div class="form-group">
                    <label for="phone">LinkedIn Profile URL</label>
                    <input type="text" class="form-control" id="linkedin" placeholder="LinkedIn URL">
                </div>
                <div class="form-group">
                    <label for="comment">Website / Blog / Portfolio</label>
                    <textarea style="max-width:514px;" class="form-control" rows="5" id="textarea" placeholder="Website / blog / portfolio one line per item"></textarea>
					<span class="error">* <?php echo $webErr;?></span> <!-- Ini baru -->
                </div>
                <div class="row text-center">
               <button type="submit" class="btn btn-default"> <a href="notif">Submit</a></button>
                </div>
                </div>
                <div class="col-lg-3"></div>
            </form>
        </div>
    </section>

    <?php include 'footer.php' ?>

    <?php include 'jQuery.php' ?>

</body>

    <!-- JAVASCRIPT -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/progress-bar.js">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/jquery/jquery.min.js">
</html>
