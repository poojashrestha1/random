<!DOCTYPE html>
<html>
<head>
	<title>Starting php by different ways</title>
</head>
<body>

	<h1>The Date and Time of Nepal is:
	</h1>
	<?php
	date_default_timezone_set('Asia/Kathmandu');
	echo date('Y/m/d h:i:s');
	echo "<br/>";
	echo date("l,jS F Y");

	echo "<br/>";

	date_default_timezone_set('Australia/Sydney');
	echo date('Y/F/dS h:i:sA');

	echo "<br/>";

	//difference between " and '
	$name="Shyam";
	echo "\"$name\" goes to School";
	echo "<br/>";
	echo '$name goes to School';
	?>

	<?php
	$today="Friday";
	print_r($today);
	?>


</body>
</html>