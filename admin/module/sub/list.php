<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		delete('subcategory',$id);
		header("location:index.php");	
	}
?>
<table class="table table-striped table-bordered" style="text-align:center; font-size:18px;border:1px solid black;">
    <tr>
<th colspan="4" style="text-align:center;font-size:15pt">subcategory list</th>
</tr>

     <tr>
        <td colspan="4" style="text-align:right;color:black"><a href="index.php?mod=sub&do=add">Add New</a></td>
    </tr>
   

<tr>
    	<td>S.No.</td>
        <td>Category</td>
        <td>SubCategory Name</td>
        <td>Action</td>
    </tr>
    <?php
		$qry="select subcategory.id,category,subcategory.name as sub, category.name as cat  from category join subcategory on category=category.id";
		$cdetail=fetchAll($qry);
	?>
   
    <?php
	$sno=1;
		foreach($cdetail as $cdetail){
		?>	
			<tr>
            	<td><?php echo $sno++;?></td>
                <td><?php echo $cdetail['cat'];?></td>
                <td><?php echo $cdetail['sub'];?></td>
                <td><a href="index.php?mod=sub&do=add&id=<?php echo $cdetail['id'];?>">Edit</a> || <a href="#" onClick="del('<?php echo $cdetail['id'];?>')">Delete</a></td>
            </tr>
         <?php
		}
	?>
</table>
<script>
	function del(id){
		if(confirm("Do you really want to delete")){
			location.href="index.php?mod=sub&do=detail&id="+id;	
		}
	}
</script>