<?php

    //get value parse from form
    $id_num_u = $_POST['u_idnum'];
    $machine_used = $_POST['machine_used'];
    $project_title = $_POST['project_title'];

    //to prevent mysql injection
    $id_num_u = stripcslashes($id_num_u);
    $machine_used = stripcslashes($machine_used);
    $project_title = stripcslashes($project_title);

    //connect to the server
    $conn = new mysqli("localhost", "root", "", "fablab_logs_system");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql_u = "SELECT * from registration where id = $id_num_u";
    $result_u = $conn->query($sql_u);
    $push_user = "INSERT INTO users (u_id, u_machine_used, u_project_title, u_date) VALUES ($id_num_u, '$machine_used', '$project_title', now())";

    if ($result_u->num_rows > 0) {
        // output data of each row
        while($row = $result_u->fetch_assoc()) {
            echo "Welcome ".$id_num_u;
            echo "Connection good";
            $conn->query($push_user);
        }
    } else {
        header("Location: ../reg_first.php");
    }
?>