<?php   
include "code.php";

?>

<!DOCTYPE html>
<html>
<head>

	<title>Landing Page</title>
    
   </head>
<body>
	
	<hr>
	<?php
    error_reporting(0);
        $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db,"busreservation") or die(mysqli_error($db));
        ?>  
    </body>
<body>

                <form action="code.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input size="20" type="text" name="username" class="form-control" placeholder="Enter Username">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="Password" class="form-control" placeholder="Enter Password">
                        
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" name="btnLogin" class="btn btn-primary" value="Log in">
                    </div>
                </form>
                
                
                <hr>
                <form action="index.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="BACK">
            </form>
    </div>
</body>
</html>