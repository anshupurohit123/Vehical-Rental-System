<?php
//session_start();
//ob_start();
$error="";
if(isset($_POST['username'])){
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	if($username && $password)
{
$qry="select id,username,password from login where username='$username' and password='$password'";
if(totalrow($qry))
{
$_SESSION['logindtl']=fetch($qry);
header("location:index.php?mod=vehicle&do=detail");
}
else
{
	$_SESSION['error']="please enter correct username and password";
}
}
else{
	$_SESSION['error']="please enter both username and password";
}
}
?>
<html>
<head>
	<style>

	.bg
	{
		background-image:url('../admin/system/bikepic/images (3).jpg');
		height:100%;
		width:100%;
		opacity:0.9;
		background-size: cover;
	}
	.tobp
	{
		margin-top: 100px;
	opacity: 0.7;
	height: 100%;
	width:100%;
	} 
	.lg{
		background-color:black;
	}
	#loginb{
width: 110%;


	}
.lg h3
{
	color: white;
	text-align: center;
font-size: 30;
}
.control-label
{
color:black;
}
.btn-primary{
	background-color: black;
}
	</style>
	<link rel="stylesheet" type="text/css"href="../admin/system/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../admin/system/css/bootcss/js/jquery.js"/>
<link rel="stylesheet" type="text/css" href="../admin/system/css/bootcss/js/bootstrap.min.js"/>
<link rel="stylesheet" type="text/css" href="../admin/system/css/fontaw/css/font-awesome.min.css"/>
</head>
<body>
	<div class="bg">
		<nav class="navbar navbar-inverse" style="background-image:url('../admin/system/bikepic/bn.jpg'); line-height:100px;height:100px;">
<div class="container-fluid">
<div class="navbar-header">
	<div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 col-lg-offset-6 col-md-offset-4 col-sm-offset-4 col-offset-xs-12 ">

       <a  class="navbar-brand" style="color:black;font-size:30pt;margin-top:20px;font-family:Comic Sans MS, cursive, sans-serif; text-align:center;" href="#">Vehicle Rental System</a>
</div>
							</div>
              				</div>
						</nav>
<div class="row" id="loginb">
	<div class="col-lg-4  col-md-6 col-sm-8 col-xs-12 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 ">
		<div class="tobp">
		<div class="panel panel-primary">
			<div class="lg">
			<div class="panel-heading">
				<h3>Login Form</h3>
			</div>
			</div>
	<div class="panel-body">
	<div class="form-horizontal">
	<form class="form-group" method="POST">

	<label for="input_username" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">Username</label>
	<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
							<input type="text" name="username"class="form-control" placeholder="Enter Username">
				<br>
	</div>
				<label for="input_password" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">Password</label>
				<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
				<span class="input-group-addon">
							<i class="fa fa-keyboard-o" aria-hidden="true"></i>
				</span>
							<input type="password" name="password"class="form-control" placeholder="Enter Password" pattern="(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one uppercase and lowercase letter, and at least 6 or more characters">
						<br></div>
						<div style="color:red;font-size:15pt;margin-left:15px;"><?php
if (isset($_SESSION['error'])) { echo $_SESSION['error'];
		unset($_SESSION['error']);}?><br></div>

		
	<button type="submit" name="sub"class="btn btn-primary col-lg-4 col-md-4 col-sm-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-4 col-xs-offset-1  pull-left"style="background-color:black;font-size:20;border=radius:5px">Login</button>
	<button type="reset"name="rst" class="btn btn-primary col-lg-4 col-md-4 col-sm-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-4 col-xs-offset-1  pull-right" style="margin-right:10px; background-color:black;font-size:20;border=radius:5px">Cancel</button>
			


					</form> 
				</div>
			</div>
	</div>
</div>
</div>
</div>
</div>


	</body>
</html>
