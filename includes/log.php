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
    $result = $conn->query($sql);

    $sql1 = "SELECT id FROM registration 
    WHERE firstname = '$firstname', lastname = '$lastname', agency_address = '$agency_address', 
    contact_num = '$contact_num', email = '$email'";
    $Qr_code_val = $conn->query($sql1); 

    echo "QR code is ".$Qr_code_val;

    } else {
                echo '<p class="regnotify"><i>All fields are required!</i></p>';
            }

    
/*
    if  (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['agency_address']) && isset($_POST['contact_num']) && isset($_POST['email'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $agency_address = $_POST['agency_address'];
        $contact_num = $_POST['contact_num'];
        $email = $_POST['email'];
    


            if (!empty($firstname) && !empty($lastname) && !empty($agency_address) && !empty($contact_num) && !empty($email) ){ 
                     
                $query = "INSERT INTO `users` VALUES (
                    '$firstname',
                    '$lastname',
                    '$agency_address',
                    '$contact_num',
                    '$email');"

                    $query_run = conn->query($query);

                if ($query_run = mysql_query($query)){
                    echo '<p class="regnotify"><i>You\'re Successfully Registered!</i></p>';
                } else {
                    echo '<p class="regnotify"><i>Sorry we can\'t register you this time. Please Try Again!</i></p>';
                }  
            } else {
                echo '<p class="regnotify"><i>All fields are required!</i></p>';
            }
        }
*/

?>