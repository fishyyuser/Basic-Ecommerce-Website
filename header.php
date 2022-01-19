<?php require "common.php";
if(isset($_SESSION['id'])){ ?>
    <nav class="navbar   navbar-inverse" style="margin: 0;">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>




                <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a class=""><?php echo "Hello, ".$_SESSION['firstname'];?></a>
                    </li>
                    <li><a href="products.php">
                    Back to shop!</a></li>

                    <li><a href="cart.php">
                    <span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                   

                     <li><a href="settings.php">
                    <span class="glyphicon glyphicon-cog"></span>

                    Settings</a></li>
    
                    <li><a href="signout.php">
                    <span class="glyphicon glyphicon-log-in"></span>

                    Sign Out</a></li>
                   
                    
                </ul>
            </div>
        </div>
        </nav>
<?php 
}
else{ ?>
    <nav class="navbar   navbar-inverse" style="margin: 0;">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>




                <a href="index.php" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a class="">Hello, Guest</a>
                    </li>
    
                    <li><a href="signin.php">
                    <span class="glyphicon glyphicon-log-in"></span>

                    Sign In</a></li>
                    <li><a href="signup.php">
                    <span class="glyphicon glyphicon-user"></span>

                    Sign Up</a></li>
                    
                </ul>
            </div>
        </div>
        </nav>    
<?php
}

?>
