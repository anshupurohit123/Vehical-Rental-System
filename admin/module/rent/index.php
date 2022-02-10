<?php
	$do=(isset($do))?$do:'';
	//echo $do;
	switch($do){
		case 'add':include_once("module/rent/add_edit.php");break;
		case 'detail':include_once("module/rent/list.php");break;
	}
?>