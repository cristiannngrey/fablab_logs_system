<?php
include 'header.php';
    $connect = mysqli_connect("localhost", "root", "", "fablab_logs_system");
    $get_v_details = "SELECT registration.*, clients.c_purpose, clients.c_date 
                        FROM registration AS registration 
                        INNER JOIN clients AS clients 
                        ON (registration.id = clients.c_id);";  
    $result = mysqli_query($connect, $get_v_details);
?>
    <h2 align="center">Clients Log</h2><br /> 
    <table id="logs">
     <tr>
        <th>ID</th>  
        <th>Name</th>
        <th>Agency/Address</th>
        <th>Contact Number</th>  
        <th>Email Address</th>  
        <th>Purpose of Visit</th>
        <th>Date and Time</th>
    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["id"].'</td>  
         <td>'.$row["firstname"].' '.$row["lastname"].'</td>  
         <td>'.$row["agency_address"].'</td>  
         <td>'.$row["contact_num"].'</td>
         <td>'.$row["email"].'</td>  
         <td>'.$row["c_purpose"].'</td>  
         <td>'.$row["c_date"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="includes/c_export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>
