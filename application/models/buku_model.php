<?php
class Buku_model extends CI_Model
{
    public function tambahData()
    {
        $data = [
            'Judul_buku' => $this->input->post('judulbuku', true),
            'Pengarang' => $this->input->post('pengarang', true),
        ];

        $this->db->insert('buku', $data);
    }

    public function getAllDataBuku()
    {
        return $this->db->get('buku')->result_array();
    }

    public function hapusDataBuku($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('buku');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('buku', ['id' => $id])->row_array();
    }

    public function ubahData($id)
    {
        $data = [
            'Judul_buku' => $this->input->post('judulbuku', true),
            'Pengarang' => $this->input->post('pengarang', true),
        ];
        $this->db->where('id', $id);
        $this->db->update('buku', $data);
    }
}
