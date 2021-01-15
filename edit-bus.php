<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
error_reporting(0);
        $db = mysqli_connect('localhost', 'root', '') or
            die ('Unable to connect. Check your connection parameters.');
             mysqli_select_db($db,"busreservation") or die(mysqli_error($db));
            ?> 
<body>
                
<?php 
$query = 'SELECT * FROM buses
              WHERE
              bus_id ='.$_GET['id'];
            $result = mysqli_query( $db,$query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['bus_id'];
                $n=$row['bus_number'];
                $i= $row['route'];
                $a=$row['price'];
                $b=$row['seat_availability'];
                $c=$row['seat_capacity'];
                $d=$row['departure_time'];
                
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                        <form role="form" method="post" action="edit-bus1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <label>New Bus Number: </label><input class="form-control" name="busnumber" value="<?php echo $n; ?>">
                            </div><br>
                            <div class="form-group">
                              <label>New Route: </label><input class="form-control" name="Route" value="<?php echo $i; ?>">
                            </div><br>
                            <div class="form-group">
                              <label>New Price: </label><input class="form-control" name="Price" value="<?php echo $a; ?>">
                            </div><br>
                            <div class="form-group">
                              <label>New Seat Availability: </label><input class="form-control" name="SeatAvail" value="<?php echo $b; ?>">
                            </div><br>
                            <div class="form-group">
                              <label>New Seat Capacity: </label><input class="form-control" name="SeatCap" value="<?php echo $c; ?>">
                            </div><br>
                            <div class="form-group">
                              <label>New Departure Time: </label><input class="form-control" type="time" placeholder="DeptTime" name="DeptTime" value="<?php echo $d; ?>">
                            </div> <br>
                            <button type="submit" class="btn btn-default">Update Record</button>
                      </form>  
                    </div>
                </div><hr>
                <form action="landing-page.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Cancel">
            </form>
</body>
</html>