<?php 
require "common.php";
$item_id=$_GET['pid'];
$users_id=$_SESSION['id'];
$del_query="delete from users_products where products_id=$item_id AND users_id=$users_id";
$del_result=mysqli_query($con,$del_query) or die (mysqli_error($con));
echo "item removed from cart";
header("Refresh:1,cart.php");

?>