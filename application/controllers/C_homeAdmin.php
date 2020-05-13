<?php
class C_homeAdmin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Proper_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul'] = 'TheProper - Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('v_homeAdmin');
        $this->load->view('templates/footer');
    }

    public function showHasil(){
        $data['judul'] = 'Hasil Survei';
        $data['survei'] = $this->Proper_model->getAllSurvei();
        $this->load->view('templates/header', $data);
        $this->load->view('v_lihatHasil');
        $this->load->view('templates/footer');
    }
    public function showDetail($a){
        $data['judul'] = 'Detail Survei';
        $data['a'] = $a;
        $data['survei'] = $this->Proper_model->getSurveiById($a);
        $this->load->view('templates/header', $data);
        $this->load->view('v_detailHasil', $data);
        $this->load->view('templates/footer');
    }

    public function surveiReady(){
        $data['seq'] = 1;
        $data['judul'] = 'Proses Survei';
        $data['pic'] = 'proper01.png';
        $data['ks'] = $this->session->flashdata('ks');
        
        $this->load->view('templates/header', $data);
        $this->load->view('v_readySurveiAdmin', $data);
        $this->load->view('templates/footer');
    }

    public function loadSurveiDisplay($seq) {
        $data['seq'] = $seq;
        $data['judul'] = 'Proses Survei';
        $data['ks'] = $this->session->flashdata('ks');

        switch ($seq) {
            case 1:
                $data['pic'] = 'proper01.png';
                break;
            case 2:
                $data['pic'] = 'proper02.png';
                break;
            case 3:
                $data['pic'] = 'proper03.png';
                break;
            case 4:
                $data['pic'] = 'proper04.png';
                break;
            case 5:
                $data['pic'] = 'proper05.png';
                break;
            case 6:
                $data['pic'] = 'proper06.png';
                break;
            case 7:
                $data['pic'] = 'proper07.png';
                break;
            case 8:
                $data['pic'] = 'proper08.png';
                break;
            case 9:
                $data['pic'] = 'proper09.png';
                break;
            case 10:
                $data['pic'] = 'proper10.png';
                break;
        }

        $this->load->view('templates/header', $data);
        $this->load->view('v_readySurveiAdmin', $data);
        $this->load->view('templates/footer');
    }

    public function newSurvei(){
        $data['judul'] = 'Survei Baru';

        $this->form_validation->set_rules('koderuang', 'Kode Ruangan', 'required');
        $this->form_validation->set_rules('namaruang', 'Nama Ruangan', 'required');
        $this->form_validation->set_rules('namain', 'Nama Instansi', 'required');
        $this->form_validation->set_rules('jmlresponden', 'Jumlah Responden', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('v_newSurvei');
            $this->load->view('templates/footer');
        } else {
            $tkoderuang = $this->input->post('koderuang', true);
            $tnamaruang = $this->input->post('namaruang', true);
            $tnamainstansi = $this->input->post('namain', true);
            $tjmlresponden = $this->input->post('jmlresponden', true);
            
            $kodesurvey = preg_replace('/\s+/', '_', $tkoderuang).date(Y).date(m).date(d);

            $data = [
                'kode_ruang' => $tkoderuang,
                'kode_survei' => $kodesurvey,
                'nama_ruang' => $tnamaruang,
                'nama_instansi' => $tnamainstansi,
                'jumlah_responden' => $tjmlresponden,
                'waktu_survei' => date("d-m-Y"),
                'status' => 0
            ];
            
            $this->Proper_model->createSurvei($data);
            $this->session->set_flashdata('ks', $kodesurvey);
            redirect('C_homeAdmin/surveiReady');
        }
    }

}