<?php
session_start();
ob_start(); 
$in=glob('../../system/php/*.php');
foreach($in as $file)
{
	include_once($file);
}
?>
	<option value="">Select subcategory</option>
<?php
extract($_POST);
$qry="select id,name from subcategory where category= $category";
$sublist=fetchAll($qry);
foreach ($sublist as $sublist) {
	?>
	<option <?php if($subcategory==$sublist['id']){echo "selected";}?> value="<?php echo $sublist['id'];?>"> <?php echo $sublist['name'];?> </option>
	<?php 
}
?>