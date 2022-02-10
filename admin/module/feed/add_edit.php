<?php
$id="";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $qury="select msgbox,email from feedback where feedback.id=$id";
    $name=fetch($qury);
}
if(isset($_POST['email']))
{
    $success=1;
      if(!($_POST['msgbox'])){
            $_SESSION['msgbox']="Enter your message";
            $success=0;
        }else if(!preg_match("/^[a-z A-Z ]*$/",$_POST['msgbox'])){
            $_SESSION['msgbox']="Enter your proper message";
            $success=0;
        }
    if($success){
        addUpdate('feedback',$_POST,$id);
        header("location:index.php?mod=feed&do=detail"); 
        } 
        } 
    ?>
<html>
<head>
    <title>Feedback</title>
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
                
                <h3>Feedback-Form</h3>
            </div>
            </div>
    <div class="panel-body">
    <div class="form-horizontal">
    <form class="form-group" method="POST">
    <label for="input_msgbox" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">Message_box</label>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="msgbox"class="form-control" value="<?php if(isset($name['msgbox'])){ echo $name['msgbox'];} ?>" placeholder="Enter message">
                <br>
<span><?php if(isset($_SESSION['msgbox'])){echo $_SESSION['msgbox']; unset($_SESSION['msgbox']);}?>
</span>


            </div>
                <label for="input_email" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">Email</label>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="email"class="form-control" value="<?php if(isset($name['email'])){ echo $name['email'];} ?>" placeholder="Enter email">
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