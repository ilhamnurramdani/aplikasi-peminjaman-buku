<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
        $this->load->view('template/header.php', $data);
        $this->load->view('mahasiswa/index.php', $data);
        $this->load->view('template/footer.php');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman Form';
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('notelp', 'Notelp', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header.php', $data);
            $this->load->view('mahasiswa/form_tambah.php');
            $this->load->view('template/footer.php');
        } else {
            $this->mahasiswa_model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }
    public function hapus($nim)
    {
        $this->mahasiswa_model->hapusData($nim);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }

    public function detail($nim)
    {
        $data['judul'] = "Halaman detail";
        $data['mahasiswa'] = $this->mahasiswa_model->getDataByNim($nim);
        $this->load->view('template/header.php', $data);
        $this->load->view('mahasiswa/detail.php', $data);
        $this->load->view('template/footer.php');
    }
    public function ubah($nim)
    {
        $data['judul'] = 'Halaman Form';
        $data['mahasiswa'] = $this->mahasiswa_model->getDataByNim($nim);
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('notelp', 'Notelp', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header.php', $data);
            $this->load->view('mahasiswa/form_ubah.php', $data);
            $this->load->view('template/footer.php');
        } else {
            $this->mahasiswa_model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa');
        }
    }
}
