<?php
include '../../config/koneksi.php';
$id_surat_masuk = $_GET['id_surat_masuk'];

$file_surat = mysqli_query($koneksi, "SELECT file_surat FROM surat_masuk WHERE id_surat_masuk='$id_surat_masuk'");
$file_surat = mysqli_fetch_assoc($file_surat);

$query = mysqli_query($koneksi, "DELETE FROM surat_masuk WHERE id_surat_masuk='$id_surat_masuk'");

if ($query) {
    // hapus file
    unlink("../../uploads/surat-masuk/" . $file_surat['file_surat']);

    echo "<script>alert('Data berhasil dihapus!');window.location='../../index.php?page=surat-masuk';</script>";
} else {
    echo "Gagal" . mysqli_error($koneksi);
}
?>