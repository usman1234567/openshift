<?php  
 $connect = mysqli_connect("localhost","vvmdbx","N3tp@ss1122#","kiosk");  
 $query = "SELECT * FROM kiosk ORDER BY id desc";  
 $result = mysqli_query($connect, $query);
	include "./include/header.php";
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>KIOSK - REPORTING</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
      </head>  
      <body>  
           
			<div class='row' style='margin: 50px 0px;'>
				<div class="col-sm-3"></div>
					
					<div class="col-sm-6" style="text-align:right">
						<h1 align="center" style='color:#fff;'>KIOSK Report</h1>
					</div>

				<div class="col-sm-3">
					<div class='btn-group pull-right' style='padding:5px;'><a href="index.php" class="btn btn-success" role="button">Back</a>
							
					</div>
				</div>
			</div>





           <div class="container" style="width:100%;">  
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered" style='background-color:#fff;opacity: 0.8; font-size:11px;'>  
                          <tr>  
                               	<th width="8%">Requested ID</th>  
                               	<th width="10%">Created Time</th>  
                               	<th width="10%">Created By (Phone)</th>  
                               	<th width="12%">Created By (Email)</th>  
                               	<th width="20%">Problem</th>  
				<th width="40%">Message</th>
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  

                               	<td><?php echo $row["empno"]; ?></td>  
				<td><?php echo $row["date"]; ?></td>  
                               	<td><?php echo $row["telephone"]; ?></td>
                               	<td><?php echo $row["email"]; ?></td>  
                               	<td><?php echo $row["problem"]; ?></td>  
                               	<td><?php echo $row["message"]; ?></td>  
							   
                          </tr>  
                     <?php  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>