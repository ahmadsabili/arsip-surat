<?php
$sql = "SELECT * FROM users";

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
                        <a href="index.php?page=tambah-user" class="btn btn-sm waves-effect waves-light btn-primary"><i class="fas fa-plus"></i>&nbsp;Tambah User</a>
                    </h6>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $user) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $user['name'] ?></td>
                                    <td><?= $user['username'] ?></td>
                                    <td><?= $user['role'] ?></td>
                                    <td>
                                        <div class="button-group d-flex flex-row">
                                            <a href="index.php?page=edit-user&id_user=<?= $user['id_user'] ?>" class="btn btn-sm waves-effect waves-light btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                                            <a href="controllers/user/reset-password.php?id_user=<?= $user['id_user'] ?>" class="btn btn-sm waves-effect waves-light btn-success" title="Reset Password" onclick="return confirm('Reset password menjadi user123 ?')"><i class="fas fa-sync"></i></a>
                                            <a href="controllers/user/delete.php?id_user=<?= $user['id_user'] ?>" class="btn btn-sm waves-effect waves-light btn-danger" title="Hapus" onclick="return confirm('Hapus data?')"><i class="fas fa-trash"></i></a>
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