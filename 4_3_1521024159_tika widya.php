<!DOCTYPE html>
<html>
<head>
<title>tugas 4_3_tika widya</title>
</head>
<body>
	<?php
	echo "segitika setengah kiri<br>";
	for ($x = 5; $x > 0; $x--){
		echo '';
		for($y = $x; $y < 6; $y++){
			echo '*';
		}
		echo '<br/>';
	}
	echo '<br/>';
	echo "segitiga setengah kanan<br>";
	for ($i=1; $i <=5 ; $i++) {
 		for ($j=4; $j>=$i ; $j--) {
 			echo "&nbsp;&nbsp;";
 		}
		for ($k=1; $k <=$i ; $k++) {
 			echo "*";
 		}
 	echo "<br>";
	}
	echo '<br/>';
	echo "segitiga full<br>";
	for ($i = 0; $i < 5; $i++) {
 		for ($j = 5; $j > $i; $j--) {
 			echo '&nbsp;';
 		}
 		for ($k = 0; $k <= $i; $k++) {
 			echo '*';
 		}
 		echo '<br/>';
 	}
	?>
</body>
</html>