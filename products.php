<?php require "common.php";
if(!isset($_SESSION['id'])){
    header("Location:signin.php");
}
require "check_if_added.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>products</title>
        <link rel="stylesheet" type="text/css" href="ncss.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <script type="text/javascript" src="js/jQuery.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
                
</head>
<body>
		<?php require "header.php"?>
        <br><br>
        <div class="container col-xs-offset-1 col-xs-10">
        	<div style="  background-color: #808080; padding: 20px; color: #000"><center style="margin: 15px;">
        		<h1><strong>Welcome to our Lifestyle Store!</strong></h1>
        		We have the best cameras,watches and shirts for you. No need to hunt around, we have all in one place.
        	</center>

        		
        	</div>
        </div>
        	<div class=" row col-xs-offset-1 col-xs-10" style="margin-top: 40px;">
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				<img src="img/5.jpg">
        				<div class="caption">
        					<h4>Cannon EOS</h4>
        					Price Rs.36000.00
        				<?php if(checkifadded(12)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=12" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>


        					
        				</div>
        			</a>
        		</div>
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				<img src="img/2.jpg">
        				<div class="caption">
        					<h4>Sony DSLR</h4>
        					Price Rs.40000.00
        					<?php if(checkifadded(13)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=13" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>



        					
        				</div>
        			</a>
        		</div>
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				<img src="img/3.jpg">
        				<div class="caption">
        					<h4>Sony DSLR</h4>
        					Price Rs.50000.00
        					<?php if(checkifadded(14)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=14" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>



        					
        				</div>
        			</a>
        		</div>
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				
        				<img src="img/4.jpg">
        				<div class="caption">
        					<h4>Olyumpus DSLR</h4>
        					Price Rs.80000.00
        					<?php if(checkifadded(15)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=15" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>



        					
        				</div>
        			</a>
        		</div>

        		
        	</div>

        	
        <div class=" row col-xs-offset-1 col-xs-10">
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				<img src="img/9.jpg">
        				<div class="caption">
        					<h4>Titan Model #301</h4>
        					Price Rs.13000.00
        					<?php if(checkifadded(16)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=16" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>



        					
        				</div>
        			</a>
        		</div>
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				<img src="img/10.jpg">
        				<div class="caption">
        					<h4>Titan Model #201</h4>
        					Price Rs.3000.00
        					<?php if(checkifadded(17)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=17" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>



        					
        				</div>
        			</a>
        		</div>
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				<img src="img/11.jpg">
        				<div class="caption">
        					<h4>HMT Milan</h4>
        					Price Rs.8000.00
        					<?php if(checkifadded(18)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=18" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>


        					
        				</div>
        			</a>
        		</div>
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				
        				<img src="img/12.jpg">
        				<div class="caption">
        					<h4>Faber Luba #111</h4>
        					Price Rs.18000.00
        					<?php if(checkifadded(19)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=19" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>



        					
        				</div>
        			</a>
        		</div>

        		
        	</div>
        	        <div class=" row col-xs-offset-1 col-xs-10" style="margin-bottom: 100px">
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				<img src="img/8.jpg">
        				<div class="caption">
        					<h4>H&W</h4>
        					Price Rs.800.00
        					<?php if(checkifadded(20)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=20" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>



        					
        				</div>
        			</a>
        		</div>
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				<img src="img/6.jpg">
        				<div class="caption">
        					<h4>Louis Phil</h4>
        					Price Rs.1000.00
        					<?php if(checkifadded(21)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=21" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>



        					
        				</div>
        			</a>
        		</div>
        		<div class="col-xs-3">
        			<a class="thumbnail" >
        				<img src="img/13.jpg">
        				<div class="caption">
        					<h4>Jhon Zok</h4>
        					Price Rs.1500.00
        					<?php if(checkifadded(22)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=22" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>



        					
        				</div>
        			</a>
        		</div>
        		<div class="col-xs-3">
        			<a class="thumbnail">
        				
        				<img src="img/14.jpg">
        				<div class="caption">
        					<h4>Jhalsani</h4>
        					Price Rs.1300.00
        					<?php if(checkifadded(23)){?>
                                                <a onclick="alertmsg()" role="button" class="btn btn-primary btn-block">Add to Cart</a><?php } else {?>
                                                <a href="cart_add.php?pid=23" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                                        <?php }?>
        					
        				</div>
        			</a>
        		</div>
        
        </div>
        <?php require "footer.php"?>
        <script type="text/javascript">
                function alertmsg(){
                        alert("Item already added to the cart ");
                }
        </script>
</body>
</html>