<?php
$nameFile = "myfile.txt";
$myfile = fopen($nameFile, "r") or die("File Tidak Bisa dibuka!");
while (!feof($myfile)) {
	# code...
	echo fgets($myfile);
}
fclose($myfile);
?>