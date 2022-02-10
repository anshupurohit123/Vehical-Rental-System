<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $mod="home";
    if(isset($_GET['mod'])){
      $mod=$_GET['mod'];
    }
    $pdata=fetch("select id,pagename,title from title where pagename='$mod'");
  ?>
  <title><?php echo $pdata['title'];?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="system/css/bootstrap.min.css">
<style>
.navbar-inverse{
min-height: 50px;
  background-image:url('system/bikepic/bn.jpg');
}
#vrs{
  margin-top: 20px;
font-size: 25pt;
color:blue;
}
#myNavbar{

font-size: 15pt;
float:right;

}
#myNavbar ul li a{ 
  color :black;
}
#myNavbar ul li a:hover{
background-color: red;
  color: blue;

/*.h li a hover:{

  background-color:blue;
}*/
.lg{
  font-size: 20pt;
}
.lt{
  font-size: 20pt;
}

</style>

  <script src="system/css/jquery.js.js"></script>
  <script src="system/css/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <a class="navbar-brand"href="#" id="vrs">Vehicle-Rental-System</a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li class=""><a href="index.php?mod=vehicle&do=detail">Vehicle</a></li>
        <li class=""><a href="index.php?mod=rent&do=detail">Rent</a></li>
        <li class=""><a href="index.php?mod=issue&do=detail">Issue</a></li>
        <li class=""><a href="index.php?mod=contact&do=detail">Contact</a></li>
        <li class=""><a href="index.php?mod=deal&do=detail">Deal</a></li>
        <li class=""><a href="index.php?mod=feed&do=detail">Feedback</a></li>
       <li class=""><a href="index.php?mod=category&do=detail">Category</a></li>
        <li class=""><a href="index.php?mod=sub&do=detail">Subcategory</a></li>
      <ul class="nav navbar-nav navbar-right">
       
      <li class="lt"> <a href="index.php?mod=login&do=exit" style="font-size:20px"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
   </div>
 </div>
 </div>
</nav>
<div id="container">
<aside id="middle">
