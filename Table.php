<?php error_reporting(E_ALL & ~E_NOTICE);?>
<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Table Data</title>  
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

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<div class="container text-center" style="width:80%">
<h2>SC Controlled substances Registration Renewal</h2>
</div>


<table>
  <tr>
    <th>Employee</th>
    <th>Policy ID</th>
    <th>DHEC ID</th>
    <th>DEA</th>
    <th>Amount</th>
    <th>Date</th>
    <th>Date Alert</th>
    
  </tr>
  <?php
$conn = mysqli_connect("localhost", "root", "", "medicenterkeowee");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT id,Name, DC_NO, DHEC_Form, DEA_NO, renewal_date, Amount, Alert FROM sc_ctrl_substances_reg_renewal";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Employee"] . "</td><td>"
. $row["Policy ID"]. "</td></tr>";
"</td><td>". $row["DHEC ID"]. "</td></tr>";
"</td><td>". $row["DEA"]. "</td></tr>";
"</td><td>". $row["Amount"]. "</td></tr>";
"</td><td>". $row["Date"]. "</td></tr>";
"</td><td>". $row["Date Alert"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
 
  
  
</table>

</body>
</html>

	<?php include 'footer.php';?>
</body>
</html>