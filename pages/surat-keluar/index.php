<?php
$sql = "SELECT * FROM surat_keluar INNER JOIN sifat_surat ON surat_keluar.sifat_id = sifat_surat.id_sifat";

$result = mysqli_query($koneksi, $sql);
$no = 1;
?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title"><?= $title ?></h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle mb-3 float-right">
                        <a href="index.php?page=tambah-surat-keluar" class="btn btn-sm waves-effect waves-light btn-primary"><i class="fas fa-plus"></i>&nbsp;Tambah Surat</a>
                    </h6>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>No Agenda</th>
                                    <th>Perihal</th>
                                    <th>Sifat</th>
                                    <th>Tujuan</th>
                                    <th>Asal</th>
                                    <th>Tembusan</th>
                                    <th>Tanggal Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $surat) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $surat['no_surat'] ?></td>
                                    <td><?= $surat['no_agenda'] ?></td>
                                    <td><?= $surat['perihal'] ?></td>
                                    <td><?= $surat['sifat'] ?></td>
                                    <td><?= $surat['tujuan'] ?></td>
                                    <td><?= $surat['asal'] ?></td>
                                    <td><?= $surat['tembusan'] ?></td>
                                    <td><?= $surat['tanggal_surat'] ?></td>
                                    <td>
                                        <div class="button-group d-flex flex-row">
                                            <a href="uploads/surat-keluar/<?= $surat['file_surat'] ?>" class="btn btn-sm waves-effect waves-light btn-primary" title="Lihat File" target="_blank"><i class="fas fa-file-pdf"></i></a>
                                            <a href="index.php?page=edit-surat-keluar&id_surat_keluar=<?= $surat['id_surat_keluar'] ?>" class="btn btn-sm waves-effect waves-light btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                                            <a href="controllers/surat-keluar/delete.php?id_surat_keluar=<?= $surat['id_surat_keluar'] ?>" class="btn btn-sm waves-effect waves-light btn-danger" title="Hapus" onclick="return confirm('Hapus data?')"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 