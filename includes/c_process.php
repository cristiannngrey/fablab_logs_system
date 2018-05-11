<?php

    //get value parse from form
    $id_num = $_POST['c_idnum'];
    $purpose = $_POST['c_purpose'];

    //to prevent mysql injection
    $id_num = stripcslashes($id_num);
    $purpose = stripcslashes($purpose);

    //connect to the server
    $conn = new mysqli("localhost", "root", "", "fablab_logs_system");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql1 = "SELECT * from registration where id = $id_num";
    $result = $conn->query($sql1);
    $push_visitor = "INSERT INTO visitor (c_id, c_purpose, c_date) VALUES ($id_num, '$purpose', now())";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Welcome ".$id_num;
            $conn->query($push_visitor);

        }
    } else {
        header("Location: ../reg_first.php");
    }
    $conn->close();
?>