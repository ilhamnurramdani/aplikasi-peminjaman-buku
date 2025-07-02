<div class="col-md-9 p-4 pt-4">
    <h3><i class="fa-solid fa-book"></i> Buku</h3>
    <hr>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-5">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Buku <strong>Berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url('buku/tambah'); ?>" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Data Buku</a>
        </div>
    </div>
    <table class="table mt-4">
        <thead class=" table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $i => $bk) : ?>
                <tr>
                    <td><?= ++$i; ?></td>
                    <td><?= $bk['Judul_buku']; ?></td>
                    <td><?= $bk['Pengarang']; ?></td>
                    <td>
                        <a href="<?= base_url('buku/ubah/'); ?><?= $bk['id']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="<?= base_url('buku/detail/'); ?><?= $bk['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i></a>
                        <a href="<?= base_url('buku/hapus/'); ?><?= $bk['id']; ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>