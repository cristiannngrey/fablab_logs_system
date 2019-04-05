<?php
    session_start();
    $pageTitle = "ADMIN";
    include 'header.php';

?>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location: index.php");  
       }
?>
    <div class="go_right">
        <a href='includes/logout.php'> Logout</a>
    </div>
    <div class="center">
        <center><h1>ADMIN</h1></center><br>
        <br><hr><br><br>
        <center>
            <div class="row">
                <div class="column3">
                    <a href="v_view.php"><img src="includes/a_visit.png" alt="Visitor" height="200"></a><br/>
                    View Visitors Log<br/><br/>
                </div>

                <div class="column3">
                    <a href="u_view.php"><img src="includes/a_user.png" alt="User" height="200"></a><br/>
                    View Users Log<br/><br/>
                </div>

                <div class="column3">
                    <a href="c_view.php"><img src="includes/a_client.png" alt="CLient" height="200"></a><br/>
                    View Clients Log<br/>
                </div>
            </div>
        </center>
    </div>
</body>
</html>