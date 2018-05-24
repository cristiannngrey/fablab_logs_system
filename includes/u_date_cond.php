<?php
    $connect = mysqli_connect("localhost", "root", "", "fablab_logs_system");
    if(isset($_POST['submit'])){
        $month = $_POST['month'];
        $year = $_POST['year'];
        
        switch ($month){
            case "jan":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-01-01 00:00:00' AND '2018-01-31 00:00:00';";  
                break;
            case "feb":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-02-01 00:00:00' AND '2018-02-28 00:00:00';";  
                break;
            case "mar":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-03-01 00:00:00' AND '2018-03-31 00:00:00';";  
                break;
            case "apr":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-04-01 00:00:00' AND '2018-04-30 00:00:00';";  
                break;
            case "may":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-05-01 00:00:00' AND '2018-05-31 00:00:00';";  
                break;
            case "jun":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-06-01 00:00:00' AND '2018-06-30 00:00:00';";  
                break;
            case "jul":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-07-01 00:00:00' AND '2018-07-31 00:00:00';";  
                break;
            case "aug":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-08-01 00:00:00' AND '2018-08-30 00:00:00';";  
                break;
            case "sep":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-09-01 00:00:00' AND '2018-09-31 00:00:00';";  
                break;
            case "oct":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-10-01 00:00:00' AND '2018-10-30 00:00:00';";  
                break;
            case "nov":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-11-01 00:00:00' AND '2018-11-31 00:00:00';";  
                break;
            case "dec":
                $get_v_details = "SELECT registration.*, users.u_machine_used, u_project_title , users.u_date 
                FROM registration AS registration INNER JOIN users AS users ON (registration.id = users.u_id)
                WHERE c_date BETWEEN >= '2018-12-01 00:00:00' AND '2018-12-30 00:00:00';";  
                break;
        };
        $result = mysqli_query($connect, $get_v_details);
    }
?>