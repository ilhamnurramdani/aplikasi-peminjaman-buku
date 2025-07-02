<!DOCTYPE html>
<html>

<head>
    <title><?= $judul; ?></title>
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/style.css'); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap5.min.css'); ?>">
</head>

<body>

    <div class="row">
        <div class=" col-md-2 bg-dark pr-4 pt-4 min-vh-100">
            <nav class="nav flex-column ml-4 pb-5">
                <a class="nav-link text-white" aria-current="page" href="<?= base_url('home'); ?>"><i class="fa-solid fa-gauge"> </i> Dashboard</a>
                <hr class="bg-secondary">
                <h6 class="text-white">&nbsp; Master</h6>
                <a class="nav-link text-white" href="<?= base_url("mahasiswa"); ?>"><i class="fa-solid fa-graduation-cap"></i> Mahasiswa</a>
                <a class="nav-link text-white" href="<?= base_url("buku") ?>"><i class="fa-solid fa-book"></i> Buku</a>
                <hr class="bg-secondary">
                <h6 class="text-white">&nbsp; Transaksi</h6>
                <a class="nav-link text-white" href="<?= base_url('peminjaman'); ?>"><i class="fa-solid fa-business-time"></i> Peminjaman</a>
                <hr class="bg-secondary">
                <h6 class="text-white">&nbsp; Laporan</h6>
                <a class="nav-link text-white" href="<?= base_url('laporan_peminjaman'); ?>"><i class="fa-solid fa-handshake"></i> Laporan Peminjaman</a>
                <hr class="bg-secondary">
                <h6 class="text-white">&nbsp; Tentang</h6>
                <a class="nav-link text-white" href="<?= base_url("tentang_kami"); ?>"><i class="fa-solid fa-circle-info"></i> Tentang Kami</a>
                <br>

            </nav>
        </div>