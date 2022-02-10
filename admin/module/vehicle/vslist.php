<?php
session_start();
ob_start(); 
$in=glob('../../system/php/*.php');
foreach($in as $file)
{
	include_once($file);
}
$wh=" where 1 and available='yes' ";
if ($_POST['name']) {
	$wh.=" and name like '$_POST[name]%'";
}
?>
<table class="table table-striped"  border="1px solid black" style="min-height:500px; width:50%; margin:0px auto;">
	<tr class="success">
	<th colspan="3" style="text-align:center; font-size:20px;">List Of vehicle</th> 
	</tr>
    
	<tr class="success" style="font-size:15px; font-weight:bold;">
    	<td>S.No.</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    <?php
		$qry="select id,name from vehicle $wh";
		//echo $qry;
		$cdetail=fetchAll($qry);

	$sno=1;
		foreach($cdetail as $cdetail){
		?>	
			<tr>
            	<td><?php echo $sno++;?></td>
                <td><?php echo $cdetail['name'];?></td>
                <td><a href="index.php?mod=vehicle&do=add&id=<?php echo $cdetail['id'];?>">Edit</a> || <a href="#" onClick="del('<?php echo $cdetail['id'];?>')">Delete</a></td>
            </tr>
         <?php
		}
	?>
</table>
