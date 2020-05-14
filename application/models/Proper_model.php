<?php
class Proper_model extends CI_model {
    public function getAllSurvei(){
        return $this->db->get('survei')->result_array();
    }

    public function getSurveiById($id) {
        return $this->db->get_where('survei', array('id_survei' => $id))->result_array();
    }

    public function updateSurveiStatus($id, $curr_resp) {
        $data = $this->db->get_where('survei', array('id_survei' => $id))->result_array();

        if ($curr_resp >= $data[0]['jumlah_responden']) {
            $this->db->where('id_survei', $id);
            $this->db->update('survei', array('status' => 1));
        }
    }

    public function createSurvei($data) {
        $this->db->insert('survei', $data);
    }

    public function loginSurvei($a) {
        $this->db->where('kode_survei', $a);
        $query = $this->db->get('survei');
        $baris = $query->num_rows();

        if ($baris > 0) {
            $data = [
                'kode' => $this->session->userdata('kodesur'),
                'nama' => $this->session->userdata('namaresponden'),
                'nilai1' => 0,
                'nilai2' => 0,
                'nilai3' => 0,
                'nilai4' => 0,
                'nilai5' => 0,
                'nilai6' => 0,
                'nilai7' => 0,
                'nilai8' => 0,
                'nilai9' => 0,
                'nilai10' => 0
            ];
            
            $this->db->insert('responden', $data);
            return TRUE; 
        }
        else {
            return FALSE;
        }
    }

    public function uploadNilai($nilai){
        if($this->session->userdata('count') == 1){
            $this->db->set('nilai1', 'nilai1 + ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
        elseif($this->session->userdata('count') == 2){
            $this->db->set('nilai2', 'nilai2 + ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
        elseif($this->session->userdata('count') == 3){
            $this->db->set('nilai3', 'nilai3 + ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
        elseif($this->session->userdata('count') == 4){
            $this->db->set('nilai4', 'nilai4 + ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
        elseif($this->session->userdata('count') == 5){
            $this->db->set('nilai5', 'nilai5 + ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
        elseif($this->session->userdata('count') == 6){
            $this->db->set('nilai6', 'nilai6 + ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
        elseif($this->session->userdata('count') == 7){
            $this->db->set('nilai7', 'nilai7 + ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
        elseif($this->session->userdata('count') == 8){
            $this->db->set('nilai8', 'nilai8 + ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
        elseif($this->session->userdata('count') == 9){
            $this->db->set('nilai9', 'nilai9+ ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
        elseif($this->session->userdata('count') == 10){
            $this->db->set('nilai10', 'nilai10 + ' . $nilai, FALSE);
            $this->db->where('kode', $this->session->userdata('kodesur'));
            $this->db->where('nama', $this->session->userdata('namaresponden'));
            $this->db->update('responden');
        }
    }

    public function getResponseByKodeSurvei($kd) {
        return $this->db->get_where('responden', array('kode' => $kd))->result_array();
    }
}