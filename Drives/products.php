<!DOCTYPE html>
<html>
	<head>
		<title>Campus Drives</title>
		<meta name="viewport"
		content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
		<meta name="keywords" content="Tillage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript">
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
		</script>
		<!-- bootstarp-css -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!--// bootstarp-css -->
		<!-- css -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<!--// css -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600'
		rel='stylesheet' type='text/css'>
		<!--/fonts-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<!-- pop-up -->
		<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>
		<!-- pop-up -->
	</head>
	<body>
		<!-- banner -->
		<div class="banner a-banner">
			<!-- container -->
			<div class="container">
				<div class="header">
					<div class="head-logo">
						
					</div>
					<div class="top-nav">
						<span class="menu">
							<img src="images/menu.png" alt="">
						</span>
						<ul class="nav1">
							
							<li class="hvr-sweep-to-bottom">
								<a href="../Homepage/index.php">Homepage</a>
							</li>
							<li class="hvr-sweep-to-bottom">
								<a href="index.php">Overview</a>
								</li>
								<li class="hvr-sweep-to-bottom">
									<a href="about.php">About Us</a>
								</li>
								<li class="hvr-sweep-to-bottom active">
									<a href="products.php">Campus Drives</a>
								</li>
								
								<li class="hvr-sweep-to-bottom">
									<a href="mail.php">Contact Us</a>
								</li>
								<div class="clearfix"></div>
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
						</script>
						<!-- /script-for-menu -->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //banner -->
		<!-- products-top -->
		<div class="products-top">
			<!-- container -->
			<div class="container">
				<h3 class="wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">On Going and Upcomming Drives</h3>
				<h5 class="wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<span></span>
				</h5>
				<div class="products-top-grids wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<?php
				
						mysql_connect('localhost','root','');
						mysql_select_db('placement');
						$RESULT=mysql_query("SELECT CompanyName from addpdrive");
						$a=1;
						while ($row = mysql_fetch_assoc($RESULT)) {
						print '
							<div class="col-md-4 products-grid">
							
							<div class="products-number">
								<p>' . $a . '</p>
							</div>
							<div class="products-text">
								<h4> '. $row["CompanyName"] .' </h4>
								<div class="see-button">
									<a href="companydetails.php?value=' . $row["CompanyName"] . ' " class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal" href="1.php" role="button">See More</a><br><br><br>
								</div>
							</div>
							<div class="clearfix"></div>
							</div>
						';
						$a=$a+1;
						}

					
							
					?>
				</div>
				
				<div class="products-top-grids wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- //products-top -->
		<!-- products-bottom -->
		<div class="products-bottom">
			<!-- container -->
			<div class="container">
				<h3 class="wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">Recent Drives Focus Box</h3>
				<div class="products-bottom-grids">
					<div class="gallery-grids">
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/intel.jpg" data-fancybox-group="gallery"><img src="images/intel.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/microsoft.jpg" data-fancybox-group="gallery"><img src="images/microsoft.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/designs.png" data-fancybox-group="gallery"><img src="images/designs.png" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/ms1.jpg" data-fancybox-group="gallery"><img src="images/ms1.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/bill.jpg" data-fancybox-group="gallery"><img src="images/bill.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="gallery-grids">
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/6.jpg" data-fancybox-group="gallery"><img src="images/6.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/std.jpg" data-fancybox-group="gallery"><img src="images/std.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/og.jpg" data-fancybox-group="gallery"><img src="images/og.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/infy.png" data-fancybox-group="gallery"><img src="images/infy.png" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/goo.png" data-fancybox-group="gallery"><img src="images/goo.png" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- products-bottom -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="col-md-6 footer-left  wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="products.php">Campus Drives</a>
						</li>
						<li>
							<a href="../Gallery/index.html">Gallery</a>
						</li>
						<li>
							<a href="mail.php">Mail Us</a>
						</li>
					</ul>
					<form>
						<input type="text" placeholder="Email" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-3 footer-middle wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h3>Address</h3>
					<div class="address">
						<p>
							<span></span>
						</p>
					</div>
					<div class="phone">
						<p>+91 7000830947/223365</p>
					</div>
				</div>
				<div class="col-md-3 footer-right  wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h4>
						<a href="../Homepage/index.php" style="color: white">Placement Portal</a>
					</h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //container -->
		</div>
		<!-- //footer -->
		<div class="copyright">
			<!-- container -->
			<div class="container">
				<div class="copyright-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					 <p> &copy; 
              <a href="placementportal.in" target="_parent"></a>
				</div>
				<div class="copyright-right wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<ul>
						<li>
							<a href="#" class="twitter"> </a>
						</li>
						<li>
							<a href="#" class="twitter facebook"> </a>
						</li>
						<li>
							<a href="#" class="twitter chrome"> </a>
						</li>
						<li>
							<a href="#" class="twitter pinterest"> </a>
						</li>
						<li>
							<a href="#" class="twitter linkedin"> </a>
						</li>
						<li>
							<a href="#" class="twitter dribbble"> </a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //container -->
		</div>
	</body>

</html>