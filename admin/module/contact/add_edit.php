<?php
$id="";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $qury="select find,email,`call` from contact where contact.id=$id";
    $name=fetch($qury);
}
if(isset($_POST['find'])){
        addUpdate('contact',$_POST,$id);
        header("location:index.php?mod=contact&do=detail");   
    }
    ?>
<html>
<head>
    <title>Contact</title>
    <style>
    .panel-primary{

height:60%;
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
                
                <h3>Contact-Form</h3>
            </div>
            </div>
    <div class="panel-body">
    <div class="form-horizontal">
    <form class="form-group" method="POST">
    <label for="input_name" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">find</label>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="find"class="form-control" value="<?php if(isset($name['find'])){ echo $name['find'];} ?>" placeholder="Enter address">
                <br></div>
                       <label for="input_email" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">email</label>
                <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
                <span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                </span>
                            <input type="text" name="email"class="form-control" value="<?php if(isset($name['email'])){ echo $name['email'];} ?>"placeholder="Enter email">
                        <br></div>
                       
                        <label for="input_call" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">call</label>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="call"class="form-control"value="<?php if(isset($name['call'])){ echo $name['call'];} ?>" placeholder="Enter call">
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