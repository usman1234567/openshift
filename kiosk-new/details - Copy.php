<!--- header start -->
<?php
	include './include/header.php'; 
	include './include/db.php'; 
?>
<!--- header end -->`
<style>
.radio-toolbar input[type="radio"] {
  display: none;
}

.radio-toolbar label {
  display: inline-block;
  background-color: #fff;
  padding: 4px 11px;
  font-family: Arial;
  font-size: 16px;
  cursor: pointer;
}

.radio-toolbar input[type="radio"]:checked+label {
  background-color:#FFCC00;
}


</style>

<div class='container'>
	<div class="row">
		<div class="col-sm-12" style="text-align:center; color:#fff;"><h1>Select Range</h1></div>
	</div>
	
	
	</div>
	
		<div class="row">

				<div class='col-sm-1'></div>
				<div class='col-sm-10'>
				<div class="row">
				
					<form method='Post' action='details.php' enctype='multipart/form-data' data-toggle='validator' role='form'>
					
						<div class='col-sm-4' style="text-align:center;">
							<input type="date" id="datestart" name="datestart" class='form-control' style="height:45px;">
						</div>
						
						<div class='col-sm-4'>
							<input type="date" id="dateend" name="dateend" class='form-control' style="height:45px;">
						</div>
						
						<div class='col-sm-2' style="text-align:center;">
							<button type='submit' class='btn-success btn-lg' name='btnsubmit' id='btnsubmit' style='width:100%;'>Submit</button>
						</div>
						
					</form>
					</div>
					
				</div>
				<div class='col-sm-1'></div>
	
	</div>
</div>

	<div class="container">
  	<div class="col-md-8">
    
    <?php   
	
	
	
			if (isset($_POST['btnsubmit']))
		{
			// submit records 
			
				$datestart 		= $_POST['datestart'];
				$dateend		= $_POST['dateend'];

			
			$get_report ="select * from all_reports where date = '$datestart' and date = '$dateend'";			
			$run_report = mysqli_query($con, $get_report);
			
			while($row = mysqli_fetch_array($run_report)) 
 {
			$report_id=$row['report_id'];
			$report_code=$row['report_code'];
			$mcat_title=$row['report_title'];
			$mcat_id = $row['cat_id'];
 			$pages = $row['pages'];
			$report_desc = $row['report_desc'];
			$table_content = $row['table_content'];
 			$pub_date = $row['pub_date'];
	 		$format= $row['format'];
			$region = $row['region'];
			$single_user = $row['single_user'];
			$enter_user = $row['enter_user'];
			$corporate_user = $row['corporate_user'];
			$publisher = $row['publisher'];
			$list_of_tables = $row['list_of_tables'];
			$list_of_figure = $row['list_of_figure'];
			
			$table_content = nl2br($table_content);
			$report_desc   = nl2br($report_desc);
			$list_of_tables   = nl2br($list_of_tables);
			$list_of_figure   = nl2br($list_of_figure);
			
			//date format change
		    $timestamp = strtotime($pub_date);
		    $formattedDate = date('d-m-Y', $timestamp);
		
			
			global $single_user;
			global $enter_user; 
			global $corporate_user;
			global $mcat_title;
			global $mcat_id;
			global $report_id;
			global $report_code;
			
		//$position=250; // Define how many character you want to display.
		//$mmreport_desc = substr($report_desc, 0, $position); 
		
		if (empty($report_desc))
		{
		
			echo"


	
	";
		}
		else
		{
		
			echo"
			<br />
<h3>$mcat_title</h3>

<p style='font-size:11px;'>

<span><b style='color:#333;'>Published date:</b> $formattedDate</span>
&nbsp;<span><b style='color:#333;'>Region:</b> $region</span>
&nbsp;<span><b style='color:#333;'>Pages:</b> $pages</span>
&nbsp;<span><b style='color:#333;'>Format:</b> $format</span>
&nbsp;<span><b style='color:#333;'>Publisher Name:</b> $publisher</span>
<br>
<span><b style='color:#333;'>SKU:</b> $report_code</span>
</p>

<div class='table-details'>
	<div class='float-right'>
					<span style='margin-right:4px;display:none;'><a href='index.php?add_cart=$report_id' class='btn btn-success btn-sm'><i class='fa fa-shopping-cart' aria-hidden='true'></i> Add to Cart</a></span>
					<span style='margin-right:4px;display:none;'><a href='index.php?add_cart=$report_id' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#myModal'>Sample Request</a></span>
					
    </div>
</div>
 <div class='widget'>
          
          <div class='tabbable'>
            <ul class='nav nav-tabs'>
              <li class='active'><a href='left-sidebar.html#Description' data-toggle='tab'>Description</a></li>
              <li><a href='left-sidebar.html#Content' data-toggle='tab'>Table of Content</a></li>
              <li><a href='left-sidebar.html#Request' data-toggle='tab'>Sample Request</a></li>
          	</ul>
            <div class='tab-content'>
              <div class='tab-pane active' id='Description'>
			<p style='font-size:13px; line-height:25px; text-align:justify'>$report_desc</p>
                
              </div>
              
              <div class='tab-pane' id='Content'>
              <p style='font-size:13px; line-height:25px; text-align:justify'>$table_content
              <br />
              $list_of_tables
              <br />
              $list_of_figure
              
              </p>
                
                <!-- recent posts -->
              </div>
              
			  <div class='tab-pane' id='Request'>
         		<form method='post' action='' enctype='multipart/form-data' data-toggle='validator' role='form' style='width:100%;'>
			
			<input style='border:none; visibility:hidden;' name='mcat_title' value='$mcat_title' />
			<input style='border:none; visibility:hidden;' name='report_code' value='$report_code' />
			
			<p>All Fields are mandatory<span style='color:red;'>*</span></p>
 	        <div class='row'>
			
			   <div class='form-group col-md-4'>
					<lable>Name: <span style='color:red;'>*</span></lable>
              		<input type='name' name='name' id='name' class='form-control' placeholder='Your Name' required>                 
              </div>
            <div class='form-group col-md-4'>
			<lable>Email Id: <span style='color:red;'>*</span></lable>
              <input type='email' name='email' id='email' class='form-control' placeholder='Your Email' required>
            </div>
            </div>
			
			<div class='row'>
			
            <div class='form-group col-md-4'>
					<lable>Job Title: <span style='color:red;'>*</span></lable>
              		<input type='text' name='job' id='job' class='form-control' placeholder='Job Title' required>
            </div>
			<div class='form-group col-md-4'>
			<lable>Company: <span style='color:red;'>*</span></lable>
              <input type='text' name='company' id='company' class='form-control' placeholder='Company Name' required>
               
            </div>
			</div>
            <div class='row'>
			
               <div class='form-group col-md-4'>
			   <lable>Phone: <span style='color:red;'>*</span></lable>
              <input type='tel' name='phone' id='phone' class='form-control' placeholder='Phone' required>
               
            </div>
            
             <div class='form-group col-md-4'>
			 <lable>Country: <span style='color:red;'>*</span></lable>
              <input type='text' name='country' id='country' class='form-control' placeholder='country' required>
               
            </div>
			</div>
			
			<div class='row'>
            <div class='form-group col-md-8'>
			<lable>Message: <span style='color:red;'>*</span></lable>
			<fieldset style='display:inline; width:100%;'>
              <textarea class='form-control' tyle='width:95%;' name='message' id='message' placeholder='Message' rows='5' required></textarea>
              </fieldset>
            </div>
			</div>
				<div class='row'>
            <div class='form-send col-md-8'>
            	<button type='submit' class='btn btn-large btn-primary' name='btnsubmit' id='btnsubmit' >Submit</button>
            </div>
			</div>
			
          </form>
                
              </div>
            </div>
          </div>
        </div>
	";
		}
		
}
}

 ?>
    </div>
    
    
</div>



</body>
</html>
