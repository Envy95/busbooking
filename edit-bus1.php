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
			$zz = $_POST['id'];
			$bn = $_POST['busnumber'];
		    $rr = $_POST['Route'];
			$pr = $_POST['Price'];
			$sa = $_POST['SeatAvail'];
			$sc = $_POST['SeatCap'];
			$dt = $_POST['DeptTime'];
		
	 			$query = 'UPDATE buses set bus_number ="'.$bn.'",
					route ="'.$rr.'", price="'.$pr.'",
					seat_availability="'.$sa.'",seat_capacity='.$sc.', 
					departure_time="'.$dt.'" WHERE
					bus_id ="'.$zz.'"';
					$result = mysqli_query($db,$query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			window.location = "landing-page.php";
		</script>
</body>
</html>