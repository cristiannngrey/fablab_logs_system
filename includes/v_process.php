<?php
    //get value parse from form
    $id_num = $_POST['v_idnum'];

    //to prevent mysql injection
    $id_num = stripcslashes($id_num);

    //connect to the server
    $conn = new mysqli("localhost", "root", "", "fablab_logs_system");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $result = ("SELECT * from registration where id = '$id_num")
        or die("Failed to query database ".mysql_error());

    if ($result->num_rows > 0){
        echo "WELCOME ".$row['id'];
    } else {
        echo "You're not yet Registered";
    }
    ?>