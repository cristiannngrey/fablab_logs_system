<?php
	include'header.php'
?>
	<div class="center">
		<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="jumbotron" style="margin-top:50px">
					<form action="includes/admin_login.php" method="POST">
						<h3 class="form-signin-heading"><img src="includes/ninooppa.jpg" height="50" width="50" class="img-circle" alt="User Image"><small>&nbsp;&nbsp;Admin Login</small></h3>
							<div class="form-group">
										<input type="text" name="username" id="input" class="form-control" value="" placeholder="Username">
										<input type="password" name="password" id="input" class="form-control" value="" placeholder="Password">
							</div>
							<button type="submit" style='background-color: #32CD32;'>Login</button>
					</form>
						
				</div>
			</div>
		</div class="col-md-4"></div>
	</div>
</body>
</html>

