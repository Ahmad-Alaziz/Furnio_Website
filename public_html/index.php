<?php  session_start();?>
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
    
    <video id="video1" autoplay muted loop poster="images/poster.PNG"> <source src="images/welcomeVideo.mp4" type="video/mp4">  </video>
    <div class="welcomeDiv">
        <h1 class="header1">FURNIO</h1>
        <img src="images/sofa.png" class="sofaFirst">
        <h3 class="header3">Welcome Home</h3>
    
    </div>
    <div class="introDiv">
        <img class="sofaSecond" src="images/chair3.png">
        
        <div class="rightTxt">
            <h1>What is our Added value?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et efficitur urna, quis viverra velit. Cras porttitor, lectus facilisis pulvinar posuere, nunc tellus viverra neque, id dignissim augue ipsum eu nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Pellentesque consectetur, magna vitae faucibus lacinia, dui felis molestie metus, ac luctus sem felis ac risus. Praesent nec lacus nec turpis molestie commodo id at elit. Suspendisse imperdiet pulvinar enim at venenatis. Sed malesuada est erat, id ultrices leo condimentum eu. Maecenas non aliquam tortor, sodales dapibus eros. Vivamus vel mauris et sem placerat faucibus. Aenean sem magna, tempus vel molestie in, convallis nec diam.</p>
          
        </div>            
        
    </div>
    <div class="introDiv">
        <img class="chair" src="images/chair2.jpg">
        
        <div class="leftTxt">
            <h1>What is our Added value?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et efficitur urna, quis viverra velit. Cras porttitor, lectus facilisis pulvinar posuere, nunc tellus viverra neque, id dignissim augue ipsum eu nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Pellentesque consectetur, magna vitae faucibus lacinia, dui felis molestie metus, ac luctus sem felis ac risus. Praesent nec lacus nec turpis molestie commodo id at elit. Suspendisse imperdiet pulvinar enim at venenatis. Sed malesuada est erat, id ultrices leo condimentum eu. Maecenas non aliquam tortor, sodales dapibus eros. Vivamus vel mauris et sem placerat faucibus. Aenean sem magna, tempus vel molestie in, convallis nec diam.</p>
          
        </div>            
        
    </div>
    
    
</body>
</html>
