<?php
require "common.php";
$orgpass=md5($_POST['old']);
$newpass=md5($_POST['new']);
$retypass=md5($_POST['rety']);
$id=$_SESSION['id'];
$pass_query="select password from users where id=$id";
$up_pass="update users set password='$newpass' where id=$id";


$query_submit=mysqli_query($con,$pass_query) or die(mysqli_error($con));
$pass_result=mysqli_fetch_array($query_submit);
if($pass_result[0]!=$orgpass){
	echo "Orignal password does not match";
	header("Refresh:1,settings.php");
}
else if($newpass!=$retypass){
	echo "new passwords does'nt match";
	header("Refresh:1,settings.php");
	die();
}
else{
	$up_pass_submit=mysqli_query($con,$up_pass) or die(mysqli_error($con));
	echo "Update Successful! Password Updated";
	header("Refresh:2,cart.php");
}
?>