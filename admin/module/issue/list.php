<?php

if(isset($_GET['iid']) && $_GET['iid']){
    $datee=date('Y-m-d');
    $iid=$_GET['iid'];
    $arr=array('recive_date'=>$datee);
    addUpdate('issue',$arr,$iid);
    $arr=array('available'=>'yes');
    $vehicle_id=fetch("select vid from issue where id=$iid");
    $vvid=$vehicle_id['vid'];
    addUpdate('vehicle',$arr,$vvid);
}
    if(isset($_GET['id'])){

        $id=$_GET['id'];
        delete('issue',$id);
        header("location:index.php?mod=issue&do=detail");   
    }
?>
<link rel="stylesheet" type="text/css" href="../admin/system/css/fontaw/css/font-awesome.min.css"/>
<table class="table table-striped" border="1px solid black" style="height:50%; width:50%; margin:0px auto;float:left;">
    <tr>
        <td colspan="4">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5">
<label for="input_name-search" style="font-size:15px;margin-top:10px;" class="control-label"> Name-Search</label>
</div>
   
            <div class="col-lg-8 col-md-5 col-sm-6 col-xs-5 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4  form-group input-group" style="margin-top:7px;">
                            <span class="input-group-addon">
            <i class="fa fa-search">
            </i>
          </span> <input type="text" onKeyup="search(this.value)" id="pl" class="form-control">
      </div>
  </td>

          <td colspan="4">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5">
<label for="input_adharno" style="font-size:15px;margin-top:10px;" class="control-label"> Adharno-Search</label></div>
   
            <div class="col-lg-8 col-md-5 col-sm-6 col-xs-5 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4  form-group input-group" style="margin-top:7px;">
                            <span class="input-group-addon">
            <i class="fa fa-search">
            </i>
          </span> <input type="text" onKeyup="asearch(this.value)" id="p2" class="form-control">
      </div>
  </td>

    </tr>
    </table>
<table class="table table-striped table-bordered" style="text-align:center; font-size:18px;border:1px solid black;" id="show">
    <tr>
<th colspan="17" style="text-align:center;font-size:15pt;color:blue;"> List of issue </th>
</tr>

     <tr>
        <td colspan="17" style="text-align:right;color:blue"><a href="index.php?mod=issue&do=add">Add New</a></td>
    </tr>
    <tr>
        <td>S.No.</td>
        <td>vid</td>
        <td>photo</td>
        <td>Days</td>
        <td>rent</td>
        <td>extra_rent</td>
        <td>name</td>
        <td>mobileno</td>
        <td>adharno</td>
        <td>issuedate</td>
        <td>killometers</td>
        <td>irent</td>
        <td>Recive_date</td>
        <td>photo</td>
        <td>action</td>
    </tr>
    <?php
        $qry="select issue.id,vid,days, rent, extra_rent ,vehicle.name as vec,vehicle.photo as ph,issue.name,mobileno,adharno,issuedate,killometers,irent,recive_date,issue.photo from issue join vehicle on issue.vid=vehicle.id";
        //echo "select issue.id,vid,days, rent, extra_rent ,vehicle.name as vec,vehicle.photo as ph,issue.name,mobileno,adharno,issuedate,killometers,irent,recive_date,issue.photo from issue join vehicle on issue.vid=vehicle.id";
    $cdetail=fetchAll($qry);
    ?>
    <?php
    $sno=1;
        foreach($cdetail as $cdetail){
        ?>  
            <tr>
                <td><?php echo $sno++;?></td>
                <td><?php echo ($cdetail['vec'])?$cdetail['vec']:'<span style="color:black">N/A</span>';?></td>
                <td>
<?php
        if(isset($cdetail['ph'])){
        ?>
            <img src="system/img/<?php echo $cdetail['ph'];'<span style="color:black">N/A</span>';?>" height="100px" width="100px">
        <?php   
        }
    ?>

</td>
<td><?php echo ($cdetail['days'])?$cdetail['days']:'<span style="color:blue">N/A</span>';?></td>

                <td><?php echo ($cdetail['rent'])?$cdetail['rent']:'<span style="color:blue">N/A</span>';?></td>
               <td><?php echo ($cdetail['extra_rent'])?$cdetail['extra_rent']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo ($cdetail['name'])?$cdetail['name']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo ($cdetail['mobileno'])?$cdetail['mobileno']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo ($cdetail['adharno'])?$cdetail['adharno']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo($cdetail['issuedate'])?$cdetail['issuedate']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo($cdetail['killometers'])?$cdetail['killometers']:'<span style="color:blue">N/A</span>';?></td>
                <td><?php echo($cdetail['irent'])?$cdetail['irent']:'<span style="color:blue">N/A</span>';?></td>
    <td><?php echo($cdetail['recive_date'])?$cdetail['recive_date']:'<span style="color:blue">N/A</span>';?></td>
    <td>
<?php
        if(isset($cdetail['photo'])){
        ?>
            <img src="system/img/<?php echo $cdetail['photo'];'<span style="color:black">N/A</span>';?>" height="100px" width="100px">
        <?php   
        }
    ?>
</td>
    

                <td><a href="index.php?mod=issue&do=add&id=<?php echo $cdetail['id'];?>">Edit</a> || <a href="#" onClick="del('<?php echo $cdetail['id'];?>')">Delete</a>|| <?php if($cdetail['recive_date']==''){?> <a href="index.php?mod=issue&do=detail&iid=<?php echo $cdetail['id'];?>">Recive</a> <?php }else{echo "sumited";}?></td>
            </tr>
         <?php
        }
    ?>
</table>
<script>
    function del(id){
        if(confirm("Do you really want to delete")){
        location.href="index.php?mod=issue&do=detail&id="+id;  
        }
    }
    function search(name){
        $.ajax({
            url:"module/issue/islist.php",
            data:"name="+name,
            type:'POST',
            success:function(rs)
            {
                //alert("hi");
                $('#show').html(rs);
            },
            //error:function(){
             //   alert("error hai");
            //}
    });

}
 function asearch(adharno){
        $.ajax({
            url:"module/issue/alist.php",
            data:"adharno="+adharno,
            type:'POST',
            success:function(rs)
            {
                //alert("hi");
                $('#show').html(rs);
            },
            //error:function(){
             //   alert("error hai");
            //}
    });

}
</script>