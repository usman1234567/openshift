<?php
			include './include/header.php';
			global $email_subject;
			$email_subject = $_GET['problem'];
			//echo $email_subject;
					
			//echo $problem;
        
?>
<br /><br />
<div text-center' style='text-align:center; color:#fff; margin-top:20px;'>
  <h1>Please fill the form</h1>
</div>  


<div class='container'>

<form method='Post' action='form.php' enctype='multipart/form-data' data-toggle='validator' role='form'>
			
			<!-- <input style='border:none; visibility:normal;' ID='email_subject' name=$email_subject value=$email_subject /> -->
			<input type="hidden" name="email_subject" id='email_subject' value="<?php echo $email_subject ?>" >
			
					
				<div class='row'>
					<div class='col-sm-3'></div>
                            		<div class='col-sm-6 form-group'>
                                		
                                		<input type='number' class='form-control form-control-lg' id='empnumber' name='empnumber' required placeholder='Emp. No.'>
                            		</div>
				<div class='col-sm-3'></div>
                            	</div>
								
<div class='row'>
					<div class='col-sm-3'></div>
                            		<div class='col-sm-6 form-group'>
                                		
                                		<input type='number' class='form-control form-control-lg' id='phone' name='phone' required placeholder='Telephone Number'>
                            		</div>
				<div class='col-sm-3'></div>
                            	</div>

								

				<div class='row'>
					<div class='col-sm-3'></div>
                            		<div class='col-sm-6 form-group'>
                                		
                                		<input type='email' class='form-control form-control-lg' id='email' name='email' required placeholder='Email ID'>
                            		</div>
				<div class='col-sm-3'></div>
                            	</div>
                        
                        <div class='row'>
				<div class='col-sm-3'></div>
                            <div class='col-sm-6 form-group'>
                                <button type='submit' class='btn-success btn-lg' name='btnsubmit' id='btnsubmit' style='width:100%;'>SEND</button>
                            </div>
				<div class='col-sm-3'></div>
                        </div>
            </form>
<?php					
			//global $email_subject;
			//$email_subject = $email_subject;
			//ECHO "$email_subject"; 
			
		if (isset($_POST['btnsubmit']))
		{
				$empnumber 		= $_POST['empnumber'];
				$email_subject	= $_POST['email_subject'];
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
							  <td>Employee Problem</td>
							  <td>:</td>
							  <td><b>$email_subject</b></td>
							</tr>
							
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
</div>
</body>
</html>

