<?php

if (isset($_GET['page'])) {
    $current_page = $_GET['page'];
    switch ($current_page) {
        case 'dashboard':
            $title = 'Dashboard';
            break;
        case 'surat-masuk':
            $title = 'Surat Masuk';
            break;
        case 'tambah-surat-masuk':
            $title = 'Tambah Surat Masuk';
            break;
        case 'edit-surat-masuk':
            $title = 'Edit Surat Masuk';
            break;
        case 'surat-keluar':
            $title = 'Surat Keluar';
            break;
        case 'tambah-surat-keluar':
            $title = 'Tambah Surat Keluar';
            break;
        case 'edit-surat-keluar':
            $title = 'Edit Surat Keluar';
            break;
        case 'user':
            include 'pages/user/index.php';
            break;
        case 'tambah-user':
            include 'pages/user/create.php';
            break;
        case 'edit-user':
            include 'pages/user/edit.php';
            break;
        case 'hapus-user':
            include 'pages/user/delete.php';
            break;
    }
}
?>