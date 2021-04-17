<?php
$nameFile = "myfile.txt";
$myfile = fopen($nameFile, "w") or die("File Tidak Bisa dibuka!");
fwrite($myfile, "DOS = Disk Operating System\n");
fclose($myfile);
?>