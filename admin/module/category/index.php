<?php
	$do=(isset($do))?$do:'';
	//echo $do;
	switch($do){
		case 'add':include_once("module/category/add_edit.php");break;
		case 'detail':include_once("module/category/list.php");break;
	}
?>