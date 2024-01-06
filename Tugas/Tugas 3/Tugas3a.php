<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<style type="text/css">
	.style {
		font-size: 28px;
		font-family: Arial;
		color: #1A0547;
		font-style: italic;
		font-weight: bolder;
	}
</style>

	<?php 

	function style($tulisan, $kelas){
		return "<spann class = '$kelas'>$tulisan</span>";
	}
	$tulisan = "Hello word! Here I Come";
	$kelas = "style";
	echo style($tulisan, $kelas);




 ?>

</body>
</html>

