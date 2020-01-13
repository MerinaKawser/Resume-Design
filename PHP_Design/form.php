<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registration Form</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="jumbotron">
			<h2 class="text-center">Simple Registration Form</h2>
		</div>
		<div class="container">
			<!-- PHP Code goes here ## Starting ## -->
				<?php 
					// including connection page 
					include('connect.php');
					if(isset($_POST['submit'])){
						$name = $_POST['userName'];
						$email = $_POST['email'];
						$address = $_POST['address'];
						$pswd = $_POST['pswd'];
						if(empty($name))
							echo '<h3 class="text-center text-danger">Please Enter Your Name</h3>';
						elseif(empty($email))
							echo '<h3 class="text-center text-danger">Please Enter Your Email</h3>';
						elseif(empty($address))
							echo '<h3 class="text-center text-danger">Please Enter Your Address</h3>';
						elseif(empty($pswd))
							echo '<h3 class="text-center text-danger">Please Enter Your Password</h3>';
						else{
							$insert = "INSERT INTO user(user_name, email, address, pswd)
										VALUES ('$name', '$email', '$address', '$pswd')";
							if(mysqli_query($connection, $insert))
								echo '<h3 class="text-center text-success">Your Registratin Completed Successfully!</h3>';
						}
					}
				?>
			<!-- End PHP Code -->
			<form method="post" action="">
				<div class="form-group">
					<label for="userName">User Name:</label>
					<input type="text" name="userName" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" name="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="address">Your Address:</label>
					<input type="text" name="address" class="form-control" id="address">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" name="pswd" class="form-control" id="pwd">
				</div>
				<button type="submit" name="submit" class="btn btn-success text-center">Submit</button>
				<a href="list.php" class="btn btn-primary" role="button">See User List</a>
			</form>
		</div>
	</body>
</html>