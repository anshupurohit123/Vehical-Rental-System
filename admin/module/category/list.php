<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		delete('category',$id);
		header("location:index.php");	
	}
?>
<table class="table table-striped table-bordered" style="text-align:center; font-size:18px;border:1px solid black;">
    <tr>
<th colspan="3" style="text-align:center;font-size:15pt;color:blue;"> List of Category </th>
</tr>

     <tr>
        <td colspan="3" style="text-align:right;color:blue;"><a href="index.php?mod=category&do=add">Add New</a></td>
    </tr>

	<tr>
    	<td>S.No.</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    <?php
		$qry="select id,name from category";
		$cdetail=fetchAll($qry);
	?>
    <?php
	$sno=1;
		foreach($cdetail as $cdetail){
		?>	
			<tr>
            	<td><?php echo $sno++;?></td>
                <td><?php echo $cdetail['name'];?></td>
                <td><a href="index.php?mod=category&do=add&id=<?php echo $cdetail['id'];?>">Edit</a> || <a href="#" onClick="del('<?php echo $cdetail['id'];?>')">Delete</a></td>
            </tr>
         <?php
		}
	?>
</table>
<script>
	function del(id){
		if(confirm("Do you really want to delete")){
			location.href="index.php?mod=category&do=detail&id="+id;	
		}
	}
</script>