<?php
			include "./include/header.php";			
?>

  
<div class="container">
  <div class="row">
    
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<div class="row">
  
  <div class="col-sm-12"><p style="font-size:300%; color:#FFF;text-transform: uppercase;font-family: sans-serif; text-align:center; ">Welcome to Request Ticket Form <br>
   	  </h1></p></div>
  </div>
  <br /><br /> 
  
  <div class="row">
  
	<form method='Post' action='request-ticket.php' enctype='multipart/form-data' data-toggle='validator' role='form'>
		<div class="col-sm-6">
			<h1 style="color:#fff;"> Please Enter Your Request.</h1>
		</div>
	  
		<div class="col-sm-6">
		
			<div class='row'><input class='form-control form-control-lg' type='empnumber' id='empnumber' name='empnumber' placeholder='Enter Emp. Number'></div>
			<div class='row'><input type='email' id='email' name='email' class='form-control form-control-lg' placeholder='Email address'></div>
			<div class='row'><input type='number' id='phone' name='phone' class='form-control form-control-lg' placeholder='Phone'></div>
			<div class='row'><textarea name='message' type='text' class='form-control form-control-lg' id='input-message' placeholder='Please type your request'></textarea></div>
			<div class='row'><button type='submit' class='btn-success btn-lg' name='btnsubmit' id='btnsubmit' style='width:100%;'>SEND</button></div>
			
		</div>
	</form>
	<?php
		if (isset($_POST['btnsubmit']))
		{
				$empnumber 		= $_POST['empnumber'];
				$message		= $_POST['message'];
				$phone			= $_POST['phone'];	
				$email 			= $_POST['email'];
				$email_from 	= 'Report Enquery Form';
				//$email_subject ='KIOSK - IT ISSUE MAIL';
					
				$message = "
						<html>
						<head>
						  
						</head>
						<body>
						  <p> Please Contact below Employee</p>
						  <table>
							
							<tr>
							  <td>Employee ID Number</td>
							  <td>:</td>
							  <td><b>$empnumber</b></td>
							</tr>
							
							<tr>
							  <td>Employee Email</td>
							  <td>:</td>
							  <td><b>$email</b></td>
							</tr>
							
							<tr>
							  <td>Employee Phone</td>
							  <td>:</td>
							  <td><b>$phone</b></td>
							</tr>
							
							<tr>
							  <td>Details</td>
							  <td>:</td>
							  <td><b>$message</b></td>
							</tr>

						  </table>
						  <p> Thank You</p>
						</body>
						</html>
						";

						// To send HTML mail, the Content-type header must be set
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

						// Additional headers
						$headers .= 'To: Afzal Khan <afzalmdkhan@live.in>' . "\r\n";
						//$headers .= 'KIOSK IT SUPPORT' . "\r\n";
						
						//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
						//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

						// Mail it
						mail($to, $email_subject, $message, $headers);
						header('Location: thank-you.php');
						exit;
				
				//$email_body = "Problem = $problem <\br> Emp. Number = $empnumber<\br>Email = $email<\br>Phone = $phone<\br>";
				
				//$to='afzalmdkhan@live.in';
				//$headers = 'From: $email \r\n';
				//$headers .= 'Reply-To: $email \r\n';
											
				////if (mail($to, $email_subject, $email_body, $headers))
				//{	
				//	header('Location: thank-you.php');
				//	exit;
				//}
			//	else{
				//	echo "<h1>There is Error. PLEASE TRY AGAIN </h1>";
				//}
		}
?>
  </div>
  <br /><br /><br />
  <div class='row'>
				<div class='col-sm-6'></div>
				<div class="col-sm-6 center-block" style="text-align:right"><a href="end-user-tiket.php" class="btn btn-info" role="button" style="ftext-align:center;">Back</a></div>
					
				</div>
  </div>

</body>
</html>




