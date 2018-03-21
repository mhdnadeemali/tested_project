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
if(isset($_POST['register-submit']))
{

	$username = $_POST['username']; 
	$password = $_POST['password']; 
	$email = $_POST['email']; 
	$password = $_POST['pass']; 
	$cd = uniqid(); 
	$dt = date('Y-m-d H:i:s'); 
	
	$query = "INSERT INTO usertbl (strusername,strpassword,stremail,binactive,strcode,strdate,strrole) VALUES ('$username','$password','$email',0,'$cd','$dt','Developer')"; 
	//$data = @mysql_query ($query)or die(@mysql_error()); 
        $data = mysqli_query($con, $query);
	if($data) 
	{ 
	
		$sucs = "You have been registered. You must activate your account from the activation link sent to: $email"."<br />"; 
		$sucs.= "<b>http://localhost:3306/myproject/activation.php?user=$username&code=$cd</b>";
		
		
		// the message
		$msg = $sucs;
		// send email
		mail($email,"Registration success",$msg);	
		
	} 
	
}

?>

 
<body>  
	
	<?php include 'master.php';?>
	<div class="container text-center" style="width:40%;">
		<!--<h1>Welcome to my Registration page</h1>-->
		<div class="text-center"><h3><b>User Registeration</b></h3></div>
			<div style="color:red"><?php echo $sucs;?>
			<form id="register-form" action="" method="post" role="form" autocomplete="off" >
				<div class="form-group">
					<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
				</div>				
				<div class="form-group">
					<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" name="confirm-password" id="confirm-password" tabindex="3" class="form-control" placeholder="Confirm Password">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" tabindex="4" class="form-control" placeholder="Email Address" value="">
				</div>
				<div class="form-group" style="margin-bottom:100px;">				
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3">
							<input type="submit" name="register-submit" id="register-submit" tabindex="5" class="form-control btn btn-info" value="Register Now">
						</div>
					</div>
				</div>							
			</form>
        </div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>