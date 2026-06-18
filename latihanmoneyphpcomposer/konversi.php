<?php

require 'vendor/autoload.php';

use Money\Money;
use Money\Currency;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Mata Uang USD ke IDR</title>
</head>
<body>
    <h2>Konversi Mata Uang USD ke IDR</h2>

    <form method="POST">

    <label>Jumlah dalam USD:</label>
    <br>

    <input type="number" name="jumlah" step="0.01" required>

    <br><br>

    <input type="submit" value="Konversi">

</form>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlahUSD = floatval($_POST['jumlah']); //ambil input dari form

        $jumlahCent = intval($jumlahUSD * 100); //ubah ke cent (minor unit)

        // buat objek money dengan USD
        $uangUSD = new Money($jumlahCent, new Currency('USD'));

        //simulasi nilai tukar tetap: 1 USD = 15.000 IDR
        //untuk mendapatkan nilai aktual dan realtime, gunakan API
        $kurs = 15000;

        // hitung hasil konversi ke IDR
        $jumlahIDR = ($uangUSD->getAmount() * $kurs) / 100;

         echo "<h3>Hasil Konversi</h3>";
    echo "<p>USD $jumlahUSD = Rp "
        . number_format($jumlahIDR, 2, ',', '.')
        . "</p>";
}
?>

</body>
</html>