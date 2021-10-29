<?php
include 'koneksi.php';
$ambil = $koneksi->query("SELECT * FROM tbl_buku");
$baris = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tbl_buku WHERE id_siswa='$_GET[id]'");
echo "<script>alert('Data telah dihapus');</script>";
echo "<script>location='index.php';</script>";