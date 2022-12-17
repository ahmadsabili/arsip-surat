<?php
include '../../config/koneksi.php';

// ambil data dari form
$id_user = $_POST['id_user'];
$name = $_POST['name'];
$username = $_POST['username'];
$role = $_POST['role'];

// query insert data
$sql = "UPDATE users SET name = '$name', username = '$username', role = '$role' WHERE id_user = '$id_user'" ;

$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Data berhasil diupdate!');window.location='../../index.php?page=user';</script>";
} else {
    echo "Gagal";
}