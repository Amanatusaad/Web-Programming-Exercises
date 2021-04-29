<?php
// mengecek keberadaan session 'namauser'
// silakan cek kembali di script proses.php
if (!isset($_COOKIE['namauser'])) {
	# code...
	echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
	echo "<p><a herf='form.html'>Login</a>dulu ya...</p>";
	// setelah memunculkan pesan di atas, selanjutnya dibreak dg exit()
	exit();
}
?>