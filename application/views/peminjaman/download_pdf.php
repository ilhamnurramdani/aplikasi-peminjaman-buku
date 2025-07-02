<style>
    @media print {
        .col-md-2.bg-dark.pr-4.pt-4 {
            display: none;
        }

        .table {
            background-color: black;
        }
    }
</style>

<div class="col">
    <h2 class="text-center">Laporan Peminjaman</h2>
    <ul class="list-group">
        <li class="list-group-item">Nim <b><?= $laporan_peminjaman['peminjaman']['nim_mahasiswa']; ?></b></li>
        <li class="list-group-item">Nama <b><?= $laporan_peminjaman['peminjaman']['Nama_mhs']; ?></b></li>
        <li class="list-group-item">Alamat <b><?= $laporan_peminjaman['peminjaman']['Almt_mhs']; ?></b></li>
        <li class="list-group-item">No Telepon <b><?= $laporan_peminjaman['peminjaman']['Tlp_mhs']; ?></b></li>
        <li class="list-group-item">Jurusan <b><?= $laporan_peminjaman['peminjaman']['Jurusan']; ?></b></li>
        <li class="list-group-item">Tanggal Peminjaman <b><?= $laporan_peminjaman['peminjaman']['tanggal_peminjaman']; ?></b></li>
        <li class="list-group-item">Tanggal Pengembalian <b><?= $laporan_peminjaman['peminjaman']['tanggal_pengembalian']; ?></b></li>
        <li class="list-group-item">Jumlah Hari Peminjaman
            <b>
                <?= date_diff(date_create($laporan_peminjaman['peminjaman']['tanggal_peminjaman']), date_create($laporan_peminjaman['peminjaman']['tanggal_pengembalian']))->format('%a Hari'); ?>
            </b>
        </li>
    </ul>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporan_peminjaman['buku'] as $i => $bk) : ?>
                <tr>
                    <td><?= ++$i; ?></td>
                    <td><?= $bk['Judul_buku']; ?></td>
                    <td><?= $bk['Pengarang']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script>
    window.print();
</script>