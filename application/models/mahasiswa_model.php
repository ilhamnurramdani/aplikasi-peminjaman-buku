<?php
class Mahasiswa_model extends CI_Model
{

    public function tambahData()
    {
        $data = [
            'Nim_mhs' => $this->input->post('nim', true),
            'Nama_mhs' => $this->input->post('nama', true),
            'Almt_mhs' => $this->input->post('alamat', true),
            'Tlp_mhs' => $this->input->post('notelp', true),
            'Jurusan' => $this->input->post('jurusan', true),
        ];
        $this->db->insert('mahasiswa', $data);
    }
    public function getAllMahasiswa()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }
    public function hapusData($nim)
    {
        $this->db->where('Nim_mhs', $nim);
        $this->db->delete('mahasiswa');
    }
    public function getDataByNim($nim)
    {
        return $this->db->get_where('mahasiswa', ['Nim_mhs' =>  $nim])->row_array();
    }

    public function ubahData()
    {
        $data = [
            'Nim_mhs' => $this->input->post('nim', true),
            'Nama_mhs' => $this->input->post('nama', true),
            'Almt_mhs' => $this->input->post('alamat', true),
            'Tlp_mhs' => $this->input->post('notelp', true),
            'Jurusan' => $this->input->post('jurusan', true),
        ];
        $this->db->where('Nim_mhs', $this->input->post('nim'));
        $this->db->update('mahasiswa', $data);
    }
}
