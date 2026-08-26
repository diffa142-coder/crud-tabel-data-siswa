<?php
include "koneksi.php";

$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);
$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);

$query = "INSERT INTO siswa (nis, nama, kelas, jurusan) VALUES ('$nis', '$nama', '$kelas', '$jurusan')";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
    exit;
} else {
    die("Gagal menyimpan data: " . mysqli_error($koneksi));
}
