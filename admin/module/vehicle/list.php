<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        delete('vehicle',$id);
        header("location:index.php");   
    }
?>
<link rel="stylesheet" type="text/css" href="../admin/system/css/fontaw/css/font-awesome.min.css"/>
<table class="table table-striped" border="1px solid black" style="height:30px; width:30%; margin:0px auto;float:left;">
    <tr>


        <td colspan="4">
            <h3 style="text-align:center;font-size:18pt;color:blue;">Searching</h3>
<label for="input_search" style="font-size:15px;margin-top:10px;" class="col-lg-2 col-md-4 col-sm-4 col-xs-5 control-label">Name_search</label>
   
            <div class="col-lg-8 col-md-5 col-sm-5 col-xs-5 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4  form-group input-group" style="margin-top:7px;">
                            <span class="input-group-addon">
            <i class="fa fa-search">
            </i>
          </span> <input type="text" onKeyup="search(this.value)" id="pl" class="form-control">
      </div></td>

    </tr>
    </table>
<table class="table table-striped table-bordered" style="text-align:center; font-size:18px;border:1px solid black;" id="show">
    <tr>
<th colspan="14" style="text-align:center;font-size:15pt;color:blue;"> List of User </th>
</tr>

     <tr>
        <td colspan="14" style="text-align:right;"><a href="index.php?mod=vehicle&do=add">Add New</a></td>
    </tr>
   
    <tr>
        <td>S.No.</td>
        <td>Name</td>
        <td>Company</td>
        <td>Model</td>
        <td>Date</td>
        <td>Available</td>
        <td>Vehicle_no</td>
        <td>Chesis_no</td>
        <td>Engine_no</td>
        <td>Category</td>
        <td>Subcategory</td>
        <td>Photo</td>
     <td>Action</td>

    </tr>
    <?php
        $qry="select vehicle.id,vehicle.name,company,model,`date`,available,vehicle_no,chesis_no,engine_no,category.name as category,subcategory.name as subcategory,photo from vehicle join category on category=category.id join subcategory on subcategory=subcategory.id where available='yes'";
        //echo $qry;
        $cdetail=fetchAll($qry);
        //print_r($cdetail);

    ?>
    <?php
    $sno=1;
        foreach($cdetail as $cdetail){
        ?>  
            <tr>
                <td><?php echo $sno++;?></td>
                <td><?php echo ($cdetail['name'])?$cdetail['name']:'<span style="color:black">N/A</span>';?></td>
            
                <td><?php echo ($cdetail['company'])?$cdetail['company']:'<span style="color:black">N/A</span>';?></td>
            <td><?php echo($cdetail['model'])?$cdetail['model']:'<span style="color:blue">N/A</span>';?></td>
            <td><?php echo($cdetail['date'])?$cdetail['date']:'<span style="color:blue ">N/A</span>';?></td>
<td><?php echo($cdetail['available'])?$cdetail['available']:'<span style="color:blue">N/A</span>';?></td>            <td><?php echo ($cdetail['vehicle_no'])?$cdetail['vehicle_no']:'<span style="color:black">N/A</span>';?></td>
            <td><?php echo( $cdetail['chesis_no'])?$cdetail['chesis_no']:'<span style="color:blue">N/A</span>';?></td>
            <td><?php echo ($cdetail['engine_no'])?$cdetail['engine_no']:'<span style="color:blue">N/A</span>';?></td>
            <td><?php echo ($cdetail['category'])?$cdetail['category']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo ($cdetail['subcategory'])?$cdetail['subcategory']:'<span style="color:blue">N/A</span>';?></td>
                
            <td>
<?php
        if(isset($cdetail['photo'])){
        ?>
            <img src="system/img/<?php echo $cdetail['photo'];'<span style="color:black">N/A</span>';?>" height="100px" width="100px">
        <?php   
        }
    ?>

</td>


            <td><a href="index.php?mod=vehicle&do=add&id=<?php echo $cdetail['id'];?>">Edit</a> || <a href="#" onClick="del('<?php echo $cdetail['id'];?>')">Delete</a>||<a href="index.php?mod=issue&do=add&vid=<?php echo $cdetail['id'];?>">issue</a></td>
            </tr>
         <?php
        }
    ?>
</table>
<script>
    function del(id){
        if(confirm("Do you really want to delete")){
            location.href="index.php?mod=vehicle&do=detail&id="+id;   
        }
    }
    function search(name){
        $.ajax({
            url:"module/vehicle/vslist.php",
            data:"name="+name,
            type:'POST',
            success:function(rs)
            {
                //alert("hi");
                $('#show').html(rs);
            },
            error:function(){
                //alert("error hai");
            }
    });

}
</script>
    