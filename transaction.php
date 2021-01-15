<!DOCTYPE html>
<html lang="en">

<head>
</head>

<?php
        $db = mysqli_connect('localhost', 'root', '') or
            die ('Unable to connect. Check your connection parameters.');
             mysqli_select_db($db,"busreservation") or die(mysqli_error($db));
            ?>  
    <body>
                <?php
						$busno = $_POST['bus_number'];
					    $routes = $_POST['route'];
						$prices = $_POST['price'];
                        $seat_avail = $_POST['seat-avail'];
                        $seat_cap = $_POST['seat-cap'];
						$depttime = $_POST['departure_time'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO buses
								VALUES ('Null','".$busno."','".$routes."','".$prices."','".$seat_avail."','".$seat_cap."','".$depttime."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									   
						}

				?>
    	<script type="text/javascript">
			
			window.location = "landing-page.php";
		</script>
                   
</body>

</html>

