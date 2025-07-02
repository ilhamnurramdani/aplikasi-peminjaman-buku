<div class="col-md-9 mt-4">
    <h3><i class="fa-solid fa-graduation-cap"></i> buku</h3>
    <hr>
    <div class="card mt-4">
        <h5 class="card-header">Data Detail buku</h5>
        <div class="card-body">
            <h5 class="card-title"><?php echo $buku['id']; ?></h5>
            <h6 class="card-subtitle mb-2"><?php echo $buku['Judul_buku']; ?></h6>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $buku['Pengarang']; ?></h6>
            <a href="<?php echo base_url('buku') ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>