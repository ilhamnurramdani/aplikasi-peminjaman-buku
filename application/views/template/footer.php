</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/dataTables.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>

<script>
    $('.data-table').dataTable();
</script>
<?php if ($this->uri->segment(1) == 'peminjaman') : ?>
    <script>
        $('.tambah-data-buku').on('click', function() {
            const judul = $(this).data('judul');
            const pengarang = $(this).data('pengarang');
            const id = $(this).data('id')
            this.parentElement.parentElement.remove();
            $('tbody.data-buku').append(`
                <tr>
                    <td>${judul}</td>
                    <td>${pengarang}</td>
                    <td>
                        <button class="btn btn-danger" data-judul="${judul}" data-pengarang="${pengarang}" data-id=${id}><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            `);
            alert('Data Buku Berhasil Berhasil Ditambahkan');
        });

        function appendDataBuku(element) {
            const judul = element.data('judul');
            const pengarang = element.data('pengarang');
            $('#data-buku').append(`
                <tr>
                    <td>${judul}</td>
                    <td>${pengarang}</td>
                    <td>
                        <button class="btn btn-primary tambah-data-buku" data-judul="${judul}" data-pengarang="${pengarang}">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </td>
                </tr>
            `);
        }
        $('tbody').on('click', function(e) {
            if (e.target.classList.value === 'btn btn-danger') {
                e.target.parentElement.parentElement.remove();
                appendDataBuku(e.target);
            } else if (e.target.classList.value === 'fa-solid fa-trash') {
                e.target.parentElement.parentElement.parentElement.remove();
                appendDataBuku(e.target);
            }
        });
        $('.pilih-mahasiswa').on('click', function() {
            const nim = $(this).data('nim');
            const nama = $(this).data('nama');
            const alamat = $(this).data('alamat');
            const no_telepon = $(this).data('no_telepon');
            const jurusan = $(this).data('jurusan');

            $('.list-group').html(`
                <li class="list-group-item" data-nim="${nim}">Nim: <b>${nim}</b></li>
                <li class="list-group-item">Nama: <b>${nama}</b></li>
                <li class="list-group-item">Alamat: <b>${alamat}</b></li>
                <li class="list-group-item">No Telepon: <b>${no_telepon}</b></li>
                <li class="list-group-item">Jurusan: <b>${jurusan}</b></li>
            `);
            alert('Data Berhasil Dipilih');
            $('#show-form').removeClass('d-none');
        });

        $('#simpan-data-buku-mahasiswa').on('click', function() {
            const tanggalPeminjaman = new Date().toISOString().slice(0, 10);
            const tanggalPengenmbalian = $('#tanggal_pengembalian').val();

            if (tanggalPeminjaman < tanggalPengenmbalian) {
                const id = [];
                $('.btn.btn-danger').map(function(i, button) {
                    id.push(button.dataset.id);
                });
                if (id.length == 0) {
                    alert('Tambah Data Buku Terlebih Dahulu');
                }
                const nim = $('.list-group .list-group-item[data-nim]').data('nim');
                $.ajax({
                    url: '<?= base_url('/peminjaman/tambah') ?>',
                    method: 'POST',
                    data: {
                        id_buku: id,
                        nim_mahasiswa: nim,
                        tanggal_peminjaman: tanggalPeminjaman,
                        tanggal_pengembalian: tanggalPengenmbalian
                    },
                    success: function(data) {
                        alert(data.message);
                        location.reload();
                    }
                });
            } else {
                alert('Tanggal Pengembalian Tidak Valid!');
            }
        });
    </script>
<?php endif; ?>
</body>

</html>