<?php

$conn = mysqli_connect("localhost", "root", "", "fablab_logs_system");

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}