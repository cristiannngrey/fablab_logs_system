<?php
	include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="row">
	<div class="center" style="background-color: #aaa;">
		<h2>Register</h2>
		<p>Please fill in this form to create an account.</p>
		<hr>
		<form action="includes/log.php" method="POST">
				<div class="container">
					<label for="Name"><b>Name</b></label>
					<input type="text" name="firstname" placeholder ="Firstname">
					<input type="text" name="lastname" placeholder ="Lastname"><br>
					<label for="agency_address"><b>Agency/Address</b></label>
					<input type="text" name="agency_address" placeholder ="Agency/Address"><br>
					<label for="contact_num"><b>Contact No.</b></label>
					<input type="text" name="contact_num" placeholder ="Contact No."><br>
					<label for="email"><b>Email</b></label>
					<input type="text" name="email" placeholder ="Email Address"><br>
					<button type="submit">OK</button>
				</div>
			</form>
		</div>
			
	</div>
	<div class="footer">
		cRistian
	</div>

</body>
</html>
