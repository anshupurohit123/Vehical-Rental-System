<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        delete('rent',$id);
        header("location:index.php");   
    }
?>
<table class="table table-striped table-bordered" style="text-align:center; font-size:18px;border:1px solid black;">
    <tr>
<th colspan="6" style="text-align:center;font-size:15pt;color:blue;"> List of user </th>
</tr>

     <tr>
        <td colspan="6" style="text-align:right;color:blue"><a href="index.php?mod=rent&do=add">Add New</a></td>
    </tr>

    
    <tr>
        <td>S.No.</td>
        <td>vid</td>
        <td>Rent</td>
        <td>Extra-rent</td>
        <td>Days</td>
        <td>action</td>
    </tr>
    <?php
        $qry="select id,rent,vid,extra_rent,days from rent ";
        $cdetail=fetchAll($qry);
    ?>
    <?php
    $sno=1;
        foreach($cdetail as $cdetail){
        ?>  
            <tr>
                <td><?php echo $sno++;?></td>
                <td><?php echo ($cdetail['vid'])?$cdetail['vid']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo ($cdetail['rent'])?$cdetail['rent']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo ($cdetail['extra_rent'])?$cdetail['extra_rent']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo($cdetail['days'])?$cdetail['days']:'<span style="color:blue">N/A</span>';?></td>
                <td><a href="index.php?mod=rent&do=add&id=<?php echo $cdetail['id'];?>">Edit</a> || <a href="#" onClick="del('<?php echo $cdetail['id'];?>')">Delete</a></td>
            </tr>
         <?php
        }
    ?>
</table>
<script>
    function del(id){
        if(confirm("Do you really want to delete")){
            location.href="index.php?mod=rent&do=detail&id="+id;   
        }
    }
</script>