<?php  
 if(isset($_POST["applicator_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "9500Hobro", "anarchyrp");  
      $query = "SELECT * FROM staffapps WHERE id = '".$_POST["applicator_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Country</label></td>  
                     <td width="70%">'.$row["country"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Timezone</label></td>  
                     <td width="70%">'.$row["timezone"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Qualities</label></td>  
                     <td width="70%">'.$row["qualities"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Future</label></td>  
                     <td width="70%">'.$row["future"].'</td>  
                </tr>  
                <tr>
                    <td width="30%"><label>Reference(s)</label></td>
                    <td width="70%">'.$row["reference"].'</td>
                </tr>
                <tr>
                    <td width="30%"><label>Date & Time</label></td>
                    <td width="70%">'.$row["sent_date"].'</td>
                </tr>
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>