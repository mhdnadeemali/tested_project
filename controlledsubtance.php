<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php include 'db_connect.php';
if(isset($_POST['register-submit']))
{

	$name = $_POST['name']; 
	$Policy = $_POST['PolicyID']; 
	$DHECForm = $_POST['DHECForm']; 
	$DEA = $_POST['DEA']; 
	$Amt = $_POST['Amt']; 
	$renewaldate = $_POST['renewaldate']; 
	$alertdate = $_POST['alertdate']; 
        
	
       // $query = "INSERT INTO sc_ctrl_substances_reg_renewal (name,DC_No,DHEC_Form,DEA_NO,renewal_date,Amount,Alert_Date) VALUES ('$name','$Policy','$DHECForm','$DEA','$renewaldate','$Amt','$alertdate')"; 
	//$data = @mysql_query ($query)or die(@mysql_error()); 
               $query = "INSERT INTO sc_ctrl_substances_reg_renewal (name,DC_No,DHEC_Form,DEA_NO,renewal_date,Amount,Alert_Date) VALUES ('$name','$Policy','$DHECForm','$DEA','$renewaldate','$Amt','$alertdate')"; 

        $data = mysqli_query($con, $query);
	if($data) 
	{ 
	
		$sucs = "Data Successfully saved"; 
		//$sucs.= "<b>http://localhost:3306/myproject/activation.php?user=$username&code=$cd</b>";
		
		
		// the message
		//$msg = $sucs;
		// send email
		//mail($email,"Registration success",$msg);	
		
	} 
}
	
?>
<body>
    <?php include 'master.php';?>
    
    <div class="container">
  <h2>Controlled Substance Renewal</h2>
  
  <form method="post" role="form" action="">
      <!--<div class="dt-button btn-group">-->
    <!--<button class="btn btn-default button-create" tabindex="0" aria-control="example">-->
        <!--<span>New</span>-->
          <!--</button>-->
          <!--</div>-->
      <!--<button class="btn btn-default buttons-selected buttons-edit " tabindex="0" aria-controls="example"><span>Edit</span></button>-->
    <!--<div class="form-group">-->
      <!--<button class="btn btn-default buttons-selected buttons-remove " tabindex="0" aria-controls="example"><span>Delete</span></button>-->
    <div class="form-group">
           <label for="text">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="text">Policy ID:</label>
      <input type="text" class="form-control" id="policy ID" placeholder="Enter Policy ID" name="PolicyID">
    </div>
      <div class="form-group">
      <label for="text">DHEC Form</label>
      <input type="text" class="form-control" id="DHECForm" placeholder="Enter DHEC Form " name="DHECForm">
    </div>
      <div class="form-group">
      <label for="text">DEA:</label>
      <input type="text" class="form-control" id="DEA" placeholder="Enter DEA NO." name="DEA">
    </div>
      <div class="form-group">
      <label for="text">Amount:</label>
      <input type="text" class="form-control" id="Amt" placeholder="Enter Amount" name="Amt">
    </div>
      <div class="form-group">
      <label for="date">Renewal Date:</label>
      <input type="date" class="form-control" id="renewaldate" name="renewaldate">
       </div>
      <div class="form-group">
           <label for="date">Date Alert:</label>
      <input type="date" class="form-control" id="alertdate" name="alertdate">
    </div>
      <button type="submit" class="btn btn-default" name="register-submit">Submit</button>
  </form>
</div>
</body>
</html>