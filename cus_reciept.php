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
                
<?php 

$query = 'SELECT * FROM booking
             WHERE book_id ='.$_GET['id'];
            $result = mysqli_query( $db,$query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['book_id'];
                $n=$row['cus_firstname'];
                $i= $row['cus_lastname'];
                $a=$row['cus_contactno'];
                
              }
              
             $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                        <form role="form" method="post" action="">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" >
                            </div>
                            <div class="form-group">
                            <input class="form-control" name="busnumber" value="<?php echo $n; ?>">
                            </div><br>
                            <div class="form-group">
                            <input class="form-control" name="Route" value="<?php echo $i; ?>">
                            </div><br>
                            <div class="form-group">
                            <input class="form-control" name="Price" value="<?php echo $a; ?>">
                            </div><br>
                   
                            </div> <br>
                          
                         <button type="reset" class="btn btn-default">Clear Entry</button>
                      </form>  
                    </div>
                </div><hr>
                <form action="landing-page.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Cancel">
            </form>
</body>
</html>