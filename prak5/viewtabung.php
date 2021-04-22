<!DOCTYPE html>
<html>
<head>
	<title >DATA UKURAN TABUNG</title>
</head>
<body> <center>
	<p><b>DATA UKURAN TABUNG</b></p>

	<?php
	echo "<table border = '1'>";
	echo " <th>NAMA TABUNG</th><th>DIAMETER</th><th>TINGGI</th><th>LUAS</th>";

	$Myfile = fopen("datatabung.dat", "r");
	while (!feof($Myfile)) {
		# code...
		$baca = fgets($Myfile);
		$cut = explode(",", $baca);
		 echo "<tr>
		 <td>$cut[0]</td>
		 <td>$cut[1]</td>
		 <td>$cut[2]</td>
		 <td><a href='hitungluas.php?n=$cut[0]&d=$cut[1]&t=$cut[2]'>view</a></td>
		 </tr>";
	}
	echo "</table>";
	fclose($Myfile);
	?>
</center>
</body>
</html>