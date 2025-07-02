<?php

class Home extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $this->load->view('template/header.php', $data);
        $this->load->view('home/index.php');
        $this->load->view('template/footer.php');
    }
}
