<?php
	$id="";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$qry="select id,name from category where id=$id";
		$cdetail=fetch($qry);
	}
	if(isset($_POST['name'])){
		addUpdate('category',$_POST,$id);
		header("location:index.php?mod=categorey&do=detail");	
	}
?>
<form method="post">
	<input type="text" value="<?php if($id){echo $cdetail['name'];}?>" name="name">
    <input type="submit" value="Submit">
</form>