<?php

    //get value parse from form
    $id_num = $_POST['u_idnum'];
    $machine_used = $_POST['u_machine_used'];
    $project_title = $_POST['u_project_title'];

    //to prevent mysql injection
    $id_num = stripcslashes($id_num);
    $machine_used = stripcslashes($machine_used);
    $project_title = stripcslashes($project_title);

    //connect to the server
    $conn = new mysqli("localhost", "root", "", "fablab_logs_system");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql1 = "SELECT * from registration where id = $id_num";
    $result = $conn->query($sql1);
    $push_visitor = "INSERT INTO visitor (u_id, u_machine_used, u_project_title) VALUES ($id_num, '$machine_used', '$project_title', now())";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Welcome ".$id_num;
            $conn->query($push_visitor);

        }
    } else {
        header("Location: ../reg_first.php");
    }
?>