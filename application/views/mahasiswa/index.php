<div class="col-md-9 p-4 pt-4">
    <h3><i class="fa-solid fa-graduation-cap"></i> Mahasiswa</h3>
    <hr>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-5">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>Berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url('mahasiswa/tambah'); ?>" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Data Mahasiswa</a>
        </div>
    </div>
    <table class="table mt-4">
        <thead class=" table-dark">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $i => $mhs) : ?>
                <tr>
                    <td><?= ++$i; ?></td>
                    <td><?= $mhs['Nim_mhs']; ?></td>
                    <td><?= $mhs['Nama_mhs']; ?></td>
                    <td><?= $mhs['Almt_mhs']; ?></td>
                    <td>
                        <a href="<?= base_url('mahasiswa/ubah/'); ?><?= $mhs['Nim_mhs']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="<?= base_url('mahasiswa/detail/'); ?><?= $mhs['Nim_mhs']; ?>" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i></a>
                        <a href="<?= base_url('mahasiswa/hapus/'); ?><?= $mhs['Nim_mhs']; ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>