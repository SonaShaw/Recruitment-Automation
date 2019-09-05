<?php
// Match the login credential with database

	include("class/user.php");
	$login = new user;
	extract($_POST);
	if($login->login($e,$p)){
		$login->url("page_2_candidatedetails.php");
	}else{
		$login->url("index.php?run=failed");
		
	}
?>