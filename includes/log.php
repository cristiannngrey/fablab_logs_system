<?php

    include '../dbh.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $agency_address = $_POST['agency_address'];
    $contact_num = $_POST['contact_num'];
    $email = $_POST['email'];

    //ensure that form fields are filled properly
    if (empty($firstname)){
        array_push($errors, "Firstname is required");
    }
    if (empty($lastname)){
        array_push($errors, "Lastname is required");
    }
    if (empty($agency_address)){
        array_push($errors, "Agency/address is required");
    }
    if (empty($contact_num)){
        array_push($errors, "Contact number is required");
    }
    if (empty($email)){
        array_push($errors, "Email is required");
    }

    //if all greem
    if (count($errors) == 0){
        $sql = "INSERT INTO registration (firstname, lastname, agency_address, contact_num, email)
        VALUES ('$firstname', '$lastname', '$agency_address', '$contact_num', '$email')";
        $result = $conn->query($sql);

        header("Location: ../index.php");
    }

    
    
?>