<?php

    include '../dbh.php';


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $agency_address = $_POST['agency_address'];
    $contact_num = $_POST['contact_num'];
    $email = $_POST['email'];
    
    if (!empty($firstname) && !empty($lastname) && !empty($agency_address) && !empty($contact_num) && !empty($email) ){ 
        $sql = "INSERT INTO registration (firstname, lastname, agency_address, contact_num, email)
        VALUES ('$firstname', '$lastname', '$agency_address', '$contact_num', '$email')";

        if ($conn->query($sql) === TRUE) {            
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else {
            header("Location: ../register_1.php");        
    }
?>