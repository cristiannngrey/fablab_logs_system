<?php
    $connect = mysqli_connect("localhost", "root", "", "fablab_logs_system");
    $get_v_details = "SELECT registration.*, visitors.v_purpose, visitors.v_date 
                      FROM registration AS registration 
                      INNER JOIN visitors AS visitors 
                      ON (registration.id = visitors.v_id);";  
    $result = mysqli_query($connect, $get_v_details);
?>
 
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export MySQL data to Excel in PHP</h2><br /> 
    <table class="table table-bordered">
     <tr>
        <th>ID</th>  
        <th>Firstname</th>  
        <th>Lastname</th>  
        <th>Agency/Address</th>
        <th>Contact Number</th>  
        <th>Email Address</th>  
        <th>Purpose of Visit</th>
        <th>Date</th>
    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["id"].'</td>  
         <td>'.$row["firstname"].'</td>  
         <td>'.$row["lastname"].'</td>  
         <td>'.$row["agency_address"].'</td>  
         <td>'.$row["contact_num"].'</td>
         <td>'.$row["email"].'</td>  
         <td>'.$row["v_purpose"].'</td>  
         <td>'.$row["v_date"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="includes/v_export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>
