<?php
	
	// Perform the SQL query
	$sql="SELECT * FROM furniture";
	$result=$conn->query($sql);
	
	if ($result->num_rows> 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//if user or admin is logged in show favourite heart option 
			
			if(isset($_SESSION['userId'])){
				
				echo'<div class=" itemDiv">';
				echo'<div class="favContainer">';
				
				//if the user has an already favourited furniture , display red heart ,else black
				$sql2='SELECT favouriteId FROM favourites Where userId ='.$_SESSION['userId'].' and furnitureId = '.$row['furnitureId'];
				$result2=$conn->query($sql2);
				if ($result2->num_rows> 0) {
					echo'<a href="../db_handling/addFavourite.php?furniture='.$row['furnitureId'].'" class="fa fa-heart" style="font-size:50px; color:red"></a>'; 
				}else{
					echo'<a href="../db_handling/addFavourite.php?furniture='.$row['furnitureId'].'" class="fa fa-heart" style="font-size:50px; color:#b9b9b9"></a>'; 
				}
				echo'<img src="images/'.$row['furnitureImg'].'" class="left1img" ></div>';
				echo'<h3>'.$row['furnitureTitle'].'</h3>';
				echo'<p>'.$row['furnitureDesc'].'</p></div>';
				
			}else{
				
				echo'<div class=" itemDiv">';
				echo'<img src="images/'.$row['furnitureImg'].'" class="left1img" >';
				echo'<h3>'.$row['furnitureTitle'].'</h3>';
				echo'<p>'.$row['furnitureDesc'].'</p></div>';
				
			}
		}
	} else { 
		echo "No data found.";
	}
	
	$conn->close();

?>