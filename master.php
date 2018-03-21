<?php error_reporting(E_ALL & ~E_NOTICE);?>
<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Home Page</title>  
</head>  
<style>  
   
</style>  
<body>  
	
	
	    <div class="container text-center">
			<h1>Keowee Primary Care</h1>
                        <h2> <p>Payments</p></h2>
		</div>  
	<nav class="navbar navbar-inverse" role="navigation">
    	<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-   controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
				
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">payment<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-header">Insurance</li>
                                                <li><a href="controlledsubtance.php">control subtance</a></li>
                                                <li><a href="#">table3</a></li>
                                                <li><a href="#">table4</a></li>
                                                <li class="dropdown-header">vendors</li>
                                                <li><a href="#">table A</a></li>
                                                <li><a href="#">table B</a></li>
                                                <li><a href="#">table C</a></li>
                                            </ul>
                                        </li>
                                        
					<!--<li><a href="#">Payments</a></li>-->
					<li><a href="Table.php">Bills</a></li>
					<li><a href="Display_records.php">Display records</a></li>
                                        <!--<li><a href="Dropdown.php">Bills</a></li>-->
                                        <!--<li><a href="controlledsubtance.php">Controlled Substance</a></li>-->
                                        <!--<li><a href="controlled subtance java.js"></a></li>-->
		                </ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="registration.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
                            	</ul>
				
	</nav>
</body>
</html>