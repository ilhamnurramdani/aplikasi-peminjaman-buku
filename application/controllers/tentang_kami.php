<?php
class Tentang_kami extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Halaman About';
        $this->load->view('template/header.php', $data);
        $this->load->view('tentang_kami/index.php');
        $this->load->view('template/footer.php');
    }
}
