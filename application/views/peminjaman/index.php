<div class="col-md-4 p-4 pt-4">
    <h3><i class="fa-solid fa-book"></i> Buku</h3>
    <hr>
    <!-- Button Modal Cari data buku -->
    <button type="button" class="btn btn-primary" id="cariDataBuku" data-bs-toggle="modal" data-bs-target="#buku">
        Cari Data Buku
    </button>
    <table class="table mt-3">
        <thead class="table-dark">
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="data-buku">
        </tbody>
    </table>
</div>

<div class="col-md-6 p-4 pt-4">
    <h3><i class="fa-solid fa-graduation-cap"></i> Mahasiswa</h3>
    <hr>
    <!-- Button Modal Cari data mahasiswa -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mahasiswa">
        Cari Data Mahasiswa
    </button>
    <ul class="list-group mt-3">
    </ul>
    <div class="row">
        <div class="col-md-6 d-none" id="show-form">
            <label for="tanggal_pengembalian" class="mt-3">Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" class="form-control" />
            <button class="btn btn-primary mt-3" id="simpan-data-buku-mahasiswa">Simpan Data Buku & Mahasiswa</button>
        </div>
    </div>
</div>


<!-- Modal Buku -->
<div class="modal fade" id="buku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table display data-table" id="table-buku">
                    <thead class="table-dark">
                        <tr>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="data-buku">
                        <?php foreach ($buku as $bk) : ?>
                            <tr>
                                <td><?= $bk['Judul_buku']; ?></td>
                                <td><?= $bk['Pengarang']; ?></td>
                                <td>
                                    <button class="btn btn-primary tambah-data-buku" data-judul="<?= $bk['Judul_buku']; ?>" data-pengarang="<?= $bk['Pengarang']; ?>" data-id="<?= $bk['id']; ?>">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Mahasiswa -->
<div class="modal fade" id="mahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table display data-table" id="data-table">
                    <thead class="table-dark">
                        <tr>
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>Alamat Mahasiswa</th>
                            <th>No Telepon</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= $mhs['Nim_mhs'] ?></td>
                                <td><?= $mhs['Nama_mhs']; ?></td>
                                <td><?= $mhs['Almt_mhs']; ?></td>
                                <td><?= $mhs['Tlp_mhs']; ?></td>
                                <td><?= $mhs['Jurusan']; ?></td>
                                <td>
                                    <button class="btn btn-primary pilih-mahasiswa" data-nim="<?= $mhs['Nim_mhs'] ?>" data-nama="<?= $mhs['Nama_mhs']; ?>" data-alamat="<?= $mhs['Almt_mhs']; ?>" data-no_telepon="<?= $mhs['Tlp_mhs']; ?>" data-jurusan="<?= $mhs['Jurusan']; ?>">Pilih</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>