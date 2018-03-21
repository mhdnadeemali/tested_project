<?php error_reporting(E_ALL & ~E_NOTICE);?>
<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Registration Page</title>  
</head>  
<style>  
form {
  text-align: center;
}
   
</style> 
<?php include 'db_connect.php';?>
<?php
//print_r($_POST);
if(isset($_POST['activate-submit']))
{
	$username = $_POST['username']; 
	$code = $_POST['activation'];
	
	//$query = "INSERT INTO usertbl (strusername,strpassword,stremail,binactive,strcode,strdate,strrole) VALUES ('$username','$password','$email',0,'$cd','$dt','Developer')"; 
	$query = "UPDATE usertbl SET binactive=1 WHERE strcode='$code' and strusername = '$username'"; 
	//$data = @mysql_query ($query)or die(@mysql_error()); 
        $data = @mysqli_query($con, $query);
	if($data) 
	{ 
		header('Location: http://localhost:8080/myproject/login.php');
	} 
	
}

?>

 
<body>  
	
	<?php include 'master.php';?>
	<div class="container text-center" style="width:40%;">
		<!--<h1>Welcome to my Registration page</h1>-->
		<div class="text-center"><h3><b>User Registeration page</b></h3></div>
			<form id="register-form" action="" method="post" role="form" autocomplete="off" >
				<div class="form-group">
				<label>Username</label>
					<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php echo $_GET['user'];?>" readonly>
				</div>				
				<div class="form-group">
				<label>Activation</label>
					<input type="activation" name="activation" id="activation" tabindex="1" class="form-control" placeholder="Activation" value="<?php echo $_GET['code'];?>" readonly>
				</div>
				<div class="form-group" style="margin-bottom:100px;">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3">
							<input type="submit" name="activate-submit" id="activate-submit" tabindex="4" class="form-control btn btn-info" value="Activate">
						</div>
					</div>
				</div>				
			</form>
        </div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>