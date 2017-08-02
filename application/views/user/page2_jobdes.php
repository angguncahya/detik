<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detik Karir</title>
    <?php echo $error;?>

    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="<?=base_url()?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?=base_url()?>assets/css/creative.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/page2_jobdes.css" rel="stylesheet">


</head>

<body id="page-top">

    <?php //include 'navigation_page.php' ?>
<div id="jobdes">
	<!--Header-->
		<div id="pertama">
		    <div class="w3-container w3-padding parallax"></div>
		    </div>
</div>

	<!--back kepage sebelumnya-->
		<div class="text-back">
			<h6><a href="job"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back to previous page</a> </h6>
		</div>

  	<!--Job Description-->
  	<section id="jobdes">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-12 text-center">
		  			<h1>Web Programer</h1>
		  			<hr class="title-line">
		  			<h5 class="space">Web programmers are responsible for converting a software program design into a set of instructions that computers can follow. This requires proficiency in a variety of common programming languages. The position requires a technology-savvy professional who is able to work in a small-group team setting and also communicate and collaborate cross-function with the other divisions in the organization.</h5>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-lg-2"></div>
	  			<div class="col-lg-8 text-justified">
		  			<h1 class="text-center">Qualification</h1>
		  			<hr class="faded-line">
		  			<ul class="space">
		  				<li>Must possess at least a Bachelor's Degree in computer science, must have a basic technical knowledge of Web Programming and have strong object-oriented programming experience with PHP & Java Script.</li>
		  				<li>Must be familiar with Linux Operation, W3C Standard, website technology update and have knowledge in programming languages and environments including CSS, HTML, XML, and Json (understanding Java Script, AJAX, Action Script and Ruby will be an advantage).</li>
		  				<li>Having technical knowledge of Source Code Management Revision Control such as Subversion, Git, etc.</li>
		  				<li>Preferably having 2 - 3 years of working experience in similar position</li>
		  				<li>Experienced in application & software development</li>
		  				<li>Excellent knowledge of MySQL or PostgreSQL databases</li>
		  				<li>Please describe your skill & knowledge on CV with .pdf format & send to it[at]detik[dot]com</li>
		  				<li>Please state position code in the e-mail subject; Web Programmer </li>
		  			</ul>
	  			</div>
	  			<div class="col-lg-2"></div>
	  		</div><!--row-->
	  		<div class="row">
		  		<div class="col-lg-2"></div>
	  			<div class="col-lg-8 text-justified">
		  			<h1 class="text-center">Duties & Responsibilities</h1>
		  			<hr class="faded-line">
		  			<ul class="space">
		  				<li>Design and implement large scale and high performance Web 2.0 applications</li>
		  				<li>Responsible for keeping websites and computer programs operating properly</li>
		  				<li>Must direct a team of developers on software development, helping to launch new programs in order to fulfill the needs of the business.</li>
		  				<li>Web Programmers may define the software framework from existing software technologies as well as from scratch.</li>
		  			</ul>
	  			</div>
	  			<div class="col-lg-2"></div>
	  		</div><!--row-->
  		</div><!--container-->
  	</section>

  	<!-- Apply section -->
  	<div id="apply-botton">
  		<div class="row text-center">
  		<a href="#apply" class="btn btn-default">Apply</a>
  		</div>
  	</div>

  	<!-- FORM -->
  	<section id="apply">
  		<div class="container text-left">
  		<div class="col-lg-3"></div>
		  <?php echo form_open_multipart('upload/upload');?>
		  	<div class="col-lg-6">
		    	<div class="form-group">
		    		<label for="first">nama lengkap *</label>
		    		<input type="text" class="form-control" name="nama_lengkap" placeholder="nama lengkap" required="true">
		    	</div>
		    	<div class="form-group">
		      		<label for="last">Jenis kelamin *</label><br/>
              <input type="radio" name="jenis_kelamin" value="L" checked>L<br/>
              <input type="radio" name="jenis_kelamin" value="P">P<br/>
		    	</div>
				<div class="form-group">
		      		<label for="phone">tanggal lahir *</label>
		      		<input type="date" class="form-control" name="tanggal_lahir"  required="true">
		    	</div>
		    	<div class="form-group">
		      		<label for="phone">tempat lahir *</label>
		      		<input type="text" class="form-control" name="tempat_lahir" placeholder="tempat lahir" required="true">
		    	</div>
		    	<div class="form-group">
    				<label for="exampleInputFile">Curriculum Vitae in PDF, DOC, DOCX only with maximum 5MB files *</label>
    				<input type="file" name="userfile" required="true">
 				</div>
				<div class="row text-center">
		    	<button type="submit" class="btn btn-default" value="submit"></button>
		    	</div>
		    	</div>
		    	<div class="col-lg-3"></div>
		  	</form>
		</div>
  	</section>

		<?php //include 'footer.php' ?>

		<?php //include 'jQuery.php' ?>

</body>

</html>
