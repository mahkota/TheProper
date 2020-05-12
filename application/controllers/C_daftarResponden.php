<?php
class C_daftarResponden extends CI_Controller{
    public function index(){
        $data['judul'] = 'hai, Responden!';
        $this->load->view('templates/header', $data);
        $this->load->view('v_homeResponden');
        $this->load->view('templates/footer');
    }

    public function daftar(){
        $data['judul'] = 'Penilaian';
        $this->load->view('templates/header', $data);
        $this->load->view('v_nilai');
        $this->load->view('templates/footer');
    }
}