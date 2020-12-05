<?php 

session_start(); 
include '../config/db_connection.php';
if(!isset($_SESSION['admin'])){ 
	header('Location: '.$_SERVER['HTTP_REFERER']);
}

?>
<html>
    <head>
        <title>FURNIO</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,600&display=swap" rel="stylesheet">
        <link href="css/adminPanel.css" type="text/css" rel="stylesheet">
        <link href="images/icon.png" rel="icon" >
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

           <li>
               <a href="db_handling/logout.php">LogOut</a>
            </li>
			
           
        </ul>
    </nav>
    
    
    
        <div class="container">  
              <form id="contact" action="db_handling/insertRecord.php" method="post">
                    <h3>Insert Furniture Record</h3>
                    <fieldset>
                      <input placeholder="Furniture Title" type="text" name="Title" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                      <input placeholder="Furnitiure Image Name stored in /images folder" type="text" name="Img" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                      <textarea placeholder="Type the furniture description here...."  name="Desc" tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                      <button name="submitInsert" type="submit" id="contact-submit" data-submit="...Sending">Insert</button>
                    </fieldset>

              </form>
    </div>
     <div class="container2">  
              <form id="contact" action="db_handling/deleteRecord.php" method="post">
                    <h3>Delete Furniture Record</h3>
                    <fieldset>
                     <select name="furnitureSelect" >
					<?php
						$sql="Select * from `furniture` ";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)) {
							$title = $row['furnitureTitle'];
							$id = $row['furnitureId'];
							echo '<option value="'.$id.'">'.$title.'</option>';
							 }
						 ?>
						</select>
                    </fieldset>
                    
                    <fieldset>
                      <button name="submitDelete" type="submit" id="contact-submit" data-submit="...Sending">Delete</button>
                    </fieldset>

              </form>
    </div>
    
    
</body>

</html>