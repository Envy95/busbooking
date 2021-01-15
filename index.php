<?php 
/*	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
        <style>

        h1{text-align: center;}
        h2{text-align: center;}

    </style>
    <h1>Welcome!<h1>
    <h2>Online Bus Reservation System<h2>
	</div>
	<div class="content">

<?php

/*session_start();
if(isset($_SESSION['role'])){

if($_SESSION['role']!='user'){
    header('Location: user-page.php');

}
}   
else{
    header('Location: log-in.php');
}*/
?>
<!DOCTYPE html>
<html>
<head>
   
	<title>Landing Page</title>
   </head>
<body>
	
	<hr>
    <br>
	<?php
    error_reporting(0);
        $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db,"busreservation") or die(mysqli_error($db));
        ?>  
<body>
           
            
        </nav>

                
             <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" border="1">
                                <thead>
                                    <tr>
                                        <td bgcolor="#66ff99">Bus Number</td>
                                        <th bgcolor="#66ff99">Route</th>
                                        <th bgcolor="#66ff99">Price</th>
                                        <th bgcolor="#66ff99">Seat Available</th>
                                        <th bgcolor="#66ff99">Seat Capacity</th>
                                        <th bgcolor="#66ff99">Departure Time</th>
                                        <th bgcolor="#66ff99">Option</th>
                                     </tr>
                                </thead>
                                <tbody>
                <?php                  

                $query = 'SELECT * FROM buses';
                    $result = mysqli_query( $db,$query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_array($result)) {
                                             
                            echo '<tr bgcolor="#c0c0c0">';
                            echo '<td align="center">'. $row['bus_number'].'</td>';
                            echo '<td align="center">'. $row['route'].'</td>';
                            echo '<td align="center">'. $row['price'].'</td>';
                            echo '<td align="center">'. $row['seat_availability'].'</td>';
                            echo '<td align="center">'. $row['seat_capacity'].'</td>';
                            echo '<td align="center">'. $row['departure_time'].'</td>';
                            echo '<td align="center" bgcolor="#ff6600"> <a  type="button" class="btn btn-xs btn-warning" href="book.php">  <input align="right" type="submit" class="btn btn-primary" value="Book"> </a> 
                            </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                
            </div>
           
        </div>
        
    </div>

</body>
</html>
	</div>
    <br>
    <hr>
		 <form action="log-in.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Log in">
            </form>
</body>
</html>