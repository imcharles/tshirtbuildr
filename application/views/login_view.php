<html>
<head>
	  <?php include("application/templates/header.php"); 
  include("assets/js/JS.js");
    // include("applications/templates/footer.php");?>
	<title>login</title>
</head>
<body>
	<div id="wrapper">
	<h1>Login</h1>
<?php
	// check if there are errors for login
	if(isset($login_errors))
	{
		// display login errors
		echo $login_errors;
	}
	
?>	<form action="/user/process_login" method="post">
		<input type="hidden" name="action" value="login" />
		<input type="text" name="email" placeholder="Email address" />
		<input type="password" name="password" placeholder="Password" />
		<input type="submit" value="Login" />
	</form>

	
	</div>

</body>
</html>