<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
require_once "connect.php";

if (isset($_POST['btnLogin'])) {
	$username = $_POST['username'];
	$password = $_POST['Password'];

	$query = "SELECT * FROM user where username='$username' AND password='$password' ";
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			if($row["role"]=="cashier"){
				$_SESSION['User'] = $row["Username"];
				$_SESSION['role'] = $row['role'];
				header('Location: bookings.php');
			}
			else{
				$_SESSION['User'] = $row["Username"];
				$_SESSION['role'] = $row['role'];
				header('Location: cashier.php');
			}
			
		}
	}
	else{
			
			header("Location: cashier.php");
	}

}

?>
</body>
</html>