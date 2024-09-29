<?php
include 'koneksi.php';
$conn->query("DELETE FROM transaksi WHERE id='$_GET[id]'");
echo "<script>alert('tranksaksi Berhasil Di Hapus');</script>";
echo "<script> location ='../index.php';</script>";
?>