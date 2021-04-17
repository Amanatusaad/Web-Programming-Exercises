<!DOCTYPE html>
<html>
<head>
	<title >Data Mahasiswa</title>
</head>
<body>
	<p> <b>Data Mahasiswa</b> </p>
	<?php  
	echo "<table border = '1'>";
	echo " <th>No</th><th>NIM</th><th>Nama</th><th>Tanggal Lahir</th><th>Tempat Lahir</th><th>Usia (Thn)</th>";

	$Myfile = fopen("datamhs.dat", "r");
	$i =0;
	while (!feof($Myfile)) {
		# code...
		$i++;
		$baca = fgets($Myfile);
		$cut = explode('|', $baca);

		echo "<tr center>
		<td>".$i."</td>
	    <td>$cut[0]</td>
	    <td>$cut[1]</td>
	    <td>$cut[2]</td>
	    <td>$cut[3]</td>
	    <td>".Usia($cut[2], date("Y-m-d")); echo " Tahun";"</td>
	    </tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "Jumlah Data : " .$i;

	function Usia($born, $today){

	#memecah Tanggal Lahir
	$pecah1 = explode("-", $born);
	$date1 = $pecah1[2];
	$month1 = $pecah1[1];
	$year1 = $pecah1[0];

	#memecah Tanggal Hari Ini
	$pecah2 = explode("-", $today);
	$date2 = $pecah2[2];
	$month2 = $pecah2[1];
	$year2 = $pecah2[0];

	#menghitung JDN dari masing-masing tanggal
	$tgl1 = GregorianToJD($month1, $date1, $year1);
	$tgl2 = GregorianToJD($month2, $date2, $year2);

	#menghitung selisih hari kedua tanggal
	$age = ceil(($tgl2 - $tgl1)/365);
	return $age;
	fclose($Myfile);
	}

	?>
</body>
</html>