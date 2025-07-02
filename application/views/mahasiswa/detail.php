<div class="col-md-9 mt-4">
    <h3><i class="fa-solid fa-graduation-cap"></i> Mahasiswa</h3>
    <hr>
    <div class="card mt-4">
        <h5 class="card-header">Data Detail Mahasiswa</h5>
        <div class="card-body">
            <h5 class="card-title"><?php echo $mahasiswa['Nim_mhs']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $mahasiswa['Nama_mhs']; ?></h6>
            <p class="card-text"><?php echo $mahasiswa['Almt_mhs']; ?></p>
            <p class="card-text"><?php echo $mahasiswa['Tlp_mhs']; ?></p>
            <p class="card-text"><?php echo $mahasiswa['Jurusan']; ?></p>
            <a href="<?php echo base_url('mahasiswa') ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>