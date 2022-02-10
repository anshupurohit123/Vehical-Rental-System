<?php
	$do=(isset($do))?$do:'';
	//echo $do;
	switch($do){
		case 'add':include_once("module/contact/add_edit.php");break;
		case 'detail':include_once("module/contact/list.php");break;
	}
?>