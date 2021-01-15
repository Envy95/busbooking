<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
        $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
         mysqli_select_db($db,"busreservation") or die(mysqli_error($db));
        ?>  
<body>
                  <h2>Add new Bus Records</h2>
                        <form role="form" method="post" action="transaction.php?action=add">
                              <label>Bus Number: </label><input class="form-control" name="bus_number"><br><br>
                              <label>Route: </label><input class="form-control" name="route"><br><br>
                              <label>Price: (Php) </label><input class="form-control" name="price"><br><br>
                              <label>Seat Availability: </label><input class="form-control" name="seat-avail"><br><br>
                              <label>Seat capacity: </label><input class="form-control" name="seat-cap"><br><br>
                              <label>Dearture Time: </label><input type="time" class="form-control" name="departure_time"><br><br> 
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>
                      </form>
                      <hr>
                      <p>
           <form action="landing-page.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Back">
            </form>
        </p>
</body>
</html>