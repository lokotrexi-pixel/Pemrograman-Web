<?php
include "session.php";
include "koneksi.php";

if(isset($_POST['simpan'])){

    $nama_paket = $_POST['nama_paket'];
    $tujuan = $_POST['tujuan'];
    $harga = $_POST['harga'];
    $durasi = $_POST['durasi'];

    mysqli_query(
        $koneksi,
        "INSERT INTO paket_wisata
        (nama_paket,tujuan,harga,durasi)
        VALUES
        ('$nama_paket','$tujuan','$harga','$durasi')"
    );

    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Paket Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">

<div class="logo">
✈️ Travel Agent Lokal
</div>

<div class="menu">
    <a href="index.php">Kembali</a>
</div>

</div>

<div class="container">

<div class="form-box">

<h2>➕ Tambah Paket Wisata</h2>

<form method="POST">

Nama Paket

<input
type="text"
name="nama_paket"
required>

Tujuan

<input
type="text"
name="tujuan"
required>

Harga

<input
type="number"
name="harga"
required>

Durasi

<input
type="text"
name="durasi"
required>

<button
type="submit"
name="simpan"
class="btn btn-primary">
Simpan
</button>

</form>

</div>

</div>

</body>
</html>