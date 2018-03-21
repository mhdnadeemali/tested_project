<?php
//$connection = mysql_connect('localhost', 'root', '');
$con = mysqli_connect("localhost","root","","medicenterkeowee");
if (mysqli_connect_error()){
   die("Failed to connect to MySQL: " . mysqli_connect_error());
   echo failed;
}

$sql = "SELECT * FROM sc_ctrl_substances_reg_renewal";
?>



