<?php
include "session.php";
include "koneksi.php";

$id = $_GET['id'];

mysqli_query($koneksi,
    "DELETE FROM paket_wisata
    WHERE id_paket='$id'");

header("Location: index.php");
exit;
?>