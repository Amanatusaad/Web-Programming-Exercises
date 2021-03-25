<?php 
$baris = 4;
$kolom = 5;
$k = 1;
echo "<table border = '1'>";
for ($i=0; $i < $baris; $i++) { 
	# code...
	echo "<tr>";
	for ($j=0; $j < $kolom; $j++) { 
		# code...
		echo "<td>$k</td>";
		$k++;
	}
	echo "</tr>";
}
echo "</table>";
?>