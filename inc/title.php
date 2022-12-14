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
            include 'pages/surat-keluar/index.php';
            break;
        case 'tambah-surat-keluar':
            include 'pages/surat-keluar/create.php';
            break;
        case 'edit-surat-keluar':
            include 'pages/surat-keluar/edit.php';
            break;
        case 'hapus-surat-keluar':
            include 'pages/surat-keluar/delete.php';
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
        default:
            include 'pages/dashboard.php';
            break;
    }
}
?>