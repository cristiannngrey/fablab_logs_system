<?php

    include '../dbh.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $agency_address = $_POST['agency_address'];
    $contact_num = $_POST['contact_num'];
    $email = $_POST['email'];

    $sql = "INSERT INTO registration (firstname, lastname, agency_address, contact_num, email)
    VALUES ('$firstname', '$lastname', '$agency_address', '$contact_num', '$email')";
    $result = $conn->query($sql);

    $sql1 = "SELECT id FROM registration 
    WHERE firstname = '$firstname', lastname = '$lastname', agency_address = '$agency_address', 
    contact_num = '$contact_num', email = '$email'";
    $Qr_code_val = $conn->query($sql1);

    echo "<h3> Your QR Code number is </h3>".$Qr_code_val;
    
?>