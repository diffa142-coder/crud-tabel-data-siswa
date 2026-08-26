<?php
include "koneksi.php";

$id = $_POST['id'];
$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);
$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);

$query = "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
    exit;
} else {
    die("Gagal update data: " . mysqli_error($koneksi));
}
