<?php
    $pageTitle = "USER";
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <center>
        <h1>Hello, got some amazing ideas today?</h1>
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
                    var u_idnum = document.getElementById("u_idnum");
                    u_idnum.value = content;
                });
              </script>
            <form action="includes/u_process.php" method="POST">
            <p>
                <label>QR Code ID:</label>
                <input type="text" id="u_idnum" name="u_idnum" readonly />
                <br/>
                <label>Type of Machine Used:</label>
                <input type="text" id="machine_used" name="machine_used" />
                <br/>
                <label>Project Title:</label>
                <input type="text" id="project_title" name="project_title" />
            </p>
                <input type="submit" id="btn" value="  OK  " />
            <p>                
        </form>
        </div>
    </center>
</body>
</html>