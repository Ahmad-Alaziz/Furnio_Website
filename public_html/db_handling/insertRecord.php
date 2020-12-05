<?php 
	
	include '../../config/db_connection.php';
	
	if(isset($_POST['submitInsert'])){
		$title = $_POST['Title'];
		$desc = $_POST['Desc'];
		$img = $_POST['Img'];
		$sql="INSERT INTO furniture(furnitureTitle, furnitureDesc, furnitureImg) VALUES ('$title','$desc','$img');";
		mysqli_query($conn,$sql);
		
		header("Location:../adminPanel.php?insertRecord=success");
		
		}else{
			
			header('Location: ' . $_SERVER['HTTP_REFERER']);
				
		}



?>