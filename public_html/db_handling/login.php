
<?php
	session_start();
	require_once("../../config/db_connection.php"); 
	
	function sanitize($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	if(isset($_POST['submit'])){
	
		$username = sanitize($_POST['username']);
		$password = sanitize($_POST['password']);

		$sql="SELECT * FROM users WHERE userName='$username' AND userPass='$password'";
		$result=$conn->query($sql);
	
		if ($result->num_rows> 0) {
			$row = $result->fetch_assoc();
			if($row['admin'] == Y){
				$_SESSION['admin']=$row['userName'];
			}
			$_SESSION['userId']=$row['userId'];
			$_SESSION['userName']=$username;
			header('location:../index.php');
		}else{
			$_SESSION['message']='User was not found';
			header('Location: '.$_SERVER['HTTP_REFERER']);
		}
	}
?>
