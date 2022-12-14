<?php
$id_surat_masuk = $_GET['id_surat_masuk'];
$sql = mysqli_query($koneksi, "SELECT * FROM surat_masuk INNER JOIN sifat_surat ON surat_masuk.sifat_id = sifat_surat.id_sifat WHERE id_surat_masuk = '$id_surat_masuk'");

$surat_masuk = mysqli_fetch_assoc($sql);

$sifat = mysqli_query($koneksi, "SELECT * FROM sifat_surat");
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
                    <button class="btn btn-warning" id="edit-button">Edit Data</button>
                    <button class="btn btn-secondary" id="cancel-edit-button" style="display: none;">Batal Edit Data</button>
                    <form action="controllers/surat-masuk/update.php" class="form" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_surat_masuk" value="<?= $surat_masuk['id_surat_masuk'] ?>">
                        <div class="form-group m-t-40 row">
                            <label for="no_surat" class="col-2 col-form-label">No Surat</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="no_surat" name="no_surat" placeholder="Masukkan no surat" required value="<?= $surat_masuk['no_surat'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_agenda" class="col-2 col-form-label">No Agenda</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="no_agenda" name="no_agenda" placeholder="Masukkan no agenda" required value="<?= $surat_masuk['no_agenda'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perihal" class="col-2 col-form-label">Perihal</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="perihal" name="perihal" placeholder="Masukkan perihal" required value="<?= $surat_masuk['perihal'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lampiran" class="col-2 col-form-label">Lampiran</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="lampiran" name="lampiran" placeholder="Masukkan lampiran" required value="<?= $surat_masuk['lampiran'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sifat" class="col-2 col-form-label">Sifat</label>
                            <div class="col-10">
                                <select class="custom-select col-12" id="sifat" name="sifat" disabled>
                                    <option value="" disabled hidden selected>--Pilih sifat surat--</option>
                                    <?php
                                    foreach($sifat as $s) :
                                    ?>
                                    <option value="<?= $s['id_sifat'] ?>" <?= $s['id_sifat'] == $surat_masuk['sifat_id'] ? 'selected' : '' ?>><?= $s['sifat'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tujuan" class="col-2 col-form-label">Tujuan</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="tujuan" name="tujuan" placeholder="Masukkan tujuan" required value="<?= $surat_masuk['tujuan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asal" class="col-2 col-form-label">Asal</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="asal" name="asal" placeholder="Masukkan asal" required value="<?= $surat_masuk['asal'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tembusan" class="col-2 col-form-label">Tembusan</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="tembusan" name="tembusan" placeholder="Masukkan tembusan" required value="<?= $surat_masuk['tembusan'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_surat" class="col-2 col-form-label">Tanggal Surat</label>
                            <div class="col-10">
                                <input class="form-control" type="date" id="tanggal_surat" name="tanggal_surat" required value="<?= $surat_masuk['tanggal_surat'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_diterima" class="col-2 col-form-label">Tanggal Diterima</label>
                            <div class="col-10">
                                <input class="form-control" type="date" id="tanggal_diterima" name="tanggal_diterima" required value="<?= $surat_masuk['tanggal_diterima'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ringkasan" class="col-2 col-form-label">Ringkasan</label>
                            <div class="col-10">
                                <textarea class="form-control" id="ringkasan" rows="3" name="ringkasan" readonly><?= $surat_masuk['ringkasan'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row" style="display: none;" id="file_surat_group">
                            <label for="file_surat" class="col-2 col-form-label">File Surat (.pdf)</label>
                            <div class="col-10">
                                <input type="file" class="form-control" id="file_surat" name="file_surat" accept="application/pdf">
                            </div>
                        </div>
                        <input type="hidden" name="file_surat_lama" value="<?= $surat_masuk['file_surat'] ?>">
                        <div class="form-group row" id="file_surat_sebelumnya">
                            <label for="file_surat" class="col-2 col-form-label">File Surat Sebelumnya</label>
                            <div class="col-10">
                                <iframe src="uploads/surat-masuk/<?= $surat_masuk['file_surat'] ?>" width="100%" height="500"></iframe>
                            </div>
                        </div>
                        <div class="float-right mt-2">
                            <button type="submit" class="btn btn-primary" id="submit-button" style="display: none;">Simpan</button>
                            <a href="index.php?page=surat-masuk" class="btn btn-dark">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>