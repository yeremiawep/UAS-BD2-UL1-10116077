<?php
	session_start();

	include 'koneksi.php'; 
	
	$user	= $_POST['username']; 
	$pass	= $_POST['password']; 
	
	
	$result = $mysqli->query("SELECT * FROM user where user = '".$user."' and pass = '".$pass."'");
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$_SESSION['user'] = $row['user']; 
			$_SESSION['pass'] = $row['pass'];
			$_SESSION['level'] = $row['level'];
			$_SESSION['login'] = 'login';
		}
		if($_SESSION['level']=='admin'){
			header('Location: dashboard.php');
		}
		else{
			header('Location: dashboard.php');
		}
	}
	else{
		// echo "User tidak ada";
		$_SESSION['msg'] = 1;
		header('Location: login.php');
	}
?>