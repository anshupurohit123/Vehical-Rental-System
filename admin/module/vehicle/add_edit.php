    <?php
$id="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$qury="select vehicle.id,vehicle.name,company,model,date,available,vehicle_no, chesis_no, engine_no,vehicle.category,vehicle.subcategory,photo from vehicle join subcategory on vehicle.subcategory=subcategory.id join category on vehicle.category=category.id where vehicle.id=$id";
    $name=fetch($qury);
    //echo "$qury";
    //print_r($name);
}
if(isset($_POST['name'])){
    //echo "hi";exit;
    $success=1;
      if(!($_POST['name'])){
            $_SESSION['ename']="Enter your name";
            $success=0;
        }else if(!preg_match("/^[a-z A-Z ]*$/",$_POST['name'])){
            $_SESSION['ename']="Enter your proper name";
            $success=0;
        }
        if(!($_POST['vehicle_no'])){
            $_SESSION['vehicle']="Enter vehicle no";
            $success=0;
        }else if(!preg_match('/^[1-9][0-9]*$/',$_POST['vehicle_no'])){
            $_SESSION['vehicle']="Enter proper vehicle no";
            $success=0;
        }
        if($success){
if(isset($_FILES['photo']['name'])){
            if(isset($name['photo']) && $name['photo']){
                    unlink("system/img/$name[photo]"); 
                }
                if($_FILES['photo']['type']=='image/jpeg' || $_FILES['photo']['type']=='image/png'){
                $_POST['photo']=time()."_".$_FILES['photo']['name'];
                move_uploaded_file($_FILES['photo']['tmp_name'],'system/img/'.$_POST['photo']);
            }
        }
        addUpdate('vehicle',$_POST,$id);
        header("location:index.php?mod=vehicle&do=detail");   
    }
}
    ?>
<html>
<head>
    
    <title>Vehicle</title>
    <style>
    .panel-primary{


width: 100%;

    }
    .panel-heading{
       background-color:saddlebrown;
    }
    .tobp
    {

        margin-top: 5px;
    opacity: 0.7;
    height: 60%;
    width:160%;
    } 

    #loginb{
width: 100%;
}
.lg h3
{
    color: white;
    text-align: center;
font-size: 30;
}

    </style>
</head>
<body>
    <div class="row" id="loginb">
    <div class="col-lg-4  col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 ">
        <div class="tobp">
        <div class="panel panel-primary">
            <div class="lg">
            <div class="panel-heading">
                
                <h3>Vehicle-Form</h3>
            </div>
            </div>
    <div class="panel-body">
    <div class="form-horizontal">
    <form class="form-group" method="POST" enctype="multipart/form-data">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
        <label for="input_name" class="control-label">Name</label></div>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="name"class="form-control" value="<?php if(isset($name['name'])){ echo $name['name'];} else if(isset($_POST['name'])){echo $_POST['name'];}  ?>" placeholder="Enter name">
                <br>
<span><?php if(isset($_SESSION['ename'])){echo $_SESSION['ename']; unset($_SESSION['ename']);}?>
</span>
            </div>

    
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
                <label for="input_company" class="control-label">Company</label></div>
                <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
                <span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>

                </span>
                            <input type="company" name="company"class="form-control" value="<?php if(isset($name['company'])){ echo $name['company'];} ?>"placeholder="Enter company">
                        <br></div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
                                        <label for="input_model" class="control-label">Model</label>
                                    </div>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hiddkeyboard-oen="true"></i>
                        </span>
                            <input type="text" name="model"class="form-control" value="<?php if(isset($name['model'])){ echo $name['model'];} ?>" placeholder="Enter model">
                <br></div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
  <label for="input_date" class=" control-label">Date</label>
</div>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="date"class="form-control"value="<?php if(isset($name['date'])){ echo $name['date'];} ?>" placeholder="Enter date">
                <br></div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
  
 <label for="input_available" class="control-label">Available</label></div>
                        <input type="radio"value="yes"  name="available">&nbsp;&nbsp;Yes &nbsp;&nbsp;&nbsp;
                        <input type="radio"value="no" name="available">&nbsp;&nbsp;no &nbsp;&nbsp;&nbsp;&nbsp;
   <br></div>
   <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
  
<label for="input_vehicle" class="control-label">Vehicle_Number</label>
</div>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="vehicle_no"class="form-control" value="<?php if(isset($name['vehicel_no'])){ echo $name['vechiel_no'];} else if(isset($_POST['vehicle_no'])) { echo $_POST['vehicle_no'];} ?>"placeholder="Enter vnumber">
                <br>
<?php if(isset($_SESSION['vehicle'])){echo $_SESSION['vehicle']; unset($_SESSION['vehicle']);}?>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
  <label for="input_engine" class="control-label">Engine_number</label>
</div>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="engine_no"class="form-control" value="<?php if(isset($name['engine_no'])){ echo $name['engine_no'];} ?>" placeholder="Enter enumber">
                <br></div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
  <label for="input_chesis" class="control-label">Chesis_number</label>
</div>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="chesis_no"class="form-control" value="<?php if(isset($name['chesis_no'])){ echo $name['chesis_no'];} ?>" placeholder="Enter cnumber">
                <br></div>
                <label for="input_category" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">category</label>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        </span>
                <select name="category" onchange="shlist(this.value,'')">
<option value="">Select Category</option>
    <?php
        $clist=fetchAll("select id,name from category");
        foreach($clist as $clist){
    ?>
    
        <option <?php if($id && $name['category']==$clist['id']){echo "selected";}?> value="<?php echo $clist['id'];?>"><?php echo $clist['name'];?></option>
     <?php }?>
    
    </select>
    <br></div>
    <label for="input_subcategory" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">subcategory</label>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        </span>
                
    <select id="subcategory" disabled name="subcategory">
        <option >Select Category First</option>
    </select>
<br></div>
    
                
        <label for="input_photo" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">photo</label>
                <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
                <span class="input-group-addon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </span>
                <?php
        if(isset($name['photo']) && $name['photo']){
        ?>
        <img src="system/img/<?php echo $name['photo'];?>" height="100px" width="100px"></td></tr>
        <?php
        }
    ?>
                      <input type="file" name="photo"class="form-control">
                        <br></div>


    <button type="submit" class="btn btn-primary col-lg-4 col-md-4 col-sm-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-4 col-xs-offset-1  pull-left"style="background-color:saddlebrown;font-size:20pt;border=radius:5px">Submit</button>
    <button type="reset"name="rst" class="btn btn-primary col-lg-4 col-md-4 col-sm-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-4 col-xs-offset-1  pull-right" style="margin-right:10px; background-color:saddlebrown;font-size:20pt;border=radius:5px">Cancel</button>
            


                    </form> 
                </div>
            </div>
    </div>
</div>
</div>
</div>

<script type="text/javascript">

function shlist(category,subcategory){
    //alert(subcategory);
if(category){
    $.ajax({
        url:"module/vehicle/slist.php",
        data:"category="+category+"&subcategory="+subcategory,
        type:'POST',
        success:function(rs)
        {
            //alert("hi");
            $('#subcategory').html(rs);
            $('#subcategory').removeAttr('disabled');
        }
    });
}
else{
    $('#subcategory').attr('disabled','disabled');
}
}
    </script>

<?php
    if($id){?>
<script type="text/javascript">
    //alert("hi");
        shlist('<?php echo $name['category'];?>','<?php echo $name['subcategory'];?>');
</script>
        <?php }?>

</body>
</html>