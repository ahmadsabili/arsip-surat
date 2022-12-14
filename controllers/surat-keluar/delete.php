<?php
include '../../config/koneksi.php';
$id_surat_keluar = $_GET['id_surat_keluar'];

$file_surat = mysqli_query($koneksi, "SELECT file_surat FROM surat_keluar WHERE id_surat_keluar='$id_surat_keluar'");
$file_surat = mysqli_fetch_assoc($file_surat);

$query = mysqli_query($koneksi, "DELETE FROM surat_keluar WHERE id_surat_keluar='$id_surat_keluar'");

if ($query) {
    // hapus file
    unlink("../../uploads/surat-keluar/" . $file_surat['file_surat']);

    echo "<script>alert('Data berhasil dihapus!');window.location='../../index.php?page=surat-keluar';</script>";
} else {
    echo "Gagal" . mysqli_error($koneksi);
}
?>