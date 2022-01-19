<?php require "common.php";
$item_id=$_GET['pid'];
$user_id=$_SESSION['id'];
$insert_query="insert into users_products (users_id,products_id) values ('$user_id','$item_id')";
$inserting=mysqli_query($con,$insert_query) or die (mysqli_error($con));
echo "Successfully added to Cart";
header("Refresh:1,products.php");
?>