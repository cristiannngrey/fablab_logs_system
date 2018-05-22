<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php 
			if(isset($pageTitle)){
				echo $pageTitle;
			} 
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<link rel="stylesheet" href= "includes/bootstrap.min"/>  
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>  
  	<script src="includes/jquery.min"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"
			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			crossorigin="anonymous"></script>
	<script type="text/javascript" src="includes/instascan.min.js"></script>

</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php"><img src="includes/logo.png" alt="FabLab Bohol" height="55"></a>
			</li>
        </ul>
    </nav>
</header>