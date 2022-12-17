<?php
include '../../config/koneksi.php';
$id_user = $_GET['id_user'];

$query = mysqli_query($koneksi, "DELETE FROM users WHERE id_user='$id_user'");

if ($query) {
    echo "<script>alert('Data berhasil dihapus!');window.location='../../index.php?page=user';</script>";
} else {
    echo "Gagal" . mysqli_error($koneksi);
}
?>