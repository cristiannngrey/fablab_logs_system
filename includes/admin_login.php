<?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
            if(!empty($username) && !empty ($password)) {
                if ($username == 'admin' && $password == 'ninooppa'){
                        header ('Location: ../admin.php');
                }
            }
            else {
                echo '<p class="login-note"><i>You must supply a username and password!</i></p>';
        }
    } 

?>