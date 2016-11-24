<!DOCTYPE html>
<html>
<head>
<title>4_1_tika</title>
</head>
<body>
	<?php
	$n = 60;
	if (($n >=0) && ($n <= 59)) {
	echo "Cukup";
	}elseif (($n >= 59) && ($n <= 85)){
	echo "Baik";
	}elseif (($n >= 85)&&($n <= 100)){
	echo "Baik Sekali";
	} else {
	echo "Input Salah";
	}
	?>
</body>
</html>