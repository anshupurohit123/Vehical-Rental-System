<?php
	$id="";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$qry="select id,name,category from subcategory where id=$id";
		$cdetail=fetch($qry);
	}
	if(isset($_POST['name'])){
		addUpdate('subcategory',$_POST,$id);
		header("location:index.php?mod=sub&do=detail");	
	}
?>
<form method="POST">
<select name="category">
<option value="">Select Category</option>
	<?php
		$clist=fetchAll("select id,name from category");
		foreach($clist as $clist){
	?>
    
    	<option <?php if($id && $cdetail['category']==$clist['id']){echo "selected";}?> value="<?php echo $clist['id'];?>"><?php echo $clist['name'];?></option>
    <?php }?>
    
    </select>
	<input type="text" value="<?php if($id){echo $cdetail['name'];}?>" name="name">
    <input type="submit" value="Submit">
</form>