<?php
    session_start();

    if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
    {
        header("Location:.//index.php"); 
    }
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
            if(!empty($username) && !empty ($password)) {
                if ($username == 'admin' && $password == 'fablab'){
                    $_SESSION['use']=$username;
                    header ('Location: ../admin.php');
                }
            }
            else {
                echo '<p class="login-note"><i>You must supply a username and password!</i></p>';
        }
    } 

?>