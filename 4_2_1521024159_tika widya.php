<!DOCTYPE html>
<html>
<head>
<title>4_2_tika</title>
</head>
<body>
	<?php
	$kodeBarang = "MB25";
	switch ($kodeBarang){
		case "MB25":
			echo "Harga dari kode barang tersebut adalah : 250.000";
			break;
		case "PR80":
			echo "Harga dari kode barang tersebut adalah : 750.000";
			break;
		case "M717":
			echo "Harga dari kode barang tersebut adalah : 30.000";
			break;
		case "MM34":
			echo "Harga dari kode barang tersebut adalah : 150.000";
			break;
		case "K987":
			echo "Harga dari kode barang tersebut adalah : 35.000";
			break;
		default:
			echo " Inputan anda salah";
		
	}
	?>
</body>
</html>