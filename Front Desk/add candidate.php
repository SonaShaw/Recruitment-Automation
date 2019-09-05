
<?php
include("class/user.php");
$candidate = new user;
extract($_POST);


// insert details of registered candidate to database.
// set the timezone first
if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
}
$date = date("Y-m-d");
$time = date("H:i:s");
$query = "insert into candidate values('$cnum','$fullname','$department','$profile','$experience','$ca',
	'$source','$subsource','$consultancy','$othersource','$qsset','$date','$time')";
if($candidate->register($query)){
	$candidate->url("page_2_candidatedetails.php?run=success");
}
?>