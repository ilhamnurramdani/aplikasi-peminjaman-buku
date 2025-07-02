<div class="col-md-9 p-4 pt-4">
    <h3><i class="fa-solid fa-handshake"></i> Laporan Peminjaman</h3>
    <hr>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-5">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Peminjaman <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <table class="table mt-4 data-table">
        <thead class=" table-dark">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Jumlah Hari</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporan_peminjaman as $i => $peminjaman) : ?>
                <tr>
                    <td><?= ++$i; ?></td>
                    <td><?= $peminjaman['nim_mahasiswa']; ?></td>
                    <td><?= $peminjaman['Nama_mhs']; ?></td>
                    <td><?= $peminjaman['tanggal_peminjaman']; ?></td>
                    <td><?= $peminjaman['tanggal_pengembalian']; ?></td>
                    <td><?= date_diff(date_create($peminjaman['tanggal_peminjaman']), date_create($peminjaman['tanggal_pengembalian']))->format('%a Hari'); ?></td>
                    <td>
                        <a href="<?= base_url('laporan_peminjaman/download_pdf/' . $peminjaman['id_peminjaman']); ?>" class="btn btn-primary">
                            <i class="fa-solid fa-file-pdf"></i>
                        </a>
                        <a href="<?= base_url('laporan_peminjaman/hapus/' . $peminjaman['id_peminjaman']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>