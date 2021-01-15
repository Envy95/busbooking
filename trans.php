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
						
                        $seat_avail = $_POST['seat-avail'];
                      
				
					switch($_GET['action']){
						case 'done':			
								$seat_avail - 1;
						break;
									   
						}

				?>
</body>
</html>