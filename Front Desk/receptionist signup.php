<!DOCTYPE html>
<html lang="en">


<head>
  <title>Reception</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>
<!--- show Cis logo ----->
<div id="container" align="right" >
    <img src="img/cis.jpg" alt=""  width = "200" height = "100" />
</div>



<div class="container">
	<div class="row">
	<div class = "col-sm-12">
		<div class="panel panel-primary">
			<div class="panel-heading" align = "center" style="background-color:#030456;"><font face = "Times New Roman"><h1>Recruitment Management System</h1></font>
				
			</div>	
		</div>	
	</div>
	</div>
</div>	

<div class="container">
	<div class = "row">
	<div class = "col-sm-12">
		<div class="panel panel-primary">
			<div class = "panel-heading" style="background-color:#030456;"><font face = "Times New Roman"><h3>ADD RECEPTIONIST</h3></font>
			</div>
			<div class = "panel-body">
			<?php
				if(isset($_GET['run'])&& $_GET['run']=="success"){
					echo "<mark>Registratiom Successful</mark>";
				}
			
			?>
			
			<form role = "form" method = "post" action = "signup.php" enctype = "multipart/form-data">
				<div class="form-group">
					<label style="color: red">*</label>
					<label for="name">Full Name:</label>
					<input type="text" class="form-control" name = "name" id="name" placeholder="Enter Full name" autofocus required>
				</div>
				<div class="form-group">
					<label style="color: red">*</label>
					<label for="email">Email:</label>
					<input type="email" class="form-control" name = "email" id="email" placeholder="Enter email" autofocus required>
				</div>
				<div class="form-group">
					<label style="color: red">*</label>
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" name = "password" id="pwd" placeholder="Enter password" autofocus required>
				</div>
				<div class="form-group">
					<label style="color: red">*</label>
					<label for="resume">Upload Resume:</label>
					<input type="file" class="form-control" name = "resume" id="file" autofocus required>
				</div>
				<div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>
