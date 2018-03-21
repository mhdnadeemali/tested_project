<?php error_reporting(E_ALL & ~E_NOTICE);?>
<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login Page</title>  
</head>  
<style>  
/*.login_form {
    width: 50%;
    height: 50%;

    border-radius: 10px;

    margin: 0 0 0 100px;
    padding: 0;
}*/
</style>  
<body>  
	<?php include 'master.php';?>
	<div class="container text-center" style="width:40%">
		<div class="text-center"><h3><b>Login</b></h3></div>
		
		<form id="login_form" action="" method="post" role="form" autocomplete="off" class="login_form" center>
				<div class="form-group">
					<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
				</div>				
				<div class="form-group">
					<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
				</div>
				<div class="form-group" style="margin-bottom:100px;">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3">
							<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Login">
						</div>
					</div>
				</div>				
			</form>
	</div>
	<?php include 'footer.php';?>
</body>
</html>