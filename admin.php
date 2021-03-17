<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script src="adminval.js"></script>
</head>
<body>
	<div class="container d-flex justify-content-center">
		<div class="box mt-5 bg-light" style="width:1000px;">
			<?php
				$servername="localhost";
				$username="root";
				$password="";
				$dbname="form";

				// create connection
				$conn=new mysqli($servername,$username,$password,$dbname);

				// check connection

				if($conn->connect_error)
				{
					die("Connection Failed".$conn->connect_error);
				}
				// echo("Connected Successfully");
				// echo"<br>";

				// Select Values
				$sql="SELECT * FROM user";
				$result=$conn->query($sql);

				if($result->num_rows > 0)
				{
			?>
				<table class="table table-bordered text-center">
					<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>User Name</th>
					<th>Email</th>
					<th>Action</th>
					</tr>
			<?php
					while($row=$result->fetch_assoc())
				{
			?>
					<tr>
						<td><?=$row["id"]?></td>
						<td><?=$row["fname"]?></td>
						<td><?=$row["lname"]?></td>
						<td><?=$row["uname"]?></td>
						<td><?=$row["email"]?></td>
						<td>

							<form action="delete.php" method="post">
								<button type="button" class="btn bg-info text-white btn-sm mr-2" data-toggle="modal" data-target="#a<?=$row["id"]?>">Update</button>
								<input type="hidden" name="id" value="<?=$row["id"]?>" >
								<button type="sumbit" class="btn bg-danger text-white btn-sm">Delete</button>
							</form>
						</td>
					</tr>

					  <!-- The Modal -->
					  <div class="modal" id="a<?=$row["id"]?>">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					      
					        <!-- Modal Header -->
					        <div class="modal-header">
					          <h4 class="modal-title">Registeration</h4>
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					        </div>
					        
					        <!-- Modal body -->
					        <div class="modal-body">

					        	<form action="update.php" method="post" onsubmit="return validate()" name="myForm" >
				        			<div class="row form-group">
				        				<!-- Id should be hidden -->
				        				<input type="hidden" name="id" value="<?=$row["id"]?>">

				        				<div class="col">
				        					<label for="fname">First Name:</label>
				        					<input type="text" class="fname form-control" name="fname" value="<?=$row["fname"]?>">
				        				</div>
				        				<div class="col">
				        					<label for="lname">Last Name:</label>
				        					<input type="text" class="lname form-control" name="lname" value="<?=$row["lname"]?>">
				        				</div>
				        			</div>

				        			<div class="row form-group">
				        				<div class="col">
				        					<label for="uname">User Name:</label>
				        					<input type="text" class="uname form-control" name="uname" value="<?=$row["uname"]?>">
				        				</div>
				        			</div>
				        			
				        			<div class="row form-group">
				        				<div class="col">
				        					<label for="password">Password:</label>
				        					<input type="text" class="password form-control" name="password" value="<?=$row["password"]?>">
				        				</div>
				        				<div class="col">
				        					<label for="cpassword">Confirm Password:</label>
				        					<input type="text" class="cpassword form-control" name="cpassword" value="<?=$row["cpassword"]?>">
				        				</div>
				        			</div>
				        			<div class="row form-group">
				        				<div class="col">
				        					<label for="address">Address:</label>
				        					<input type="text" class="address form-control" name="address" value="<?=$row["address"]?>">
				        				</div>
				        			</div>
				        			<div class="row form-group">
				        				<div class="col">
				        					<label for="phone">Phone No:</label>
				        					<input type="number" class="phone form-control" name="phone" value="<?=$row["phone"]?>">
				        				</div>
				        			</div>
				        			<div class="row form-group">
				        				<div class="col">
				        					<label for="email">Email:</label>
				        					<input type="email" class="email form-control" name="email" value="<?=$row["email"]?>">
				        				</div>
				        			</div>
				        			<div class="row form-group mt-4">
				        				<div class="col-2 offset-3 d-flex justify-content-end">
				        					<input type="Submit" class="btn btn-info" value="Submit">
				        				</div>
				        				<div class="col-2 d-flex justify-content-center">
				        					<input type="Reset" class="btn btn-secondary" value="Reset">
				        				</div>
				        				<div class="col-2 d-flex justify-content-start">
				        					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        				</div>
				        			</div>
				        		</form>

					       	</div>       
					      </div>
					    </div>
					  </div>

			<?php
				}
			?>
					</table>
			<?php
				}

				else 
				{
				  echo "0 results";
				}

				$conn->close();
			?>
		</div>
	</div>
</body>
</html>