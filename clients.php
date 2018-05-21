<?php
    $pageTitle = "CLIENT";
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <center>
        <h1>How's your day?</h1>
        Please scan your QR Code
        <div class="center">
        <video id="preview"></video>
            <script type='text/javascript'>
                let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                scanner.addListener('scan', function (content) {
                  console.log(content);
                });
                Instascan.Camera.getCameras().then(function (cameras) {
                  if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                  } else {
                    console.error('No cameras found.');
                  }
                }).catch(function (e) {
                  console.error(e);
                });

                scanner.addListener('scan', function(content, image){
                    var c_idnum = document.getElementById("c_idnum");
                    c_idnum.value = content;
                });
              </script>
            <form action="includes/c_process.php" method="POST">
            <p>
                <label>QR Code ID:</label>
                <input type="text" id="c_idnum" name="c_idnum" readonly/>
                <br/>
                <label>Purpose:</label>
                <input type="text" id="c_purpose" name="c_purpose" />
            </p>
                <input type="submit" id="btn" value="  OK  " />
            <p>                
        </form>
        </div>
    </center>
</body>
</html>