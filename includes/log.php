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

header("Location: ../index.php");