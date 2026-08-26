<?php
include "koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM siswa WHERE id = '$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
    exit;
} else {
    die("Gagal hapus data: " . mysqli_error($koneksi));
}
