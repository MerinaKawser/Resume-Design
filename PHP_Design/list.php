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
			<h2 class="text-center">Registered User List</h2>
		</div>
		<div class="container">
			<table class="table table-hover">
				<thead>
					<tr class="bg-primary">
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
					</tr>
				</thead>
			<?php 
				// including connection page
				include('connect.php');
				$select = "SELECT user_name, email, address, pswd FROM user";
				$selectQuery = mysqli_query($connection, $select);
				if(mysqli_num_rows($selectQuery)>0){
					while($rows = mysqli_fetch_assoc($selectQuery)){
						//echo $rows['user_name'];
						?>
							<tbody>
								<tr>
									<td><?php echo $rows['user_name'];?></td>
									<td><?php echo $rows['email'];?></td>
									<td><?php echo $rows['address'];?></td>
								</tr>
							</tbody>
						<?php
					}
				}
			?>
				<tfoot>
					<tr class="bg-primary">
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</body>
</html>