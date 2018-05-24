<?php
    $pageTitle = "User's Log";
    include 'header.php';
    $connect = mysqli_connect("localhost", "root", "", "fablab_logs_system");
    $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                        FROM registration AS registration 
                        INNER JOIN users AS users 
                        ON (registration.id = users.u_id);";  
    $result = mysqli_query($connect, $get_v_details);
?>  
    <h2 align="center">Users Log</h2><br><hr> 
    <div class = "container">
      <div class = "go_right1">
        <form action="includes/u_date_condition.php">
        View Logs of 
          <select name="month">
            <option value="jan">January</option>
            <option value="feb">February</option>
            <option value="mar">March</option>
            <option value="apr">April</option>
            <option value="may">May</option>
            <option value="jun">June</option>
            <option value="jul">July</option>
            <option value="aug">August</option>
            <option value="sep">September</option>
            <option value="oct">October</option>
            <option value="nov">November</option>
            <option value="dec">December</option>
          </select>
          <select name="year">
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
          </select>
          <input type="submit" value="View">
        </form>
      </div>
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
    </div>
  </div>    
 </body>  
</html>
