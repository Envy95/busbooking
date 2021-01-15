<!DOCTYPE html>
<html>
<head>
	<title>Delete Bus</title>
</head>
<body>
<?php

		$db = mysqli_connect('localhost', 'root', '') or
		die ('Unable to connect. Check your connection parameters.');
		mysqli_select_db($db,"busreservation") or die(mysqli_error($db));

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'bus':
					$query = 'DELETE FROM buses
							WHERE
							bus_id = ' . $_GET['id'];
						$result = mysqli_query( $db,$query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				
				window.location = "landing-page.php";
			</script>				
				
			<?php
			break;
				}
			}
			?>


</body>
</html>