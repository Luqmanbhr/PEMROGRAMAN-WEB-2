<?php 

function faktorial($a){
	$angka = 1;
	$faktorial = 1;
	while ($angka <= $a) {
		// code...
		$faktorial= $faktorial * $angka ;
		$angka = $angka + 1;

	}
	return $faktorial;
	}

	$faktorial = faktorial (5);
	echo "Faktorial dari 5 = $faktorial";

 ?>

