<?php
			include './include/header.php';
			global $problem;
			$problem = $_GET['problem'];
			//echo $problem;
					
			//echo $problem;
        
?>
<br /><br />
<div text-center' style='text-align:center; color:#fff; margin-top:20px;'>
  <h1>Please fill the form</h1>
</div>  


<div class='container'>


<form method='Post' action='form.php' enctype='multipart/form-data' data-toggle='validator' role='form'>
			
			<input style='border:none; visibility:hidden;' name='$problem' value='$problem' />
					
				<div class='row'>
					<div class='col-sm-3'></div>
                            		<div class='col-sm-6 form-group'>
                                		
                                		<input type='number' class='form-control' id='empnumber' name='empnumber' required placeholder='Emp. No.'>
                            		</div>
				<div class='col-sm-3'></div>
                            	</div>
								
<div class='row'>
					<div class='col-sm-3'></div>
                            		<div class='col-sm-6 form-group'>
                                		
                                		<input type='number' class='form-control' id='phone' name='phone' required placeholder='Telephone Number'>
                            		</div>
				<div class='col-sm-3'></div>
                            	</div>

								

				<div class='row'>
					<div class='col-sm-3'></div>
                            		<div class='col-sm-6 form-group'>
                                		
                                		<input type='email' class='form-control' id='email' name='email' required placeholder='Email ID'>
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
			global $problem;
			$problem = $_GET['problem'];
			//echo "$problem";
			
		if (isset($_POST['btnsubmit']))
		{
				$empnumber 	= $_POST['empnumber'];
				$problem	= $_POST['problem'];
				$phone		= $_POST['phone'];	
				$email 		= $_POST['email'];
											
				$email_from = 'Report Enquery Form';
				$email_subject = 'IT Problem Mail';
				
				$email_body =  	"Problem = $problem <\br> Emp. Number = $empnumber<\br>Email = $email<\br>Phone = $phone<\br>";
				
				$to='afzalmdkhan@live.in';
				$headers = 'From: $email \r\n';
				$headers .= 'Reply-To: $email \r\n';
				
											
				if (mail($to, $email_subject, $email_body, $headers))
				{	
					header('Location: thank-you.php');
					exit;
				}
				else{
					echo "<h1>There is Error. PLEASE TRY AGAIN </h1>";
				}
		}
?>
	  
  </div>
</div>
</body>
</html>

