<?php
$id="";
$vid="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$qury="select id,days,vid,rent,extra_rent,issuedate, issue.name, mobileno,adharno,killometers,irent,recive_date,issue.photo from issue where issue.id=$id";
	  //echo "select vid,days,rent,extra_rent,issue.id,issuedate, issue.name, mobileno,adharno,killometers,irent,recive_date,user_photo from issue  where issue.id=$id //";
	$cdetail=fetch($qury);
	extract($cdetail);
	?>
	<?php
}
if (isset($_GET['vid'])) {
	$vid=$_GET['vid'];
	$qury="select rent,extra_rent from rent where vid=$_GET[vid]";
	//echo "select rent,extra_rent from rent where vid=$_GET[vid]";
	$detail=fetch($qury);
	if(is_array($detail))
		extract($detail);
}
if(isset($_POST['name'])){
	$success=1;
		if(!($_POST['name'])){
			$_SESSION['ename']="Enter your name";
			$success=0;
		}else if(!preg_match("/^[a-z A-Z ]*$/",$_POST['name'])){
			$_SESSION['ename']="Enter your proper name";
			$success=0;
		}
		if(!($_POST['adharno'])){
			$_SESSION['adhar']="Enter adhar no";
			$success=0;
		}else if(!preg_match('/^[1-9][0-9]*$/',$_POST['adharno'])){
			$_SESSION['adhar']="Enter proper adhar no";
			$success=0;
		}
	   // print_r($_SESSION);
		if($success){
if(isset($_FILES['photo']['name'])){
            if(isset($cdetail['photo']) && $cdetail['photo']){
                    unlink("system/img/$cdetail[photo]"); 
                }
                if($_FILES['photo']['type']=='image/jpeg' || $_FILES['photo']['type']=='image/png'){
                $_POST['photo']=time()."_".$_FILES['photo']['name'];
                move_uploaded_file($_FILES['photo']['tmp_name'],'system/img/'.$_POST['photo']);
            }
        }
        if(!$id){
	$submitdata=array('available'=>'no');

	addUpdate('vehicle',$submitdata,$vid);	
}
	addUpdate('issue',$_POST,$id);
	header("location:index.php?mod=issue&do=detail");   
}

}
	?>
<html>
<head>
	<title>Issue</title>
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
				
				<h3>Issue-Form</h3>
			</div>
			</div>
	<div class="panel-body">
	<div class="form-horizontal">
	<form class="form-group" method="POST" enctype="multipart/form-data">
	<label for="input_vid" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">vid</label>
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
	
		<option <?php  if($id && $cdetail['vid']==$clist['id']){echo "selected";} else if (isset($_GET['vid']) && $_GET['vid']==$clist['id']) {
			echo "selected";
		}?> value="<?php echo $clist['id'];?>"><?php echo $clist['name'];?></option>
	<?php }?>
	
	</select>

				<br></div>
				<label for="input_days" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">Days</label>
	<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
						<input type="text" name="days"class="form-control" value="<?php if(isset($cdetail['days'])){ echo $cdetail['days'];}
						else if (isset($detail['days'])){echo $detail['days'];} ?>">
				<br></div>
		
				<label for="input_rent" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">rent</label>
	<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
						<input type="text" name="rent"class="form-control" value="<?php if(isset($cdetail['rent'])){ echo $cdetail['rent'];}
						else if (isset($detail['rent'])){echo $detail['rent'];} ?>">
				<br></div>
				<label for="input_extra-rent" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">extra-rent</label>
	<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
						<input type="text" name="extra_rent"class="form-control" value="<?php if(isset($name['extra_rent'])){ echo $name['extra_rent'];}  else if (isset($detail['extra_rent'])){echo $detail['extra_rent'];}?>">
				<br></div>


				<label for="input_name" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">Name</label>
				<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
				<span class="input-group-addon">
							<i class="fa fa-keyboard-o" aria-hidden="true"></i>
				</span>
							<input type="text" name="name"class="form-control" value="<?php if(isset($cdetail['name'])){ echo $cdetail['name'];}
							else if(isset($_POST['name'])){echo $_POST['name'];} ?>"/>
						<br>
						<span><?php if(isset($_SESSION['ename'])){echo $_SESSION['ename']; unset($_SESSION['ename']);}?></span>
					</div>
				
				<label for="input_mobileno" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">Mobile-no</label>
				<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
				<span class="input-group-addon">
							<i class="fa fa-keyboard-o" aria-hidden="true"></i>
				</span>
							<input type="text" name="mobileno"class="form-control" value="<?php if(isset($cdetail['mobileno'])){ echo $cdetail['mobileno'];} ?>">
						<br></div>
	  

<label for="input_adharno" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">Adhar-no</label>
				<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
				<span class="input-group-addon">
							<i class="fa fa-keyboard-o" aria-hidden="true"></i>
				</span>
							<input type="text" name="adharno"class="form-control" value="<?php if(isset($cdetail['adharno'])){ echo $cdetail['adharno'];} else if(isset($_POST['adharno'])) { echo $_POST['adharno'];}  ?>">
						<br>
<span><?php if(isset($_SESSION['adhar'])){echo $_SESSION['adhar']; unset($_SESSION['adhar']);}?></span>
					</div>
	  
 <label for="input_issuedate" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">Issue-date</label>
				<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
				<span class="input-group-addon">
							<i class="fa fa-keyboard-o" aria-hidden="true"></i>
				</span>
							<input type="text" name="issuedate"class="form-control" value="<?php if(isset($cedatil['issuedate'])){ echo $cdetail['issuedate'];} ?>">
						<br></div>
						<label for="input_killometers" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">Killometers</label>
				<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
				<span class="input-group-addon">
							<i class="fa fa-keyboard-o" aria-hidden="true"></i>
				</span>
							<input type="text" name="killometers"class="form-control" value="<?php if(isset($cdetail['killometers'])){ echo $cdetail['killometers'];} ?>">
						<br>

					</div>
				
						<label for="input_irent" class="col-lg-3 col-md-4 col-sm-4 col-xs-5 control-label">Irent</label>
	<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
<span class="input-group-addon">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
							<input type="text" name="irent"class="form-control"value="<?php if(isset($cdetail['irent'])){ echo $cdetail['irent'];} ?>">
				<br></div>
				
				<label for="input_recivedate" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">Recive-date</label>
				<div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
				<span class="input-group-addon">
							<i class="fa fa-keyboard-o" aria-hidden="true"></i>
				</span>
							<input type="text" name="recive_date"class="form-control" value="<?php if(isset($cedatil['recive_date'])){ echo $cdetail['recive_date'];} ?>">
						<br></div>
						<label for="input_photo" class="col-lg-3 col-md-4 col-sm-4 col-xs-5  control-label">User_photo</label>
                <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 form-group input-group">
                <span class="input-group-addon">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                </span>
                <?php
        if(isset($cdetail['photo']) && $cdetail['photo']){
        ?>
        <img src="system/img/<?php echo $cdetail['photo'];?>" height="100px" width="100px"></td></tr>
        <?php
        }
    ?>
                      <input type="file" name="photo"class="form-control">
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
