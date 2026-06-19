<?php
// Memanggil autoload Composer agar library Carbon dapat digunakan
require 'vendor/autoload.php';

// Menggunakan class Carbon dari library Carbon
use Carbon\Carbon;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Umur Mahasiswa</title>
</head>

<body>

<h2>Sistem Menghitung Umur Mahasiswa</h2>

<!-- Form untuk input tanggal lahir -->
<form method="POST">
    <label>Tanggal Lahir:</label><br>
    <!-- Input bertipe date agar user memilih tanggal dari kalender -->
    <input type="date" name="tanggal_lahir" required>
    <br><br>
    <button type="submit">Hitung Umur</button>
</form>

<?php
// Mengecek apakah form sudah dikirim (method POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil data tanggal lahir dari input form
    $tanggalLahir = $_POST['tanggal_lahir'];

    // Mengubah string tanggal menjadi objek Carbon agar bisa diolah
    $tanggal = Carbon::parse($tanggalLahir);

    // Menghitung umur secara otomatis berdasarkan tanggal sekarang
    $umur = $tanggal->age;

    // Menampilkan hasil ke browser
    echo "<h3>Hasil:</h3>";

    // Menampilkan tanggal lahir dengan format d-m-Y
    echo "Tanggal Lahir: " . $tanggal->format('d-m-Y') . "<br>";

    // Menampilkan umur dalam satuan tahun
    echo "Umur: " . $umur . " Tahun";
}
?>

</body>
</html>