<?php
    session_start();
    
    echo "<p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>" ;
    
    $random_angka = $_SESSION['random'];
    if (isset($_POST['submit'])){
        $tebakan = (int)$_POST['tebak'];
        if ($tebakan > $random_angka){
            echo "Waah... masih salah yaa, bilangan tebakan Anda terlalu besar";
        ?>
            <form method="post" action="Random.php">
                <input type="text" name="tebak">
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php
        } else if ($tebakan < $random_angka){
            echo "Waah... masih salah yaa, bilangan tebakan Anda terlalu kecil";
            ?>
            <form method="post" action="Random.php" >
                <input type="text" name="tebak">
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php
        } else {
            echo "Selamat yaaa.. Anda Benar, saya telah memilih bilangan ".$random_angka;
            echo "<p><a href='Tebak.php'>Ulangi Lagi</a></p>";
            echo "<p><a href='Logout.php'>Ganti User</a></p>";
        }

    }
?>