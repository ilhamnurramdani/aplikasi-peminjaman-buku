<div class="col-md-6 mt-3">
    <h3><i class="fa-solid fa-graduation-cap"></i> Mahasiswa</h3>
    <hr>
    <div class="card">
        <h5 class="card-header">Form Tambah Mahasiswa</h5>
        <div class="card-body">

            <form action="" method="POST">
                <div class="form-group">
                    <input type="hidden" name="nim" value="<?php echo $mahasiswa['Nim_mhs']; ?>">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa['Nim_mhs']; ?>">
                    <div class="form-text text-danger"><?php echo form_error('nim'); ?></div>
                </div>
                <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['Nama_mhs']; ?>">
                    <div class="form-text text-danger"><?php echo form_error('nama'); ?></div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $mahasiswa['Almt_mhs']; ?>">
                    <div class="form-text text-danger"><?php echo form_error('alamat'); ?></div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="alamat" name="notelp" value="<?php echo $mahasiswa['Tlp_mhs']; ?>">
                    <div class="form-text text-danger"><?php echo form_error('notelp'); ?></div>
                </div>
                <div class="form-group">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $mahasiswa['Jurusan']; ?>">
                    <div class="form-text text-danger"><?php echo form_error('jurusan'); ?></div>
                </div>
                <br>
                <button type="submit" name="tambah" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>

</div>