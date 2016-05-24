<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Beautiful Queen Enterprise</title>

	<!-- Bootstrap -->
	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ledger">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nixie+One">
	<style type="text/css">
		h1, h2, h3, h4, h5 { font-family: 'Nixie One', serif; }
		body { font-family: 'Ledger', sans-serif; }
	</style>
</head>
<body>
	<header class="header-1">
	  <nav class="navbar navbar-default" role="navigation" style="background-color: #672265;">
	    <div class="container">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="#">Beautiful Queen Enterprise</a>
	      </div>
	      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: transparent;">
	        <ul class="nav navbar-nav navbar-right">
	          <li><a href="#our-story">Our Story</a></li>
	          <li><a href="#founder">The Founder</a></li>
	          <li><a href="#contact">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	</header>
	<section class="subheader-1">
	    <div class="background" style="background-image: url('https://images.unsplash.com/photo-1455734729978-db1ae4f687fc?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=cca8a94bda503431f29a080b24a4ba02'); background-size: cover; background-position: center; color: white;"></div>
	    <div>
	        <div class="container">
	            <div class="jumbotron">
	                <h1 style="text-shadow: 1px 1px 1px #000;">A Social Community for Women</h1>
	                <p>To come together without judgment</p>
	                <div class="btn btn-nephritis btn-xlg hide">Find us on Facebook</div>
	            </div>
	        </div>
	    </div>
	</section>
	<section id="our-story" class="content-5">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-6 vcenter">
	        <div class="media">
	          <img src="<?php echo get_template_directory_uri() . '/assets/img/bqe-logo.jpg'; ?>" class="img-responsive" style="max-height: 300px;" />
	        </div>
	      </div>
	      <div class="col-sm-6 vcenter">
	      	<h3>Passion for Hurting Women</h3>
	        <p class='text-asbestos'>"I always found myself engaging in conversation with women about sensitive matters. I can recall, one night I was out to eat after work. A lady, that I’ve never met just started sharing different things that were happening to her. When situations like these arise, I am reminded to handle the situation delicately. After speaking with her, I felt the need to keep the lines of communication open and we exchanged contact information. Later, I mailed her a letter with different Scriptures and encouraged her to attend a church that was nearby. This is how I started Beautiful Queen Enterprise." -Resaell A. Haynes</p>
	      </div>
	    </div>
	  </div>
	</section>
	<section id="founder" class="content-5 bkg-clouds">
	  	<div class='container'>
	    	<div class='row content-wrapper'>
		      <div class='col-md-6 content'>
		        <h3>A Founder That Cares</h3>
		        <p class='text-asbestos'>Resaell A. Haynes is the Life Strategist of Beautiful Queen Enterprise. She obtained her Bachelor’s from Winston-Salem State University. She received her Masters of Christian Ministry with a cognate in Discipleship/Church Ministry from Liberty University. Her mission in life is to, “Guide women through life using virtuous principles to gain and maintain their beauty in the eyes of men and God."</p>
		      </div>
		      <div class='col-md-6 media'>
		        <img src="<?php echo get_template_directory_uri() . '/assets/img/resaell.jpg'; ?>" class='img-responsive'>
		      </div>
	    	</div>
	  	</div>
	</section>
	<section class="content-8 text-center" style="background-color: #672265; color: #fff;">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <p class='lead'>If you have something on your mind and you feel no one will understand<br />Resaell is the one to talk to. <small>- Princess J, Founder of Sweets2TheSweet</small>
	        </p>
	      </div>
	    </div>
	  </div>
	</section>
	<section id="contact" class="content-1 bkg-dark" style="color: #fff;">
		<style type="text/css">
			.ninja-forms-field {
				background-color: #333;
				padding: 10px;
				border: none;
			}
		</style>
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-8 col-sm-offset-2">
	      	<h2>A Listening Ear Is Waiting</h2>
	      	<p>Contact me today to schedule your FREE consultation.</p>
	        <?php if( function_exists( 'ninja_forms_display_form' ) ) { ninja_forms_display_form( 1 ); } ?>
	      </div>
	    </div>
	  </div>
	</section>
	<footer class="footer-1 bkg-dark">
	  <div class='container'>
	    <div class='row'>
	      <div class='col-md-12'>
	        <div class='love'>
	          <div class='message-wrapper bkg-dark'>
	            <p>Branded by <i class="fa fa-heart-o"></i>Battle Branding</p>
	            <p>&copy;  2016 Beautiful Queen Enterprise. All rights reserved.</p>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>