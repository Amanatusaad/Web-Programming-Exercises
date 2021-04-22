<?php
$nameFile = "datamhs.dat";
$myfile = fopen($nameFile, "a") or die("File Tidak Bisa dibuka!");

if (isset($_POST['submit'])) {
	// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgllahir = $_POST['tgllahir'];
	$tmptlahir = $_POST['tmptlahir'];

	$input = implode("|", array("\n".$nim, $nama, $tgllahir, $tmptlahir));
}else{
	echo "Data Tidak Bisa Diinputkan";
}
fwrite($myfile, $input);
fclose($myfile);
?>