<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	error_reporting(0);
        $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
         mysqli_select_db($db,"busreservation") or die(mysqli_error($db));
        ?>  
	<?php 
//	$id = (isset($_GET['id']) ? $_GET['id'] : '');
$query = 'SELECT * FROM booking
              WHERE
              book_id ='.$_GET['id'];	

            $result = mysqli_query( $db,$query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['book_id'];
                $n=$row['cus_username'];
                $i= $row['cus_contactno'];
                $a=$row['cus_email'];
                
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Customer Records</h2>
                        <form role="form" method="post" action="bookings.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <label>Username: </label><?php echo $n; ?>
                            </div><br>
                            <div class="form-group">
                              <label>Contact Number: </label><?php echo $i; ?>
                            </div><br>
                            <div class="form-group">
                              <label>E-mail: </label><?php echo $a; ?>
                            </div><br>
                            
                            <button type="submit" class="btn btn-default">Confirm</button>
                      </form>  
                    </div>
                </div><hr>
                <form action="bookings.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Cancel">
            </form>

</body>
</html>