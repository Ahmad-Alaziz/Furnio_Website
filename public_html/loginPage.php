<?php 

session_start(); 

if(isset($_SESSION['userId'])||isset($_SESSION['admin'])){ 
	header('Location: '.$_SERVER['HTTP_REFERER']);
}

?>
<html>
 <head>
        <title>FURNIO</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,600&display=swap" rel="stylesheet">
        <link href="css/styles.css" type="text/css" rel="stylesheet">
        <link href="images/icon.png" rel="icon" >
		<!--for icons-->
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<nav class="menu">
        <ul class="nav">
            <li>
				<a href="index.php">Home</a>
            </li>
            <li>
				<a href="gallery.php">Gallery</a>
            </li>
		</ul>
    </nav>
	<form class="login-form" method="POST" action="db_handling/login.php">
	  <p class="login-text">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-lock fa-stack-1x"></i>
		</span>
	  </p>
	  <input type="text" name="username" class="login-username" autofocus="true" required="true" placeholder="Username" />
	  <input type="password" name ="password" class="login-password" required="true" placeholder="Password" />
	  <input type="submit" name="submit" value="Login" class="login-submit" />
	</form>
	<div class="underlay-photo"></div>
	<div class="underlay-black"></div> 
</body>
</html>