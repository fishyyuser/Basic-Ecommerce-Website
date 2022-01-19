<?php require "common.php";
if(!isset($_SESSION['id'])){
    header("Location:signin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <script type="text/javascript" src="js/jQuery.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <link rel="stylesheet" type="text/css" href="ncss.css">
</head>
<body>
	<div>
        <?php require "header.php";?>
        <?php 
        $user_id=$_SESSION['id'];
        $sum=0;
        $product_query="select products.id,products.name,products.price from products inner join users_products on products.id=users_products.products_id where users_id=$user_id";
        $product_result=mysqli_query($con,$product_query) or die(mysqli_error($con));
        
        ?>

	
        <br><br>


        <div class=" col-xs-offset-2 col-xs-8">
        <table class="table">
        	<tbody>
        		<tr>
        			<th>Item Number</th>
        			<th>Name</th>
        			<th>Price</th>
                    <th></th>

        		</tr>
                <?php while ($allproducts=mysqli_fetch_array($product_result)){
                        echo "<tr>";
                        echo "<td>$allproducts[0]</td>";
                        echo "<td>$allproducts[1]</td>";
                        echo "<td>$allproducts[2]</td>";
                        echo "<td><a href=\"delete_item.php?pid=$allproducts[0]\" name=\"delete\" value=\"delete\" class=\"btn  btn-primary\">Delete </a></td";
                        $sum+=$allproducts[2];
                        echo "</tr>";
                    }
                        ?>

        		<tr>
                    <td></td>
        			<td>Total</td>
        			<?php echo "<td>Rs.$sum/-</td>";?>
                     
        			<td>
                        <?php if($sum>0){?>
        				<a  href="success.php"><input type="submit" value="Confirm Order" class="btn btn-primary"></a>
                        <?php }
                        ?>
        			</td>
        		</tr>
        	</tbody>
        </table>
    </div>
  

    <?php require "footer.php"?> 
</div>

</body>
</html>