<?php
    $pageTitle = "WELCOME";
	include 'header.php';
?>
    <div class="center">
        <center><h1>WELCOME TO FABLAB!</h1></center><br>
        Please select one:
        <div class="go_right">
            <a href="register.php">Register</a> |
            <a href="login.php">Admin</a>
        </div>
        <br><hr><br><br>
        <center>
            <div class="row">
                <div class="column3">
                    <a href="visitors.php"><img src="includes/visit.png" alt="Visitor" height="200"></a><br/>
                    Visitor<br/><br/>
                </div>

                <div class="column3">
                    <a href="users.php"><img src="includes/user.png" alt="User" height="200"></a><br/>
                    User<br/><br/>
                </div>

                <div class="column3">
                    <a href="clients.php"><img src="includes/client.png" alt="CLient" height="200"></a><br/>
                    Client<br/>
                </div>
            </div>
        </center>
    </div>
</body>
</html>