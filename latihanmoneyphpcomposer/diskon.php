<?php

function hitungDiskon($hargaAwal, $persenDiskon)
{
    $potongan = $hargaAwal * ($persenDiskon / 100);

    $hargaAkhir = $hargaAwal - $potongan;

    return $hargaAkhir;
}

$hasil = "";

if (isset($_POST['hitung'])) {

    $harga = $_POST['harga'];

    $diskon = $_POST['diskon'];

    $hasil = hitungDiskon($harga, $diskon);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Diskon</title>
</head>
<body>

<h2>Kalkulator Diskon</h2>

<form method="POST">

    <label>Harga Awal:</label><br>
    <input type="number" name="harga" required>

    <br><br>

    <label>Diskon (%):</label><br>
    <input type="number" name="diskon" required>

    <br><br>

    <button type="submit" name="hitung">
        Hitung
    </button>

</form>

<?php

if ($hasil != "") {

    echo "<h3>Harga Setelah Diskon: Rp "
        . number_format($hasil, 0, ',', '.')
        . "</h3>";
}

?>

</body>
</html>