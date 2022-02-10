<?php
$id="";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $qury="select vid,rent,status from deal where deal.id=$id";
    $name=fetch($qury);
}
if(isset($_POST['vid'])){
        addUpdate('deal',$_POST,$id);
        header("location:index.php?mod=deal&do=detail");   
    }
    ?>
<html>
<head>
    <title>deal</title>
    <style>
    .panel-primary{

height:250px;
width:100%;

    }
    .panel-heading{

         background-color:saddlebrown;
    }
    .tobp
    {

        margin-top: 70px;
    opacity: 0.7;
    height: 100%;
    width:150%;
    } 
    .lg{
        background-color:663300;
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
.control-label
{
color:663300;
}
.btn-primary{
    background-color:663300;
}
    </style>
<link rel="stylesheet" type="text/css"href="../../../admin/system/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../../../admin/system/css/bootcss/js/jquery.js"/>
<link rel="stylesheet" type="text/css" href="../../../admin/system/css/bootcss/js/bootstrap.min.js"/>
</head>
<body>
    <div class="row" id="loginb">
    <div class="col-lg-3  col-md-6 col-sm-8 col-xs-12 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 ">
        <div class="tobp">
        <div class="panel panel-primary">
            <div class="lg">
            <div class="panel-heading">
                
                <h3>Deal-Form</h3>
            </div>
            </div>
    <div class="panel-body">
    <div class="form-horizontal">
    <form class="form-group" method="POST">
        <label for="input_vid" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">Vid</label>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
<select name="vid">
<option value="">Select user</option>
    <?php
        $clist=fetchAll("select id,name from vehicle");
        foreach($clist as $clist){
    ?>
    
        <option <?php if($id && $name['vid']==$clist['id']){echo "selected";}?> value="<?php echo $clist['id'];?>"><?php echo $clist['name'];?></option>
    <?php }?>
    
    </select>
     <br></div>
                       
        
    <label for="input_name" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">Rent</label>
    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="rent"class="form-control" value="<?php if(isset($name['rent'])){ echo $name['rent'];} ?>" placeholder="Enter rent">
                <br></div>
                 <label for="input_name" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">Status</label>
    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 form-group input-group">
                        <input type="radio"value="yes"  name="status">&nbsp;&nbsp;Yes &nbsp;&nbsp;&nbsp;
                        <input type="radio"value="no" name="status">&nbsp;&nbsp;no &nbsp;&nbsp;&nbsp;&nbsp;
   <br></div>
                
    <button type="submit"class="btn btn-primary col-lg-4 col-md-4 col-sm-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-4 col-xs-offset-1  pull-left"style=" background-color:saddlebrown;font-size:20;border=radius:5px">Submit</button>
    <button type="reset"name="rst" class="btn btn-primary col-lg-4 col-md-4 col-sm-3 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-4 col-xs-offset-1  pull-right" style="margin-right:10px; background-color:saddlebrown;font-size:20;border=radius:5px">Cancel</button>
            


                    </form> 
                </div>
            </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>