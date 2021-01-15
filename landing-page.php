<?php

session_start();
if(isset($_SESSION['role'])){

if($_SESSION['role']!='admin'){
    header('Location: user-page.php');

}
}
else{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    
	<title>Landing Page</title>
<body>
	
	<hr>
	<?php
    error_reporting(0);
        $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db,"busreservation") or die(mysqli_error($db));
        ?>  
<body>
                
               <h1>Bus Information</h1>
                <hr>
                <br>
          <form action="add-bus.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Add Bus Info">
            </form><br>
                            <table border="1" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th bgcolor="#00ffff">Bus Number</th>
                                        <th bgcolor="#00ffff">Route</th>
                                        <th bgcolor="#00ffff">Price</th>
                                        <th bgcolor="#00ffff">Seat Availability</th>
                                        <th bgcolor="#00ffff">Seat Capacity</th>
                                        <th bgcolor="#00ffff">Departure Time</th>
                                        <th bgcolor="#00ffff">Option 1</th>
                                        <th align="center" bgcolor="#00ffff">Option 2</th>
                                        <th align="center" bgcolor="#00ffff">Option 3</th>
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
                            echo '<td align="center" bgcolor="red"> <a  type="button" class="btn btn-xs btn-danger" href="delete-bus.php?type=bus&delete & id=' . $row['bus_id'] . '"><input align="right" type="submit" class="btn btn-primary" value="Delete"></a>
                            </td>';
                            echo '<td align="center" bgcolor="green"> <a  type="button" class="btn btn-xs btn-danger" href="add-bus.php?type=bus&add & id=' . $row['bus_id'] . '"><input align="right" type="submit" class="btn btn-primary" value="Add"></a>
                            </td>';
                            echo '<td align="center" bgcolor="blue"> <a  type="button" class="btn btn-xs btn-danger" href="edit-bus.php?type=bus&edit & id=' . $row['bus_id'] . '"><input align="right" type="submit" class="btn btn-primary" value="Edit"></a>
                            </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table><br>
                            <hr>
            <br>
           
            <form action="index.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Log out">
            </form>
</body>
</html>