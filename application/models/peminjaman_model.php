<?php
class Peminjaman_model extends CI_Model
{

    public function tambahData($nim_mahasiswa, $tanggal_peminjaman, $tanggal_pengembalian)
    {
        $data = [
            'nim_mahasiswa' => $nim_mahasiswa,
            'tanggal_peminjaman' => $tanggal_peminjaman,
            'tanggal_pengembalian' => $tanggal_pengembalian,
        ];
        $this->db->insert('peminjaman', $data);
        $this->db->trans_complete();
        return $this->db->insert_id(); // untuk mendapatkan id yang sudah di insert
    }

    public function tambahDetailPeminjaman($id_buku, $id_peminjaman)
    {
        $data = [
            'id_buku' => $id_buku,
            'id_peminjaman' => $id_peminjaman
        ];
        $this->db->insert('detail_peminjaman', $data);
    }

    public function getAllDataPeminjaman()
    {
        return $this->db
            ->select('*')
            ->from('peminjaman')
            ->join('mahasiswa', 'peminjaman.nim_mahasiswa = mahasiswa.Nim_mhs')
            ->get()
            ->result_array();
    }

    public function getAllDataPeminjamanById($id)
    {
        $data['peminjaman'] = $this->db
            ->select('*')
            ->from('peminjaman')
            ->join('mahasiswa', 'peminjaman.nim_mahasiswa = mahasiswa.Nim_mhs')
            ->where('peminjaman.id_peminjaman', $id)
            ->get()
            ->row_array();

        $data['buku'] = $this->db
            ->select('buku.Judul_buku, buku.Pengarang')
            ->from('peminjaman')
            ->join('detail_peminjaman', 'peminjaman.id_peminjaman = detail_peminjaman.id_peminjaman')
            ->join('buku', 'buku.id = detail_peminjaman.id_buku')
            ->where('peminjaman.id_peminjaman', $id)
            ->get()
            ->result_array();

        return $data;
    }

    public function hapusDataPeminjamanById($id)
    {
        $this->db->delete('peminjaman', [
            'id_peminjaman' => $id
        ]);
        $this->db->delete('detail_peminjaman', [
            'id_peminjaman' => $id
        ]);
    }
}
