<?php

    //get value parse from form
    $id_num = $_POST['v_idnum'];
    $purpose = $_POST['v_purpose'];

    //to prevent mysql injection
    $id_num = stripcslashes($id_num);
    $purpose = stripcslashes($purpose);

    //connect to the server
    $conn = new mysqli("localhost", "root", "", "fablab_logs_system");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql_v = "SELECT * from registration where id = $id_num";
    $result_v = $conn->query($sql_v);
    $push_visitor = "INSERT INTO visitors (v_id, v_purpose, v_date) VALUES ($id_num, '$purpose', now())";

    if ($result_v->num_rows > 0) {
        // output data of each row
        while($row = $result_v->fetch_assoc()) {
            echo "Welcome ".$id_num;
            $conn->query($push_visitor);
        }
    } else {
        header("Location: ../reg_first.php");
    }
    $conn->close();
?>
    
