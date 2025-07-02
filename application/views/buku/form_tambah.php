<div class="col-md-4 p-4 pt-4">
    <h3><i class="fa-solid fa-book"></i> Buku</h3>
    <hr>
    <div class="card">
        <h5 class="card-header">Form Data Buku</h5>
        <div class="card-body">
            <form action="" method="POST">
                <label for="judulbuku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judulbuku" name="judulbuku">
                <div class="form-text text-danger"><?php echo form_error('judulbuku'); ?></div>
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang">
                <div class="form-text text-danger"><?php echo form_error('pengarang'); ?></div>
                <br>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>