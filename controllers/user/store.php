<?php
include '../../config/koneksi.php';

// ambil data dari form
$name = $_POST['name'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

// query insert data
$sql = "INSERT INTO users (name, username, password, role) VALUES ('$name', '$username', '$password', '$role')";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='../../index.php?page=user';</script>";
} else {
    echo "Gagal";
}