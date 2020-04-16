<?php 
//array multidimensi/array didalam array bersarang
$mahasiswa = [
	["Andi Surya","19510014","Sistem Informasi","putrasumawe56@gmail.com"],
	["Andi","19510014","Sistem Informasi","sumawe56@gmail.com"],
	["Permana","19510014","Sistem Informasi","Putra56@gmail.com"]

];
?>
<!DOCTYYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>
	<body>
	<h1>Daftar Mahasiswa</h1>
<? php foreach ($mahasiswa as $mhs): ?>
	<ul>
		<?php foreach ($mhs as $m): ?>
			<li> <?php echo $m; ?> </li>
		<?php endforeach; ?>
	</ul>
<?php endforeach; ?>
	</body>
</html>
