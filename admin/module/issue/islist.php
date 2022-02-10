<?php
session_start();
ob_start(); 
$in=glob('../../system/php/*.php');
foreach($in as $file)
{
	include_once($file);
}
$wh=" where 1 ";
if ($_POST['name']) {
	$wh.=" and name like '$_POST[name]%'";
}
?>
<table class="table table-striped"  border="1px solid black" style="min-height:500px; width:50%; margin:0px auto;">
	<tr class="success">
	<th colspan="3" style="text-align:center; font-size:20px;">issue</th> 
	</tr>
	<tr>
    	<td colspan="3"><a href="index.php?mod=issue&do=add" style="float:right;">Add New user</a></td>
    </tr>
    
	<tr class="success" style="font-size:15px; font-weight:bold;">
    	<td>S.No.</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    <?php
		$qry="select id,name from issue $wh";
		$cdetail=fetchAll($qry);

	$sno=1;
		foreach($cdetail as $cdetail){
		?>	
			<tr>
            	<td><?php echo $sno++;?></td>
                <td><?php echo $cdetail['name'];?></td>
                <td><a href="index.php?mod=issue&do=add&id=<?php echo $cdetail['id'];?>">Edit</a> || <a href="#" onClick="del('<?php echo $cdetail['id'];?>')">Delete</a></td>
            </tr>
         <?php
		}
	?>
</table>
