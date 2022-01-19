<?php require "common.php"?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <script type="text/javascript" src="js/jQuery.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="ncss.css">
    </head>
    <body >
       <?php require "header.php";?>
        <div class="content">
            <div id="banner-img">
                <div class="container">
                <div class="inner-banner-img">
                    <div class="inner-banner-img-content">
                        <center>
                        <h1><a>We sell lifestyle</a></h1>
                        <p><a>Flat 40% OFF on premium brands</a></p>
                        <form>
                            <button style="color: #ffffff; background-color: #c9302c; border-color: #ac2925;  box-shadow: inset 0 3px 5px rgba(255, 0, 0, .125);  padding: 10px 16px;font-size: 18px; border-radius: 6px; ">
                                <?php 
                                if(!isset($_SESSION['id'])){ 
                                    ?><a href="signin.php" ><?php
                                } else {
                                    ?><a href="products.php"><?php
                                } 
                                ?>
                            Shop Now</a></button>
                        </form>
                        </center>
                    </div>
                </div>
                    
                </div>
            </div>
           

        </div>
        <div class="container">
            <div class="items">
            
                <?php 
                                if(!isset($_SESSION['id'])){ 
                                    ?><a href="signin.php" ><?php
                                } else {
                                    ?><a href="products.php"><?php
                                } 
                                ?> 
                
                    <img src="img/camera.jpg" alt="" class="thumbnail">
                    <div class="caption">
                         <h2>Cameras</h2>    
                         <p>Choose among the best available in the world.</p> 
                        
                    </div>
                        

                </a>
            </div>
                        <div class="items">
                 <?php 
                                if(!isset($_SESSION['id'])){ 
                                    ?><a href="signin.php" ><?php
                                } else {
                                    ?><a href="products.php"><?php
                                } 
                                ?>
                    <img src="img/watch.jpg" alt="" class="thumbnail">
                    <div class="caption">
                         <h2>Watches</h2>    
                         <p>Original watches from the best brand.</p> 
                        
                    </div>
                        

                </a>
            </div>
                        <div class="items">
                 <?php 
                                if(!isset($_SESSION['id'])){ 
                                    ?><a href="signin.php" ><?php
                                } else {
                                    ?><a href="products.php"><?php
                                } 
                                ?>
                    <img src="img/shirt.jpg" alt="" class="thumbnail">
                    <div class="caption">
                         <h2>Shirts</h2>    
                         <p>Our exquisite collection of shirts.</p> 
                        
                    </div>
                        

                </a>
            </div>
        </div>
        <?php require "footer.php"?>
 
            
       
    </body>
</html>
