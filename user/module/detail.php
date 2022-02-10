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
						<h1><a  href="index.php"><span class="logo-d" style="margin-left:70px;font-size:35pt;">d</span><i class="fa fa-car" aria-hidden="true" style="color:white;margin-top:30px;">etail</i></a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="../index.php" class="hvr-underline-from-center active "style="font-size:15pt;">Home</a></li>
							<li><a href="vehicle.php" class="hvr-underline-from-center active "style="font-size:15pt;">Vehicle</a></li>
							
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
			<?php
			$qry="select Vehicle.photo from vehicle where id=$_GET[id]";
$cdetail=fetchAll($qry);

foreach ($cdetail as  $value) {
?>

				 
						 <div class="inner_w3l_agile_grids"style=" margin-left:450px;height:150px;width:100%;margin-top:15px;">
						 	
				<div class="col-md-4 agileits_service_grid_btm_left" style="min-height:500px">
					<div class="agileits_service_grid_btm_left1">
						<img src="../../admin/system/img/<?php echo $value['photo'];?>" style="margin-top:80px;" class="img-responsive">
						<div class="agileits_service_grid_btm_left2">
<table class="table table-striped table-bordered" style="text-align:center; font-size:18px;border:1px solid black; ">
    <tr>
<th colspan="4" style="text-align:center;font-size:15pt"> Days According Rent </th>
</tr>

    
    
    <tr>
        <td>S.No.</td>
        <td>Rent</td>
        <td>Extra-rent</td>
        <td>Days</td>
    </tr>
    <?php
        $qry="select id,rent,extra_rent,days from rent where vid=$_GET[id]";
        $cdetail=fetchAll($qry);
        //print_r($cdetail);
    ?>
    <?php
    $sno=1;
        foreach($cdetail as $cdetail){
        ?>  
            <tr>
                <td><?php echo $sno++;?></td>
                <td><?php echo ($cdetail['rent'])?$cdetail['rent']:'<span style="color:black">N/A</span>';?></td>
               <td><?php echo ($cdetail['extra_rent'])?$cdetail['extra_rent']:'<span style="color:black">N/A</span>';?></td>
                <td><?php echo($cdetail['days'])?$cdetail['days']:'<span style="color:black">N/A</span>';?></td>
</tr>
<?php
}
?>
</table>
</div>
					</div>			
					
		</div>
				</div>
				
</div>
<?php }?>
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