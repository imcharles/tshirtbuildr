<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Shirt Buildr, built by screenprinters for screenprinters" content="">
    <meta name="Coding Dojo Bootcamp June 24th 2013" content="Screenprinting layout and design web app">
	<title>Shirt Buildr - The Design Tool for Screenprinters, by Screenprinters</title>
	<link href="/shirtbuilder_mvc/application/views/assets/css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="js/jquery.productColorizer.css" />
	<script src="http://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.productColorizer.js"></script>
	<script type="text/javascript" src="js/prettify.js"></script>
	<script>$(document).ready(function() {	
		$('.product-preview').productColorizer({'secondaryTransparency':1});
		prettyPrint();
	});
	</script>

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top plaid">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">shirt buildr</a>
        <div class="nav-collapse collapse">
          <form class="navbar-form form-inline pull-right">
            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
            <button type="submit" class="btn btn-primary btn-large">Sign in</button>
          </form>
        </div>
      </div>
    </div>