<?php
include '../../config/koneksi.php';

// ambil data dari form
$id_user = $_GET['id_user'];
$password = password_hash('user123', PASSWORD_DEFAULT);

// query insert data
$sql = "UPDATE users SET password = '$password' WHERE id_user = '$id_user'" ;

$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Password berhasil direset!');window.location='../../index.php?page=user';</script>";
} else {
    echo "Gagal";
}