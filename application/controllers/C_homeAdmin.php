<?php
class C_homeAdmin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Proper_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul'] = 'hai, Admin!';
        $this->load->view('templates/header', $data);
        $this->load->view('v_homeAdmin');
        $this->load->view('templates/footer');
    }

    public function showHasil(){
        $data['judul'] = 'hasil survei';
        $data['survei'] = $this->Proper_model->getAllSurvei();
        $this->load->view('templates/header', $data);
        $this->load->view('v_lihatHasil');
        $this->load->view('templates/footer');
    }
    public function showDetail($a){
        $data['judul'] = 'detail survei';
        $data['a'] = $a;
        $data['survei'] = $this->Proper_model->getSurveiById($a);
        $this->load->view('templates/header', $data);
        $this->load->view('v_detailHasil', $data);
        $this->load->view('templates/footer');
    }

    public function surveiReady($a){
        $data['judul'] = 'Mulai Survei';
        $this->load->view('templates/header', $data);
        $this->load->view('v_readySurveiAdmin', $a);
        $this->load->view('templates/footer');
    }

    public function newSurvei(){
        $data['judul'] = 'Survei Baru';
        $this->form_validation->set_rules('koderuang', 'Kode Ruangan', 'required');
        $this->form_validation->set_rules('namaruang', 'Nama Ruangan', 'required');
        $this->form_validation->set_rules('namain', 'Nama Instansi', 'required');
        if($this->form_validation->run() == FALSE){
        
        $this->load->view('templates/header', $data);
        $this->load->view('v_newSurvei');
        $this->load->view('templates/footer');
        }
        else{
            $id = $this->Proper_model->createSurvei();
            redirect('C_homeAdmin/surveiReady', $id);
        }
    }

}