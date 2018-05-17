<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Visitors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <center>
        <h1>Welcome, thanks for visiting</h1>
        Please scan your QR Code
        <div class="center">
            <form action="includes/v_process.php" method="POST">
            <p>
                <label>QR Code ID:</label>
                <input type="text" id="v_idnum" name="v_idnum" />
                <br/>
                <label>Purpose of Visit:</label>
                <input type="text" id="v_purpose" name="v_purpose" />
            </p>
                <input type="submit" id="btn" value="  OK  " />
            <p>                
        </form>
        </div>
    </center>
</body>
</html>