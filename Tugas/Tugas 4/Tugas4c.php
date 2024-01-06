<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

	$negara = [
				"Indonesia" => "D.K.I. Jakarta",
				"Singapura" => "Singapura",
				"Malaysia" => "Kuala Lumpur",
				"Brunei" => "BandarSeriBegawan",
				"Thailand" => "Bangkok",
				"Laos" => "Vientiane",
				"Filipina" => "Manila",
				"Myanmar" => "Naypyidaw"
				];

	echo "<h3>Daftar Negara ASEAN dan Ibukota : </h3>";
	foreach ($negara as $asean => $ibukota) {
		echo "<li> $asean : $ibukota </li>";
	}

	 ?>

</body>
</html>