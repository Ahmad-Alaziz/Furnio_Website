<?php 
	session_start();
	require_once("../../config/db_connection.php"); 
	$furnitureId = $_GET["furniture"];
	
	//if favourite already exists , remove it , else add it
	$sql='SELECT favouriteId FROM favourites Where userId ='.$_SESSION['userId'].' and furnitureId = '.$furnitureId;
	$result=$conn->query($sql);
	
	if ($result->num_rows> 0) {
		$row = $result->fetch_assoc();
		$sqlDelete = 'DELETE FROM favourites WHERE favouriteId = '.$row['favouriteId'];
		$conn->query($sqlDelete);
	}else{
		//I alter table because phpmyadmin has a tendancy to continue incrementing id's even from values that have been deleted
		// this will cause my favourite table to have infinitely increaing favourite id value which can be a problem
		// so to fix it , i reset it to 1 before i insert
		$sqlAlter = 'ALTER TABLE favourites AUTO_INCREMENT = 1';
		$conn->query($sqlAlter);
		$sqlInsert = 'INSERT INTO favourites(userId, furnitureId) VALUES ('.$_SESSION['userId'].', '.$furnitureId.')';
		$conn->query($sqlInsert);
	}
	
	header('location:../gallery.php#gallery');
?>
