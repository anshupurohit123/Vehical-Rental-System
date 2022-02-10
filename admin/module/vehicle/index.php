<?php
	$do=(isset($do))?$do:'';
	//echo $do;
	switch($do){
		case 'add':include_once("module/vehicle/add_edit.php");break;
		case 'detail':include_once("module/vehicle/list.php");break;
	}
?>