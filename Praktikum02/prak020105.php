<html>
 	<head>Headings</head>
 	<body>

 	<?php
 	$i = 1;
 	do {
 		# code...
 		if ($i % 2 == 0) {
 			# code...
 			echo "<h".$i."> <font color = 'Red'> Heading".$i."</font></h".$i.">";
 		}
 		else{
 			echo "<h".$i."> Heading".$i."</h".$i.">";
 		}
 		$i++;
 	} while ( $i<= 6);
 	?>
 	</body>
</html>
