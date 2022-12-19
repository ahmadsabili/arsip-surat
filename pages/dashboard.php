<?php
include 'config/koneksi.php';
$today = date("Y-m-d");

$surat_masuk_today = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM surat_masuk WHERE tanggal_diterima = '$today'"));
$surat_masuk_total = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM surat_masuk"));

$surat_keluar_today = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM surat_keluar WHERE tanggal_surat = '$today'"));
$surat_keluar_total = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM surat_keluar"));

?>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- Sales chart -->
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <i class="mdi mdi-inbox-arrow-down font-20 text-muted"></i>
                                <p class="font-16 m-b-5">Surat Masuk Hari Ini</p>
                            </div>
                            <div class="ml-auto">
                                <h1 class="font-light text-right"><?= $surat_masuk_today ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <i class="mdi mdi-inbox-arrow-up font-20  text-muted"></i>
                                <p class="font-16 m-b-5">Surat Keluar Hari Ini</p>
                            </div>
                            <div class="ml-auto">
                                <h1 class="font-light text-right"><?= $surat_keluar_today ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <i class="mdi mdi-email font-20 text-muted"></i>
                                <p class="font-16 m-b-5">Total Surat Masuk</p>
                            </div>
                            <div class="ml-auto">
                                <h1 class="font-light text-right"><?= $surat_masuk_total ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-purple" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <i class="mdi mdi-email-open font-20 text-muted"></i>
                                <p class="font-16 m-b-5">Total Surat Keluar</p>
                            </div>
                            <div class="ml-auto">
                                <h1 class="font-light text-right"><?= $surat_keluar_total ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->