<?php
	$do=(isset($do))?$do:'';
	//echo $do;
	switch($do){
		case 'entry':include_once("module/login/login.php");break;
		case 'exit':include_once("module/login/logout.php");break;
	}
?>