<div class="col-md-9 p-4 pt-4 ">
    <h3><i class="fa-solid fa-gauge"></i> Dashboard</h3>
    <hr>

    <h3>Aplikasi Peminjaman Buku</h3>

    <div class="row text-white">
        <div class="card bg-info mt-3" style="width: 18rem; ">
            <div class="card-body">
                <h5 class="card-title">Data Mahasiswa</h5>
                <div class="card-body-icon " style="font-size: 70px;">
                    <i class=" fa-solid fa-graduation-cap pr-2"></i>
                </div>
                <a href="<?= base_url("mahasiswa"); ?>">
                    <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>

        <div class="card bg-success mt-3" style="width: 18rem; margin-left: 25px;">
            <div class="card-body">
                <h5 class="card-title">Data Buku</h5>
                <div class="card-body-icon" style="font-size: 70px;">
                    <i class="fa-solid fa-book" style="font-size: 70px;"></i>
                </div>
                <a href="<?= base_url("buku"); ?>">
                    <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>

        <div class="card bg-danger mt-3" style="width: 18rem; margin-left: 25px;">
            <div class="card-body">
                <h5 class="card-title">Transaksi</h5>
                <div class="card-body-icon" style="font-size: 70px;">
                    <i class=" fa-solid fa-business-time"></i>
                </div>
                <a href="<?= base_url("peminjaman"); ?>">
                    <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>
    </div>
</div>