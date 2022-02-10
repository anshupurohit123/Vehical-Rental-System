<?php
session_start();
ob_start(); 
$in=glob('system/php/*.php');
foreach($in as $file)
{
	include_once($file);
}
$mod='login';
$do='entry';
if (isset($_SESSION['logindtl'])){
	if(isset($_GET['mod']) && $_GET['do']!='entry')
	{
		$mod=$_GET['mod'];
		$do=(isset($_GET['do']))?$_GET['do']:'';
	}

else
{
	$mod="vehicle";
	$do="detail";
}
if($mod!='login' && $do!='entry')
include_once("header.php");
}
if(is_file("module/$mod/index.php")){
include_once("module/$mod/index.php");
}else{
	echo "Not found";
	}
include_once("footer.php");
?>
