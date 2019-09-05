
<?php

	include("class/user.php");
	$submit = new user;
	unset($_SESSION['email']);
	$submit->url("index.php");

					
?>