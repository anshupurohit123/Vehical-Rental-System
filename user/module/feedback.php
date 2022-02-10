<?php
$in=glob('../system/php/*.php');
foreach($in as $file)
{
	include_once($file);
}
if(isset($_POST['email']))
	{
		addUpdate('feedback',$_POST);
        header("location:../index.php");   
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

<link href="../system/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../system/css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../system/css/jquery.flipster.css">
		<link rel='stylesheet' href='system/css/dscountdown.css' type='text/css' media='all' />
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
						<h1><a  href="index.php"><span class="logo-v" style="margin-left:40px;font-size:35pt;">f</span><i class="fa fa-car" aria-hidden="true" style="color:white;">eedback :-</i></a></h1>
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


				
				 <div class="wthree_title_agile">
						        <h3> <span>Feedback</span>  </h3>
				
		<form method="post">				 
		<div class="contact-agile" id="contact">
		<div class="contact-middle" style="height:50px;width:80%;">
					
					<div class="input-w3ls" >
						<p style="font-size:15pt;color:white">Your Email</p>
						<input type="email" name="email" value="<?php if(isset($email['email'])){ echo $email['email'];} ?>">
					</div>
					<button type="send" class="btn btn-primary col-lg-4 col-md-4 col-sm-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-4 col-xs-offset-1  pull-left"style="background-color:black;font-size:15pt;border=radius:5px;margin-top:15px;">Send</button>
   
			</div>
		<div class="contact-middle" style="height:50px;width:80%;">

					<div class="input-w3ls" >
						<p style="font-size:15pt;color:white">Messagebox</p>
						<input type="msgbox" name="msgbox" value="<?php if(isset($email['msgbox'])){ echo $email['msgbox'];} ?>" required="" />
					</div>
					<button type="send" class="btn btn-primary col-lg-4 col-md-4 col-sm-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-4 col-xs-offset-1  pull-left"style="background-color:black;font-size:15pt;border=radius:5px;margin-top:15px;">Send</button>
   
					</div>
				</div>
</div>
         </form>
			
<script type="text/javascript" src="../system/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../system/js/dscountdown.min.js"></script>
<script src="../system/js/demo-1.js"></script>
<script type="text/javascript" src="../system/js/move-top.js"></script>
<script type="text/javascript" src="../system/js/easing.js"></script>
<script src="../system/js/modernizr.custom.js"></script>
<script src="../system/js/jquery.flipster.js"></script>
</body>
</html>
		