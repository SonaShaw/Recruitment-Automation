<!DOCTYPE html>
<html lang="en">


<head>
  <title>Receptionist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>

<!--------Show CIS logo----------->
<br>
<div id="container" align="center" >
    <img src="img/cis.jpg" alt=""  width = "160" height = "75" />
</div>


<!----------------Container of panel and body ------------------------->
<div class="container" >
<div class="row">
	<div class = "col-sm-3" style = "visibility:hidden">
		<br>
		<div class="panel panel-primary" >	
		</div>
	</div>
	
	<div class = "col-sm-6">
		<br>
		<div class="panel panel-primary" >
			<div class = "panel-heading" align = "center" style="background-color:#081450;"><font face = "Times New Roman"><h3><b>Front Desk Login</b></h3></font>
			</div>
			<div class = "panel-body">
			
			<?php
			// Check login is failed then show alert box
			if(isset($_GET['run']) && $_GET['run']=="failed"){
				
				$message = "Invalid email or password entered";
				echo "<script type='text/javascript'>
						alert('$message'); 
						window.location.href='index.php'; 
						
						</script>";
			}
			?>
			
			<form action="login.php" method = "post">
				<div class="form-group">
					
					<label for="email"><font face = "Times New Roman">Login ID</font></label>
					<input type="email" name = "e" class="form-control" id="email" placeholder="Enter email" autofocus required>
				</div>
				<div class="form-group">
					
					<label for="pwd"><font face = "Times New Roman">Password</font></label>
					<input type="password" name = "p" class="form-control" id="pwd" placeholder="Enter password" autofocus required>
				</div>
				<div align = "right">
					
					<span ><a href="" onclick = "alert('Please contact the HOD to retrieve your password');"><font face = "Times New Roman" color = "#081450"><b>Forgot Password?</b></font></a></span>
				</div>
				
				
				<div align = "center">
				<button type="submit" class="btn btn-default" style="width: 100px; height: 45px;"><font face = "Times New Roman" size="4"><b>SIGN IN</b></font></button>
				</div>
			</form>
			</div>
		</div>
	</div>
	</div>
</div>
<script src = "js/recruitment.js" type = "text/javascript"></script>
</body>
</html>
