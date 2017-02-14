	<?php
	date_default_timezone_set("Europe/Amsterdam");
	
	$tijd = date("H:i:s");
	
	if ($tijd < "18.00" ) {
		$message = "Goede Middag";
		$image = "afternoon.png";
		}
		elseif ($tijd < "24.00" ) {
			$message = "Goede Avond";
			$image = "evening.png";
		}
		elseif ($tijd < "6.00" ) {
			$message = "Goede Nacht";
			$image = "night.png";
		}
		else {
			$message = "Goede Ochtend";
			$image = "morning.png";
		}
	
	

		$message .= "<br><br>" . $tijd;
	 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<meta http-equiv="refresh" content ="0.5">
	<title>Goede Morge</title>
	<link rel="stylesheet" type="text/css" href="Morge.css" />
</head>
<body style="background-image: url(<?php echo $image; ?>);background-size: cover;">
<?php echo "<p>" . $message . "</p>"; ?>
</body>
</html>