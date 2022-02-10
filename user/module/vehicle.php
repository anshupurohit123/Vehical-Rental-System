<?php 
$in=glob('../system/php/*.php');
foreach($in as $file)
{
	include_once($file);
}?>
<html>
<head>
<link href="../system/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../system/css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel="../stylesheet" href="../system/css/jquery.flipster.css">
		<link rel='stylesheet' href='../system/css/dscountdown.css' type='text/css' media='all' />
<link href="../system/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../system/css/font-awesome.css" rel="stylesheet"> 
<link href="../system///fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="../system///fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="../system///fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>
<body>
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
						<h1><a  href="index.php"><span class="logo-v" style="margin-left:70px;font-size:35pt;">V</span><i class="fa fa-car" aria-hidden="true" style="color:white;margin-top:30px;">ehicle:-  Car / Bike / Scootey</i></a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="../index.php" class="hvr-underline-from-center active "style="font-size:15pt;">Home</a></li>
							
						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>		</div>
		<div class="clearfix"></div>
			</div>
				</div>


<form>

<div class="services" id="service">
		<div class="container">
				 
						 <div class="inner_w3l_agile_grids">
						 	<?php
$qry="select id,name,photo from vehicle";
$cdetail=fetchAll($qry);
// print_r($cdetail);
foreach ($cdetail as  $value) {
?>

						 	<a href="detail.php?id=<?php echo $value['id'];?>">
				<div class="col-md-4 agileits_service_grid_btm_left">
					<div class="agileits_service_grid_btm_left1">
						<img src="../../admin/system/img/<?php echo $value['photo'];?>" style="margin-top:80px;" class="img-responsive">
						<div class="agileits_service_grid_btm_left2">
							<h5><?php echo $value['name'];?></h5>
							</div>
					
					
					</div>
		</div>
	</a>
	<?php }?>

					</div>
		</div>
		</div>
	</form>

<div class="w3l_footer_agile">
			<p>© 2017 Vehicle Rental. All Rights Reserved | Design by @ns</a></p>
			
		</div>
<script type="text/javascript" src="../system/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../system/js/dscountdown.min.js"></script>
<script src="../system/js/demo-1.js"></script>
<script type="text/javascript" src="../system/js/move-top.js"></script>
<script type="text/javascript" src="../system/js/easing.js"></script>
<script src="../system/js/modernizr.custom.js"></script>
<script src="../system/js/jquery.flipster.js"></script>
</body>
</html>