<?php
	$pageTitle = "Login";
	include'header.php'
?>
	<div class="login_container" style:'margin-top:100px;'>
		<form action="includes/admin_login.php" method="POST">
			<h3 class="form-signin-heading"><center><img src="includes/fab_icon.jpg" height="150" width="150"alt="User Image"><br><small>&nbsp;&nbsp;Admin Login</small></center></h3>
				<div class="form-group">
					<input type="text" name="username" id="input" class="form-control" value="" placeholder="Username">
					<input type="password" name="password" id="input" class="form-control" value="" placeholder="Password">
				</div>
				<button type="submit" style='background-color: #32CD32;'>Login</button>
			</form>
	</div>
</body>
</html>