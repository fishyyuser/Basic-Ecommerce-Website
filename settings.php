<?php require "common.php";
if(!isset($_SESSION['id'])){
    header("Location:signin.php");
}?>
<!DOCTYPE html>
<html>
<head>
	<title>settings</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <script type="text/javascript" src="js/jQuery.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <link rel="stylesheet" type="text/css" href="ncss.css">
</head>
<body>
		<?php require "header.php"?>
        <br><br>
        <div class="col-xs-offset-4 col-xs-4">
        	<h1>Change Password</h1>
        	<br>
        	<form action="settings_change.php" method="POST">
        		<input type="password" name="old" placeholder="Old Password" class="form-control"><br>

        		<input type="password" id ="new" name="new" placeholder="New Password" class="form-control"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>

        		<input type="password" id="rety" name="rety" placeholder="Re-type New Password" class="form-control"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
              
        		<input type="submit" value="Change" class="btn btn-primary"><br>

        	</form>
        	
        </div>


    <div class=" row col-xs-offset-1 "></div>
    <?php require "footer.php"?>
</body>
</html>