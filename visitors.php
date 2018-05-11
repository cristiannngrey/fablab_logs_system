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
        <h1>Welcome Visitor</h1>
        Please scan your QR Code
        <div class="center_form">
            <form action="includes/v_process.php" method="POST">
            <p>
                <label>QR Code ID:</label>
                <input type="text" id="v_idnum" name="v_idnum" />
            </p>
                <input type="submit" id="btn" value="OKdokee" />
            <p>                
        </form>
        </div>
    </center>
</body>
</html>