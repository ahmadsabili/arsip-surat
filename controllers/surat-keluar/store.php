<?php
include '../../config/koneksi.php';

// ambil data dari form
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
$file = $_FILES['file_surat']['tmp_name'];
$nama_file = $_FILES['file_surat']['name'];
$nama_file_baru = time() . "_" . $nama_file;

// direktori upload
$dir =  "../../uploads/surat-keluar/";


// query insert data
$sql = "INSERT INTO surat_keluar (no_surat, no_agenda, perihal, lampiran, sifat_id, tujuan, asal, tembusan, tanggal_surat, ringkasan, file_surat) VALUES ('$no_surat', '$no_agenda', '$perihal', '$lampiran', '$sifat', '$tujuan', '$asal', '$tembusan', '$tanggal_surat', '$ringkasan', '$nama_file_baru')";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    // pindahkan file ke direktori upload
    move_uploaded_file($file, $dir . $nama_file_baru);
    echo "<script>alert('Data berhasil ditambahkan!');window.location='../../index.php?page=surat-keluar';</script>";
} else {
    echo "Gagal";
}