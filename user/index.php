<?php
$in=glob('system/php/*.php');
foreach($in as $file)
{
	include_once($file);
}
if(isset($_POST['email']))
	{
		addUpdate('email',$_POST);
        header("location:index.php");   
    }
	
?>
<!DOCTYPE html>
<html>
<head>
	<style>

.navbar-header{
	margin-top: 25px;
}
.navbar-nav{

font-size: 15pt;
}

	</style>

<link href="system/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="system/css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="system/css/jquery.flipster.css">
<link rel='stylesheet' href='system/css/dscountdown.css' type='text/css' media='all' />
<link href="system/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="system/css/font-awesome.css" rel="stylesheet"> 
<link href="system///fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="system///fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="system///fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>
<body>
<div class="banner-w3ls" id="home">
	<div class="container ">
		<div class="header-nav ">
			<nav class="navbar navbar-default ">
					<div class="navbar-header ">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.html"><span class="logo-v">V</span><i class="fa fa-car" aria-hidden="true" style="color:white">ehicle-</i><span class="logo-r">R</span><i class="fa fa-car" aria-hidden="true"style="color:white">ental-</i><span class="logo-s">S</span><i class="fa fa-car" aria-hidden="true"style="color:white">ystem</i></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php" class="hvr-underline-from-center active">Home</a></li>
							<li><a href="module/vehicle.php" class="hvr-underline-from-center scroll">Available</a></li>
							<li><a href="#about" class="hvr-underline-from-center scroll">About Us</a></li>
							<li><a href="#service" class="hvr-underline-from-center scroll">Deals</a></li>
							<li><a href="#contact" class="hvr-underline-from-center scroll">Contact Us</a></li>
							<li><a href="module/feedback.php" class="hvr-underline-from-center scroll">Feedback</a></li>

						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>		</div>
		<div class="clearfix"></div>
			</div>
				</div>


	</div>
	<div class="banner-bottom" id="available">
				<!--//popular-->
				 <div class="wthree_title_agile">
						        <h3>Most <span>Popular</span> vehicle</h3>
				</div>
						 
						  <div class="inner_w3l_agile_grids">
						<div class="sreen-gallery-cursual">
							
						       <div id="owl-demo" class="owl-carousel">
							      <div class="item-owl">
					                		<div class="test-review">
						                	  <img src="system/images/activa.jpg" class="img-responsive" alt=""/>
									
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
						                	  <img src="system/images/jupiter.png" class="img-responsive" alt=""/>
											 
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="system/images/pep+.jpg" class="img-responsive" alt=""/>
											  
					                	    </div>
					                </div>
									 <div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="system/images/splendor.jpg" class="img-responsive" alt=""/>
											  
					                	    </div>
					                </div>
									<div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="system/images/pulsar.jpg" class="img-responsive" alt=""/>
											 
					                	    </div>
					                </div>
					                <div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="system/images/discover.jpg" class="img-responsive" alt=""/>
										
					                	    </div>
					                </div>
									 
					                 <div class="item-owl">
					                		<div class="test-review">
						                	  <img src="system/images/Etios.jpg" class="img-responsive" alt=""/>
											  
					                	    </div>
					                </div>
									 <div class="item-owl">
					                		<div class="test-review">
						                	  <img src="system/images/Innova.png" class="img-responsive" alt=""/>
											  
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
						                	  <img src="system/images/graysift.jpg" class="img-responsive" alt=""/>
											   
					                	    </div>
					                </div>
					                 
						<!--//screen-gallery-->
				</div>
		  </div>
 </div>
<!-- //banner-bottom -->
									

<!-- about -->
<div class="about" id="about">
		<div class="container">
		 <div class="wthree_title_agile two">
						        <h3>About <span>Us</span></h3>
				</div>
				
		 <div class="inner_w3l_agile_grids">
            <div class="col-md-6 about-left-w3layouts">
				<h6 class="sub">WELCOME TO Vehicle Rental System</h6>
				<p>A vehicle rental system is a vehicle that can be used temporarily for a period of time with a fee.renting a car assist people to get around even they do not have access to their own personal vehicle or dont vehicle at all.so i developed this project vehicle rental system,which provides a basic feature for booking a vehicle. </p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
 </div>
<!--about-section-->

<!-- about -->
<div class="services" id="service">
		<div class="container">
				 <div class="wthree_title_agile">
						        <h3> Today <span>SPECIAL</span>  DEALS </h3>
				</div>
						 
						  <div class="inner_w3l_agile_grids">

<?php
$qry="select rent.rent as orent, deal.rent as nrent,status,vehicle.name,vehicle.photo from vehicle join deal on deal.vid=vehicle.id join rent on rent.vid=vehicle.id group by rent.vid";
$cdetail=fetchAll($qry);
foreach ($cdetail as  $value) {
?>
				<div class="col-md-4 agileits_service_grid_btm_left">
					<div class="agileits_service_grid_btm_left1">
						<div class="agileits_service_grid_btm_left2">
							<h5>Deal 1</h5>
							<h5><?php echo $value['name'];?></h5>
							<p>Normal-Rent:-<?php echo $value['orent'];?> </p>
							<p>Rent:-<?php echo $value['nrent'];?></p>
														
						</div>
						<img src="../admin/system/img/<?php echo $value['photo'];?>" class="img-responsive">
					</div>
				</div>
				<?php }?>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
	<!--//service-section-->
	  		
<!-- //gallery -->
<!-- /contact -->
	<div class="contact" id="contact">
		<div class="container">
				 <div class="wthree_title_agile">
						        <h3> Contact <span>Us</span>  </h3>
<?php
	$contact=fetch("select find,email,`call` from contact where id=1");
?>
	<div class="w3_agile_address">
		<div class="container">
				
			<div class="w3ls_footer_grid">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr">
						<h4>Find Us On:</h4>
						<p><?php echo $contact['find'];?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl email">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr ">
						<h4>Email Us On:</h4>
						<a href="mailto:info@example.com"><?php echo $contact['email'];?></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr">
						<h4>Call Us On:</h4>
						<p><?php echo $contact['call'];?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
<!-- footer -->
	<div class="w3l_footer_agile">
			<p>© 2017 Vehicle Rental. All Rights Reserved | Design by @ns</a></p>
			
		</div>
<!-- //footer -->
	

<script type="text/javascript" src="system/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="system/js/dscountdown.min.js"></script>
<script src="js/demo-1.js"></script>
<script type="text/javascript" src="system/js/move-top.js"></script>
<script type="text/javascript" src="system/js/easing.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="system/js/jquery.flipster.js"></script>
<script>
$(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });
</script>	

							<link href="system/css/owl.carousel.css" rel="stylesheet">
							    <script src="system/js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :5,
									itemsDesktop : [768,4],
									itemsDesktopSmall : [414,3],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination :false,
									
							      });
								  
							    });
							    </script>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<
</body>
</html>