<?php
	include './include/header.php';
	include './include/db.php';
?>

<?php
	  				
		if (isset($_POST['btnsubmit']))
		{
			// submit records 
			
				$empnumber 		= $_POST['empnumber'];
				$message		= $_POST['message'];
				$phone			= $_POST['phone'];	
				$email 			= $_POST['email'];
				$problem		= $_POST['problem'];
			
				$insert = "insert into kiosk(empno, date, problem, telephone, email, message) 
						    values 
						   ('$empnumber', NOW(), '$problem','$phone','$email','$message')";
						
				$run_report = mysqli_query($con, $insert);
			
				$email_from = 'Request a ticket';
				$email_subject = 'Request a ticket';
				$body ="
						<html>
						<head>
						  
						</head>
						<body>
						  <p> Please Contact below Employee</p>
						  <table>							
							
							<tr>
							  <td>ID Number</td>
							  <td>:</td>
							  <td><b>$empnumber</b></td>
							</tr>
												
							<tr>
							  <td>Problem</td>
							  <td>:</td>
							  <td><b>$problem</b></td>
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
							  <td>Message</td>
							  <td>:</td>
							  <td><b>$message</b></td>
							</tr>
						  </table>
						  <p> Thank You</p>
						</body>
						</html>
						";
						
				$to="afzalmdkhan@live.in";
				$headers = "From: Request a Ticket \r\n";
				$headers .= "Reply-To: $email \r\n";
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	
																			 
				if (mail($to, $email_subject, $body, $headers))
				{
					header('Location: thank-you.php');
				}
				else
				{
					echo 'There is Error. PLEASE TRY AGAIN,';
				}
		}	  

      ?> 
	  
	   

<div class='container' id='loginDiv'>

<form method="post" action="" enctype="multipart/form-data" data-toggle="validator" role="form">					
				<div class='row'>
                            		<div class='col-sm-6 form-group'>
                                		
                                		<input type='number' class='form-control form-control-lg' id='empnumber' name='empnumber' required placeholder='Emp. No.'>
                            		</div>

					<div class='col-sm-6 form-group'>
                                		
                                		<input type='text' class='form-control form-control-lg' id='problem' name='problem' required placeholder='Please Enter Problem'>
                            		</div>
                            	</div>								
								
				<div class='row'>
                            		<div class='col-sm-6 form-group'>
                                		
                                		<input type='number' class='form-control form-control-lg' id='phone' name='phone' required placeholder='Telephone Number'>
                            		</div>
					<div class='col-sm-6 form-group'>
                                		
                                		<input type='email' class='form-control form-control-lg' id='email' name='email' required placeholder='Email ID'>
                            		</div>
                            	</div>

								
								
				<div class='row'>
                    <div class='col-sm-12 form-group'>            		
                    
					<textarea id="message" name="message" class='form-control form-control-lg' rows="4" cols="50" placeholder='Message'></textarea>
                       
					   </div>
                            	</div>                        
                        <div class='row'>
				
                            <div class='col-sm-6 form-group'>
                                <button type='submit' class='btn-success btn-lg' name='btnsubmit' id='btnsubmit' style='width:100%;'>SUBMIT</button>
                            </div>
							<div class='col-sm-6 form-group'>
                                <button type='reset' class='btn-danger btn-lg' name='btncancel' id='btncancel' style='width:100%;'>CANCEL</button>
                            </div>
				
                        </div>
            </form>
			

	  
	  
		<div class='row' style="margin-top:30px;">
			<div class="col-sm-3"></div>
			
				<div class="col-sm-6" style="text-align:right">
					<div class=' btn-group btn-group-justified'>
						<a href="end-user-tiket.php" class="btn btn-warning btn-lg" role="button">Back</a>
						<a href="index.php" class="btn btn-warning btn-lg" role="button">Home</a>
					</div>
				</div>
				
				<div class="col-sm-3"></div>
		</div>
  </div>
</div>
</body>
</html>


