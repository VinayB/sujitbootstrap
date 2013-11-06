<!DOCTYPE html>
<html>
  <head>
    <title>Ezee Serve --Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  </head>
  <body id="home">
    <section class="container">
			<div class="content row">
				<section id="branding" class="sidebar col col-lg-3">
				<a href="index.php"><img src="images/misc/logo.png" alt ="Logo for Ezee serv"> </a>
				</section>  <!--Branding -->
				<section class="main col col-lg-9">
				<?php include "_/components/php/header.php"; ?>
				</section><!--Main --> 
			</div> <!-- Content -->
	 
	 
				<div class="content row">
					
				<?php include "_/components/php/snippet_carousel.php"; ?>
					
				</div>
		
		
		
	 </section> <!-- Container-->
	
	<section class="Container">
	 <?php include "_/components/php/middlePart.php"; ?>	
	</section>
	
	<section class="Container">
	<?php include "_/components/php/footer.php"; ?>		
	</section>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/_myscript.js"></script>
  </body>
</html>
