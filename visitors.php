<?php
    $pageTitle = "VISITOR";
    include 'header.php';
?>

    <center>
        <h1>Welcome, thanks for visiting</h1>
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
                    var v_idnum = document.getElementById("v_idnum");
                    v_idnum.value = content;
                });
              </script>

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