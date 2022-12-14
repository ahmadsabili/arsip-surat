<?php
include '../../config/koneksi.php';

// ambil data dari form
$id_surat_keluar = $_POST['id_surat_keluar'];
$no_surat = $_POST['no_surat'];
$no_agenda = $_POST['no_agenda'];
$perihal = $_POST['perihal'];
$lampiran = $_POST['lampiran'];
$sifat = $_POST['sifat'];
$tujuan = $_POST['tujuan'];
$asal = $_POST['asal'];
$tembusan = $_POST['tembusan'];
$tanggal_surat = $_POST['tanggal_surat'];
$ringkasan = $_POST['ringkasan'];

// handle file upload
if (isset($_FILES['file_surat']['tmp_name']) && $_FILES['file_surat']['tmp_name'] != "") {
    // direktori upload
    $dir =  "../../uploads/surat-keluar/";

    // hapus file lama
    unlink($dir . $_POST['file_surat_lama']);

    // ambil data file
    $file = $_FILES['file_surat']['tmp_name'];
    $nama_file = $_FILES['file_surat']['name'];
    $nama_file_baru = time() . "_" . $nama_file;

    // query update
    $sql = "UPDATE surat_keluar SET no_surat = '$no_surat', no_agenda = '$no_agenda', perihal = '$perihal', lampiran = '$lampiran', sifat_id = '$sifat', tujuan = '$tujuan', asal = '$asal', tembusan = '$tembusan', tanggal_surat = '$tanggal_surat', ringkasan = '$ringkasan', file_surat = '$nama_file_baru' WHERE id_surat_keluar = $id_surat_keluar";

    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        // upload file
        move_uploaded_file($file, $dir . $nama_file_baru);
    }
} else {
    $sql = "UPDATE surat_keluar SET no_surat = '$no_surat', no_agenda = '$no_agenda', perihal = '$perihal', lampiran = '$lampiran', sifat_id = '$sifat', tujuan = '$tujuan', asal = '$asal', tembusan = '$tembusan', tanggal_surat = '$tanggal_surat', ringkasan = '$ringkasan' WHERE id_surat_keluar = $id_surat_keluar";

    $query = mysqli_query($koneksi, $sql);
}

if ($query) {
    echo "<script>alert('Data berhasil diupdate!');window.location='../../index.php?page=surat-keluar';</script>";
} else {
    echo "Gagal" . mysqli_error($koneksi);
}