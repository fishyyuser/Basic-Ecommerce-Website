<?php 
function checkifadded($item_id){
	require "common.php";
	$user_id=$_SESSION['id'];
	$tocart=false;
	$query="select id from users_products where users_id='$user_id' AND products_id='$item_id'";
	$query_result=mysqli_query($con,$query) or die (mysqli_error($con));
	$id_result=mysqli_fetch_array($query_result);
	if(!is_null($id_result))
		$tocart=true;
	return $tocart;
}
?>
