<?php

    //get value parse from form
    $id_num_c = $_POST['c_idnum'];
    $purpose_c = $_POST['c_purpose'];

    //to prevent mysql injection
    $id_num_c = stripcslashes($id_num_c);
    $purpose_c = stripcslashes($purpose_c);

    //connect to the server
    $conn = new mysqli("localhost", "root", "", "fablab_logs_system");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql_c = "SELECT * from registration where id = $id_num_c";
    $result_c = $conn->query($sql_c);
    $push_client = "INSERT INTO clients (c_id, c_purpose, c_date) VALUES ($id_num_c, '$purpose_c', now())";

    if ($result_c->num_rows > 0) {
        // output data of each row
        while($row = $result_c->fetch_assoc()) {
            echo "Welcome ".$id_num_c;
            $conn->query($push_client);
        }
        header("Location: ../succ_log.php");
    } else {
        header("Location: ../reg_first.php");
    }
    $conn->close();
?>