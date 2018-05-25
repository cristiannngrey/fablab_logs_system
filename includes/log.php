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
            $last_id = $conn->insert_id;
            $pad_length = 6;
            $pad_char = 0;
            $str_type = 'd';
            $format = "%{$pad_char}{$pad_length}{$str_type}";
            $id_str = sprintf($format, $last_id	);
            //enhance this code
            //add interactive notification
            echo "New record created successfully. <br>
                  Thank you for Registering. Your QR ID is: " . $id_str;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else {
            header("Location: ../register_1.php");        
    }
?>