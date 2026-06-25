<?php
include "session.php";
include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM paket_wisata
    WHERE id_paket='$id'"
);

$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $nama_paket = $_POST['nama_paket'];
    $tujuan = $_POST['tujuan'];
    $harga = $_POST['harga'];
    $durasi = $_POST['durasi'];

    mysqli_query(
        $koneksi,
        "UPDATE paket_wisata SET
        nama_paket='$nama_paket',
        tujuan='$tujuan',
        harga='$harga',
        durasi='$durasi'
        WHERE id_paket='$id'"
    );

    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Paket Wisata</title>
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

<h2>✏️ Edit Paket Wisata</h2>

<form method="POST">

Nama Paket

<input
type="text"
name="nama_paket"
value="<?= $row['nama_paket']; ?>"
required>

Tujuan

<input
type="text"
name="tujuan"
value="<?= $row['tujuan']; ?>"
required>

Harga

<input
type="number"
name="harga"
value="<?= $row['harga']; ?>"
required>

Durasi

<input
type="text"
name="durasi"
value="<?= $row['durasi']; ?>"
required>

<button
type="submit"
name="update"
class="btn btn-primary">
Update
</button>

</form>

</div>

</div>

</body>
</html>