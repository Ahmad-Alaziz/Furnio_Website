<?php
session_start();
include '../config/db_connection.php';
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

			
           <?php
				if(isset($_SESSION['admin'])){
					echo'<li><a href="adminPanel.php">AdminPanel</a> </li>';
					}
			?>
			
            <?php
				if(isset($_SESSION['userId'])||isset($_SESSION['admin'])){
					echo'<li><a href="db_handling/logout.php">LogOut</a> </li>'; 
				}
			?>
		</ul>
    </nav>
       
   <?php
	if( !(isset($_SESSION['userId'])||isset($_SESSION['admin'])) ){
		 echo'<a href="loginPage.php" class="float">
			<i class="fa fa-user my-float" style="font-size:25px;"></i>
		 </a>';
		}
	 ?>
    
    <div class="introDiv">   
        <img class="galleryMain" src="images/galleryHeader.jpg" >
        <h1 class="galTitle"><b class="bold">Furnio</b><br/>Gallery</h1>
    </div>
    <?php
	if(isset($_SESSION['userId'])){
		echo'<h3 class="galleryTitle"> Hey there '.$_SESSION['userName'].
			', click on the furniture that you would like to save to your favourites!</h3>';
		}
	?>
    <div class="gallery" id="gallery">
		<!-- display furniture records-->
        <?php include("db_handling/db_displayRecords.php"); ?>
    </div>
    
    
    </body>
</html>