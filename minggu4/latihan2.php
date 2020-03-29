<!DOCTYPE html>
<html lang="en">
<head>
		<meta charst="UTF-8">
		<tittle>Latihan Looping</tittle>
</head>
<body>
	<h2>Membuat Perulangan Tabel</h2>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php
		for ($b = 1; $b <= 8; $b++) {# $b = untuk baris
			echo "<tr>";
			for ($k = 1; $k <= 10; $k++) {#$k =untuk kolom
				echo "<td> $b,$k </td>";
			}
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>
