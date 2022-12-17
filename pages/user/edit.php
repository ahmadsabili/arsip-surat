<?php
$id_user = $_GET['id_user'];

$sql = "SELECT * FROM users where id_user = '$id_user'";

$result = mysqli_query($koneksi, $sql);

$user = mysqli_fetch_assoc($result);
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
                    <h4 class="card-title">Masukkan User</h4>
                    <form action="controllers/user/update.php" class="form" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" id="id_user" value="<?= $user['id_user'] ?>">
                        <div class="form-group m-t-40 row">
                            <label for="name" class="col-2 col-form-label">Nama</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Masukkan nama" required value="<?= $user['name'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-2 col-form-label">Username</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="username" name="username" placeholder="Masukkan username" required value="<?= $user['username'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-2 col-form-label">Role</label>
                            <div class="col-10 ml-1 row">
                                <div class="custom-control custom-radio mr-3">
                                    <input type="radio" id="user" name="role" class="custom-control-input" value="user" <?= $user['role'] == 'user' ? 'checked' : '' ?>>
                                    <label class="custom-control-label" for="user">User</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="admin" name="role" class="custom-control-input" value="admin" <?= $user['role'] == 'admin' ? 'checked' : '' ?>>
                                    <label class="custom-control-label" for="admin">Admin</label>
                                </div>
                            </div>
                        </div>
                        <div class="float-right mt-2">
                            <button type="submit" class="btn btn-primary" id="submit-button">Simpan</button>
                            <a href="index.php?page=user" class="btn btn-dark">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>