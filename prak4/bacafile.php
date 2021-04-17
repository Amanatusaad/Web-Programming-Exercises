<?php 
$namaFile = "myfile.txt";
$myfile = fopen($namaFile, "r") or die("File Tidak Bisa dibuka!");
echo fread($myfile, filesize($namaFile));
fclose($myfile);
?>