<?php require "common.php";
if(!isset($_SESSION['id'])){
    header("Location:signin.php");
}?>
<!DOCTYPE html>
<html>
<head>
	<title>success</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <script type="text/javascript" src="js/jQuery.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <link rel="stylesheet" type="text/css" href="ncss.css">
</head>
<body>
	<div class="sbg">
		<?php require "header.php"?>
        <br/><br/><br/><br/><br/>
        <div class="col-xs-offset-4 col-xs-5 sty">
        	<center><h2>!!!Your order is confirmed !!!</h2>
        	<h2>Thank you for shopping with us.</h2>
        	<h3><a class="link" href="products.php">Click here</a> to purchase any other item.</h3>
        	</center>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/>

    <?php require "footer.php"?>
	</div>

</body>
</html>