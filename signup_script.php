<?php require "common.php";
$email=$_POST['email'];
$password=$_POST['password'];
$encode_pass=md5($password);
$contact=$_POST['contact'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$signup_query="insert into users(email,first_name,last_name,phone,password) values ('$email','$fname','$lname','$contact','$encode_pass')"; 

if(!preg_match($regex_email, $email)){
	echo "incorrect email";
}
else{
	$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

	if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
		echo"Incorrect password pattern! \n Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
	}
	else{
		$signup_submit_query=mysqli_query($con,$signup_query) or die(mysqli_error($con));
		$_SESSION ['email']=$email;
		$_SESSION ['firstname']=$fname;
		$_SESSION ['id']=mysqli_insert_id($con);
		header("Location:products.php");
	}
}
?>
