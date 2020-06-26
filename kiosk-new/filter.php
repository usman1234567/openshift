<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost","vvmdbx","N3tp@ss1122#","kiosk");  
      $output = '';  
      $query = "  
           SELECT * FROM kiosk  
           WHERE date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered" style="background-color:#fff;opacity: 0.8; font-size:11px;">
                <tr>  
                        <th width="8%">Requested ID</th>  
                               	<th width="10%">Created Time</th>  
                               	<th width="10%">Created By (Phone)</th>  
                               	<th width="12%">Created By (Email)</th>  
                               	<th width="20%">Problem</th>  
				<th width="40%">Message</th>
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["empno"] .'</td>  
                          <td>'. $row["date"] .'</td>  
                          <td>'. $row["telephone"] .'</td>  
                          <td>'. $row["email"] .'</td>  
                          <td>'. $row["problem"] .'</td>  
						  <td>'. $row["message"] .'</td> 
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="6">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>