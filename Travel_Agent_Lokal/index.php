<?php
include "session.php";
include "koneksi.php";

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM paket_wisata"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Paket Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">

<div class="logo">
✈️ Travel Agent Lokal
</div>

<div class="menu">
    <a href="dashboard.php">Dashboard</a>
    <a href="tambah.php">Tambah Paket</a>
    <a href="logout.php">Logout</a>
</div>

</div>

<div class="container">

<div class="card">

<h1 class="title">
Data Paket Wisata
</h1>

<p class="subtitle">
Kelola seluruh paket wisata yang tersedia.
</p>

<table>

<tr>
    <th>No</th>
    <th>Nama Paket</th>
    <th>Tujuan</th>
    <th>Harga</th>
    <th>Durasi</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
while($row = mysqli_fetch_assoc($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $row['nama_paket']; ?></td>

<td><?= $row['tujuan']; ?></td>

<td>
Rp <?= number_format($row['harga'],0,',','.'); ?>
</td>

<td><?= $row['durasi']; ?></td>

<td>

<a
class="btn btn-edit"
href="edit.php?id=<?= $row['id_paket']; ?>">
✏️ Edit
</a>

<a
class="btn btn-delete"
href="hapus.php?id=<?= $row['id_paket']; ?>"
onclick="return confirm('Yakin ingin menghapus data?')">
🗑 Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>