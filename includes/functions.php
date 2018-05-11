<?php

session_start();

function success_notify($type = 'neutral', $message = 'Registration Successful.'){
    $_SESSION['success_notify']['type'] = $type;
    $_SESSION['success_notify']['message'] = $message;
}

function notification(){
    if(isset($_SESSION['success_notify'])){
        $type = $_SESSION['success_notify']['type'];
        $message = $_SESSION['success_notify']['message'];

        $html = '<div class="success_notify '.$type.'">'.$message.'</div>';

        unset($_SESSION['success_notify']);

        echo $html;
    }
}