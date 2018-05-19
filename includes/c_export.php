<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "fablab_logs_system");
$output = '';
if(isset($_POST["export"]))
{
    $get_v_details = "SELECT registration.*, clients.c_purpose, clients.c_date 
        FROM registration AS registration 
        INNER JOIN clients AS clients 
        ON (registration.id = clients.c_id);";  
    $result = mysqli_query($connect, $get_v_details);

    if(mysqli_num_rows($result) > 0)
    {
    $output .= '
    <table class="table" bordered="1">  
        <tr>  
            <th>ID</th>  
            <th>Firstname</th>  
            <th>Lastname</th>  
            <th>Agency/Address</th>
            <th>Contact Number</th>  
            <th>Email Address</th>  
            <th>Purpose of Visit</th>
            <th>Date</th>
        </tr>
    ';
    while($row = mysqli_fetch_array($result))
    {
    $output .= '
        <tr>  
            <td>'.$row["id"].'</td>  
            <td>'.$row["firstname"].'</td>  
            <td>'.$row["lastname"].'</td>  
            <td>'.$row["agency_address"].'</td>  
            <td>'.$row["contact_num"].'</td>
            <td>'.$row["email"].'</td>  
            <td>'.$row["c_purpose"].'</td>  
            <td>'.$row["c_date"].'</td>
        </tr>
    ';
    }
    $output .= '</table>';
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=download.xls');
    echo $output;
    }
}
?>
