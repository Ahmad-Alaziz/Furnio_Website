<?php 
	
	include '../../config/db_connection.php';
	
	if(isset($_POST['submitDelete'])){
		$id = $_POST['furnitureSelect'];
		$sql="DELETE FROM `furniture` WHERE furnitureId = '$id'";
		mysqli_query($conn,$sql);
		
		header("Location:../adminPanel.php?deleteRecord=success");
		
		}else{
			
			header('Location: ' . $_SERVER['HTTP_REFERER']);
				
		}



?>