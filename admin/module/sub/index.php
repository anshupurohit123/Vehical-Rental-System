<?php
	$do=(isset($do))?$do:'';
	//echo $do;
	switch($do){
		case 'add':include_once("module/sub/add_edit.php");break;
		case 'detail':include_once("module/sub/list.php");break;
	}
?>