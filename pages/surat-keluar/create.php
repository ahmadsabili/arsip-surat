<?php
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
                    <h4 class="card-title">Masukkan Data Surat Keluar</h4>
                    <form action="controllers/surat-keluar/store.php" class="form" method="POST" enctype="multipart/form-data">
                        <div class="form-group m-t-40 row">
                            <label for="no_surat" class="col-2 col-form-label">No Surat</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="no_surat" name="no_surat" placeholder="Masukkan no surat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_agenda" class="col-2 col-form-label">No Agenda</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="no_agenda" name="no_agenda" placeholder="Masukkan no agenda" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perihal" class="col-2 col-form-label">Perihal</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="perihal" name="perihal" placeholder="Masukkan perihal" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lampiran" class="col-2 col-form-label">Lampiran</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="lampiran" name="lampiran" placeholder="Masukkan lampiran" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sifat" class="col-2 col-form-label">Sifat</label>
                            <div class="col-10">
                                <select class="custom-select col-12" id="sifat" name="sifat">
                                    <option value="" disabled hidden selected>--Pilih sifat surat--</option>
                                    <?php
                                    foreach($sifat as $s) :
                                    ?>
                                    <option value="<?= $s['id_sifat'] ?>"><?= $s['sifat'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tujuan" class="col-2 col-form-label">Tujuan</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="tujuan" name="tujuan" placeholder="Masukkan tujuan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asal" class="col-2 col-form-label">Asal</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="asal" name="asal" placeholder="Masukkan asal" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tembusan" class="col-2 col-form-label">Tembusan</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="tembusan" name="tembusan" placeholder="Masukkan tembusan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_surat" class="col-2 col-form-label">Tanggal Surat</label>
                            <div class="col-10">
                                <input class="form-control" type="date" id="tanggal_surat" name="tanggal_surat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ringkasan" class="col-2 col-form-label">Ringkasan</label>
                            <div class="col-10">
                                <textarea class="form-control" id="ringkasan" rows="3" name="ringkasan"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file_surat" class="col-2 col-form-label">File Surat (.pdf)</label>
                            <div class="col-10">
                                <input type="file" class="form-control" id="file_surat" name="file_surat" accept="application/pdf" required>
                            </div>
                        </div>
                        <div class="float-right mt-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php?page=surat-keluar" class="btn btn-dark">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>