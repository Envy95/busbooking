<?php 
	session_start(); //starting the session, to use and store data in session variable

	//if the session variable is empty, this means the user is yet to login
	//user will be sent to 'login.php' page to allow the user to login
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You have to log in first";
		header('location: login.php');
	}

	// logout button will destroy the session, and will unset the session variables
	//user will be headed to 'login.php' after loggin out
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="content">

		<!-- creating notification when the user logs in -->
		<!-- accessible only to the users that have logged in already -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						//echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p><strong>Welcome <?php echo $_SESSION['username']; ?> you have successfully booked a reservation!</strong></p>
			
		<?php endif ?>
	</div>
		<h4>Reservation Details:</h4><br>
		 <form action="index.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Done">
            </form>  
</body>
</html>