<?php require "common.php";
$email=$_POST['email'];
$password=$_POST['password'];
$encode_pass=md5($password);
$id_query="select id,first_name from users where email='$email' AND password='$encode_pass'";

$id_result=mysqli_query($con,$id_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($id_result);
$id=$row[0];
$firstname=$row[1];
if(!is_null($id)){
	$_SESSION['id']=$id;
	$_SESSION['email']=$email;
	$_SESSION['firstname']=$firstname;
	header("Location:products.php");
}else{
	echo "invalid email or password";
	header("Refresh:1;signin.php");
}
?>