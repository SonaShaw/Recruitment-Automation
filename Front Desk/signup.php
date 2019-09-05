<?php
include("class/user.php");
$register = new user;
extract($_POST);
$resume = $_FILES['resume']['name'];
$tmp_resume = $_FILES['resume']['tmp_name'];
move_uploaded_file($tmp_resume,"resume/".$resume);
$query = "insert into signup values ('$name','$email','$password')";

if($register->register($query)){
	$register->url("page_1_receptionistLogin.php?run=success");
}

 
?>