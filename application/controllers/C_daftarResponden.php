<?php
class C_daftarResponden extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Proper_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul'] = 'Laman Responden';
        $this->form_validation->set_rules('kodeunik', 'Kode Survei', 'required');
        $this->form_validation->set_rules('kodeunik', 'Kode Unik', 'required');
        $this->form_validation->set_rules('namares', 'Nama Responden', 'required');
        
        $kode = $this->input->post('kodeunik');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('v_homeResponden');
            $this->load->view('templates/footer');
        }
        else{
            $this->session->set_userdata('kodesur', $this->input->post('kodeunik'));
            $this->session->set_userdata('namaresponden', $this->input->post('namares'));
            $this->session->set_userdata('count', 0);
            $this->session->set_userdata('total', 0);
            $datas = $this->Proper_model->loginSurvei($kode);
            
            if($datas == FALSE){
                redirect(site_url('C_daftarResponden'));
            }
            else{
                $dat['judul'] = 'penilaian';
                $dat['kode'] = $kode;
                $this->load->view('templates/header', $dat);
                $this->load->view('v_nilai', $dat);
                $this->load->view('templates/footer');
            }
        }
    }

    public function penilaian($nilai){
        $data['judul'] = 'Proses Penilaian';
        $dat = $this->Proper_model->uploadNilai($nilai);
        $this->load->view('templates/header', $data);
        $this->load->view('v_nilai');
        $this->load->view('templates/footer');
    }

    public function selesaiNilai(){
        redirect('C_daftarResponden/index');
    }
}