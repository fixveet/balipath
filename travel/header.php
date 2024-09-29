<?php
include './php/koneksi.php';
session_start();

if (!isset($_SESSION["username"])) {
    echo "<script> alert('Harap login terlebih dahulu');</script>";
    echo "<script>location='login.php';</script>";
}
?>