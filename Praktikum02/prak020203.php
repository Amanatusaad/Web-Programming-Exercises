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
		if ($k%2 == 0){
			echo "<td bgcolor = 'white'><font color = 'red'>$k </font></td>";
			$k++;
		}
		else{
			echo "<td bgcolor = 'red'><font color = 'white'>$k</font></td>";
			$k++;
		}
	}
	echo "</tr>";
}
echo "</table>";
?>