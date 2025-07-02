<?php
class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Buku';
        $data['buku'] = $this->buku_model->getAllDataBuku();
        $this->load->view('template/header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {

        $data['judul'] = 'Halaman form';
        $this->form_validation->set_rules('judulbuku', 'Judul buku', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('buku/form_tambah');
            $this->load->view('template/footer');
        } else {
            $this->buku_model->tambahData();
            $this->session->set_flashdata('flash', 'Di tambahkan');
            redirect('buku');
        }
    }

    public function hapus($id)
    {
        $this->buku_model->hapusDataBuku($id);
        $this->session->set_flashdata('flash', 'Di Hapus');
        redirect('buku');
    }

    public function detail($id)
    {
        $data['judul'] = "halaman detail";
        $data['buku'] = $this->buku_model->getDataById($id);
        $this->load->view('template/header', $data);
        $this->load->view('buku/detail', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Halaman Ubah';
        $data['buku'] = $this->buku_model->getDataById($id);
        $this->form_validation->set_rules('judulbuku', 'Judul buku', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('buku/form_ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->buku_model->ubahData($id);
            $this->session->set_flashdata('flash', 'Di ubah');
            redirect('buku');
        }
    }
}
