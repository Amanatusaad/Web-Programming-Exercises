<?php 
	session_start();
	$_SESSION['random'] =rand(0,100);
?>

<!DOCTYPE html>
<html>
<head>
	<title>latihan</title>
</head>
<body>
	<h1>Tebak Angka</h1>
	<?php
	    echo "<p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>" ;
	?>
	<form method="post" action="Random.php">
		<input type="text" name="tebak">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>