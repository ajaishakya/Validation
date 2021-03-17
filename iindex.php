<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script src="validation.js"></script>
</head>

<body>
	<div class="container">
		<div class="box1 d-flex justify-content-center align-items-center" style="height: 720px;">
			<div class="box2 bg-dark d-flex justify-content-center" style="height: 680px; width: 800px; border-radius: 20px;">
				<div class="box3 mt-4" style=" width: 650px;"> 
					<form action="" method="post" onsubmit="return validate()">
						<div class="row form-group">
							<div class="col">
								<h2 class="text-center text-white mb-2">REGISTERATION</h2>	
							</div>
						</div>
						<div class="row form-group">
							<div class="col">
								<label class="text-white" >First Name</label>
								<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" autocomplete="off" required>
							</div>
							<div class="col">
								<label class="text-white" >Last Name</label>
								<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" autocomplete="off" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col">
								<label class="text-white" >User Name</label>
								<input type="text" class="form-control" name="uname" id="uname" placeholder="Username" autocomplete="off" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col">
								<label class="text-white" >Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
							</div>
							<div class="col">
								<label class="text-white" >Confirm Password</label>
								<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col">
								<label class="text-white" >Address</label>
								<input type="text" class="form-control" name="address" id="address" placeholder="Address" autocomplete="off" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col">
								<label class="text-white" >Phone No</label>
								<input type="number" class="form-control" name="phone" id="phone" placeholder="Phone no" autocomplete="off" required> 
							</div>
						</div>
						<div class="row form-group">
							<div class="col">
								<label class="text-white" >Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
							</div>
						</div>
						<div class="row form-group mt-4">
							<div class="col-2 offset-4 d-flex justify-content-center">
								<input type="Submit" class="btn btn-secondary" value="Submit">
							</div>
							<div class="col-2 d-flex justify-content-center">
								<input type="Reset" class="btn btn-secondary" value="Reset">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>