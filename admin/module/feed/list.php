<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        delete('feedback',$id);
        header("location:index.php");   
    }
?>
<table class="table table-striped table-bordered" style="text-align:center; font-size:18px;border:1px solid black;">
    <tr>
<th colspan="4" style="text-align:center;font-size:15pt;color:blue;"> List of user </th>
</tr>

     <tr>
        <td colspan="4" style="text-align:right;color:blue"><a href="index.php?mod=feed&do=add">Add New</a></td>
    </tr>

    
    <tr>
        <td>S.No.</td>
        <td>Messagebox</td>
        <td>Email</td>
          <td>action</td>
    </tr>
    <?php
        $qry="select id,msgbox,email from feedback ";
        $cdetail=fetchAll($qry);
    ?>
    <?php
    $sno=1;
        foreach($cdetail as $cdetail){
        ?>  
            <tr>
                <td><?php echo $sno++;?></td>
                <td><?php echo ($cdetail['msgbox'])?$cdetail['msgbox']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo ($cdetail['email'])?$cdetail['email']:'<span style="color:blue">N/A</span>';?></td>
                <td><a href="index.php?mod=feed&do=add&id=<?php echo $cdetail['id'];?>">Edit</a> || <a href="#" onClick="del('<?php echo $cdetail['id'];?>')">Delete</a></td>
            </tr>
         <?php
        }
    ?>
</table>
<script>
    function del(id){
        if(confirm("Do you really want to delete")){
            location.href="index.php?mod=feed&do=detail&id="+id;   
        }
    }
</script>