<?php

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
        $this->load->model('mahasiswa_model');
        $this->load->model('peminjaman_model');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Peminjaman';
        $data['buku'] = $this->buku_model->getAllDataBuku();
        $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
        $this->load->view('template/header', $data);
        $this->load->view('peminjaman/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $id_buku = $this->input->post('id_buku', true);
        $nim_mahasiswa = $this->input->post('nim_mahasiswa', true);
        $tanggal_peminjaman = $this->input->post('tanggal_peminjaman', true);
        $tanggal_pengembalian = $this->input->post('tanggal_pengembalian', true);

        $id_peminjaman = $this->peminjaman_model->tambahData($nim_mahasiswa, $tanggal_peminjaman, $tanggal_pengembalian);

        foreach ($id_buku as $id) {
            $this->peminjaman_model->tambahDetailPeminjaman($id, $id_peminjaman);
        }
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'status' => 'success',
                'message' => 'Data Peminjaman Berhasil Ditambahkan'
            ]));
    }
}
