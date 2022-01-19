<?php require "common.php"?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <script type="text/javascript" src="js/jQuery.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <link rel="stylesheet" type="text/css" href="ncss.css">
</head>
<body>
    <?php require "header.php"?>
        <div class="container">
        	
        	<div class="panel col-xs-offset-4 col-xs-4">
        		<h1><strong>SIGN UP</strong></h1>
        	<br>
        	<form method="post" action="signup_script.php">
        		<input type="text" name="firstname" placeholder="First Name" class="form-control" required="true" 
                ><br>
                <input type="text" name="lastname" placeholder="Last Name" class="form-control"
                ><br>
        		<input type="email" name="email" placeholder="Email" class="form-control"required="true" pattern="[a-z0-9.%-_+]+@[a-z0-9.-_]+\.[a-z]{2,3}$" title="Please enter the correct email address eg- john@email.com"><br>
        		<input required="true" type="password" name="password" placeholder="Password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
        		<input type="text" name="contact" placeholder="Contact" class="form-control"><br>
        		<input type="submit" class="btn btn-primary" class="form-control"><br>
        	</form>
        </div>
        </div>
        <?php require "footer.php"?>
       
</body>
</html>