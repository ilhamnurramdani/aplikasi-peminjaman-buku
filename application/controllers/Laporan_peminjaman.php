<?php

class laporan_peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('peminjaman_model');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Laporan Peminjaman';
        $data['laporan_peminjaman'] = $this->peminjaman_model->getAllDataPeminjaman();
        $this->load->view('template/header', $data);
        $this->load->view('peminjaman/laporan_peminjaman', $data);
        $this->load->view('template/footer');
    }

    public function download_pdf($id)
    {
        $data['judul'] = 'Laporan Peminjaman';
        $data['laporan_peminjaman'] = $this->peminjaman_model->getAllDataPeminjamanById($id);
        $this->load->view('template/header', $data);
        $this->load->view('peminjaman/download_pdf', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->peminjaman_model->hapusDataPeminjamanById($id);
        $this->session->set_flashdata('flash', 'Di Hapus');
        redirect('laporan_peminjaman');
    }
}
