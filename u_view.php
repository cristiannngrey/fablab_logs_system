<?php
    include 'header.php';
    $connect = mysqli_connect("localhost", "root", "", "fablab_logs_system");
    $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                        FROM registration AS registration 
                        INNER JOIN users AS users 
                        ON (registration.id = users.u_id);";  
    $result = mysqli_query($connect, $get_v_details);
?>
    <h2 align="center">Users Log</h2><br /> 
    <table id="logs">
     <tr>
        <th>ID</th>  
        <th>Name</th>  
        <th>Agency/Address</th>
        <th>Contact Number</th>  
        <th>Email Address</th>  
        <th>Machine Used</th>
        <th>Project Title</th>
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
         <td>'.$row["u_machine_used"].'</td>
         <td>'.$row["u_project_title"].'</td>  
         <td>'.$row["u_date"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="includes/u_export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
 </body>  
</html>
