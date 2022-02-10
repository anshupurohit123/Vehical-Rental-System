<?php
session_start();
ob_start(); 
$in=glob('../../system/php/*.php');
foreach($in as $file)
{
	include_once($file);
}
$wh=" where 1 ";
if ($_POST['adharno']) {
	$wh.=" and adharno like '$_POST[adharno]%'";
}
?>
<table class="table table-striped"  border="1px solid black" style="min-height:500px; width:50%; margin:0px auto;">
	<tr class="success">
	<th colspan="4" style="text-align:center; font-size:20px;">Issue-search-list</th> 
	</tr>
	<tr>
    	<td colspan="4"><a href="index.php?mod=issue&do=add" style="float:right;">Add New user</a></td>
    </tr>
    
	<tr class="success" style="font-size:15px; font-weight:bold;">
    	<td>S.No.</td>
        <td>Name</td>
        <td>Adharno</td>
        <td>Action</td>
    </tr>
    <?php
		$qry="select id,name,adharno from issue $wh";
		$cdetail=fetchAll($qry);

	$sno=1;
		foreach($cdetail as $cdetail){
		?>	
			<tr>
            	<td><?php echo $sno++;?></td>
                <td><?php echo $cdetail['name'];?></td>
                <td><?php echo $cdetail['adharno'];?></td>
                <td><a href="index.php?mod=issue&do=add&id=<?php echo $cdetail['id'];?>">Edit</a> || <a href="#" onClick="del('<?php echo $cdetail['id'];?>')">Delete</a></td>
            </tr>
         <?php
		}
	?>
</table>
