<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Mahasiswa</title>
</head>
<body>
<h1>Profil Mahasiswa</h1>
<ul>
	<br><img src="img/<?= $_GET["gambar"]; ?>"></br>
	<br><?= $_GET["nama"]; ?></br>
	<br><?= $_GET["nim"]; ?></br>
	<br><?= $_GET["email"]; ?></br>
	<br><?= $_GET["jurusan"]; ?></br>
</ul>	

<a href="latihan5b.php">Kembali</a>
</body>
</html>