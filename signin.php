<?php require "common.php"?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <script type="text/javascript" src="js/jQuery.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <link rel="stylesheet" type="text/css" href="ncss.css">
        <style>
        	{
        		.row-style{
        			margin-top:10px;
        		}
        	}
        </style>
</head>
<body >
	<?php require "header.php"?>
	<div style="padding: 20px 0px 0px 0px">
	<div  class="container">
		<div class="row row-style">
			<div class="col-xs-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2>Sign In</h2>			
		</div>
		<div class="panel-body">
			       <div class="text-warning">Sign In to make Purchase<br><br>
			       </div>
					<div class="col-xs-6">
						<form method="post" action="signin_script.php">
							<input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9.%-_+]+@[a-z0-9.-_]+\.[a-z]{2,3}$" title="Please enter the correct email address eg- john@email.com"><br>

							<input type="password" class="form-control" name="password" placeholder="Password"><br>

							<input type="submit" value="Sign In" class="form-control btn btn-primary">
						</form>
					</div>
		</div>
		<div class="panel-footer">
			<strong>Don't have an account? <a class="link" href="signup.php">Register</a></strong>
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php require "footer.php"?>

</body>
</html>