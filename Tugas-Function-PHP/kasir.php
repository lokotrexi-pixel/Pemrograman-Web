<?php

// FUNCTION BUATAN SENDIRI (MINIMAL 3 FUNCTION)============================================

/*
    Function untuk menghitung diskon berdasarkan persen
    Parameter:
    - $harga = harga barang
    - $diskon = persen diskon
*/
function hitungDiskon($harga, $diskon)
{
    return $harga * $diskon / 100;
}

/*
    Function untuk menghitung pajak 11%
    Parameter:
    - $hargaSetelahDiskon = harga setelah dipotong diskon
*/
function hitungPajak($hargaSetelahDiskon)
{
    return $hargaSetelahDiskon * 0.11;
}

/*
    Function untuk menghitung total akhir
    Parameter:
    - $hargaSetelahDiskon = harga setelah diskon
    - $pajak = hasil pajak
*/
function hitungTotal($hargaSetelahDiskon, $pajak)
{
    return $hargaSetelahDiskon + $pajak;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kasir Sederhana</title>
</head>
<body>

<!-- Judul Aplikasi -->
<h2>Aplikasi Kasir Sederhana Menggunakan Function PHP</h2>

<!-- FORM INPUT DATA -->
<!-- Menggunakan method POST agar data tidak terlihat di URL -->
<form method="post">

<label>Harga Barang:</label><br>
    <input type="number" name="harga" required>
        <br><br>

        <label>Diskon (%):</label><br>
    <input type="number" name="diskon" required>
<br><br>

        <!-- tombol submit -->
    <button type="submit" name="hitung">Hitung</button>
</form>

<hr>

<?php


// PROSES HITUNG SETELAH FORM DIKIRIM ========================================

if (isset($_POST['hitung'])) {

// ambil data dari form
    $harga = $_POST['harga'];
        $diskon = $_POST['diskon'];

                // proses hitung menggunakan function
            $potongan = hitungDiskon($harga, $diskon);
        $hargaSetelahDiskon = $harga - $potongan;
    $pajak = hitungPajak($hargaSetelahDiskon);
$total = hitungTotal($hargaSetelahDiskon, $pajak);

// tampilkan hasil
    echo "<h3>Hasil Perhitungan</h3>";
        echo "Harga Awal: Rp " . number_format($harga,0,',','.') . "<br>";
            echo "Diskon: Rp " . number_format($potongan,0,',','.') . "<br>";
                echo "Pajak (11%): Rp " . number_format($pajak,0,',','.') . "<br>";
                    echo "<b>Total Bayar: Rp " . number_format($total,0,',','.') . "</b>";
}
?>

</body>
</html>