<?php
include "session.php";
include "koneksi.php";

$total = mysqli_num_rows(
    mysqli_query($koneksi,"SELECT * FROM paket_wisata")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <div class="logo">
        ✈️ Travel Agent Lokal
    </div>

    <div class="menu">
        <a href="dashboard.php">Dashboard</a>
        <a href="index.php">Paket Wisata</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">

<div class="card">

<h1 class="title">
Selamat Datang,
<?= $_SESSION['username']; ?>
</h1>

<p class="subtitle">
Kelola data paket wisata dengan mudah.
</p>

<div class="stat">

<div class="stat-card">
<h3>Total Paket Wisata</h3>
<h1><?= $total ?></h1>
</div>

<div class="stat-card">
<h3>Status Sistem</h3>
<h1>Aktif</h1>
</div>

</div>

</div>

</div>

</body>
</html>