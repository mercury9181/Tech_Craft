<?php
 if(isset($_POST["project_id"]))
 {
      $output = '';
      $connect = mysqli_connect("localhost", "techcraf", "mQ0kh06x8R", "techcraf_tech_craft");
      $query = "SELECT * FROM project WHERE id = '".$_POST["project_id"]."'";
      $result = mysqli_query($connect, $query);
      $output .= '
      <div class="table-responsive">
           <table class="table table-bordered" style="color:black">';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td width="30%"><label>Project name</label></td>
                     <td width="70%">'.$row["project_name"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Client name</label></td>
                     <td width="70%">'.$row["client_name"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Service type</label></td>
                     <td width="70%">'.$row["service_type"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Project details</label></td>
                     <td width="70%">'.$row["project_details"].'</td>
                </tr>
                ';
      }
      $output .= "</table></div>";
      echo $output;
 }
 ?>
