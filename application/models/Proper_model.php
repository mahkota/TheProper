<?php
class Proper_model extends CI_model{
    public function getAllSurvei(){
        return $this->db->get('survei')->result_array();
    }

    public function getSurveiById($id){
        return $this->db->get_where('survei', array('id_survei' => $id))->result_array();
    }

    public function createSurvei(){
        $kodesurvey = rand(10000, 99999);
        $rand_ok = 0;

        while ($rand_ok == 0) {
            $this->db->where('kode_survei', $kodesurvey);
            $qry = $this->db->get('survei');

            if ($qry->num_rows() > 0) {
                $kodesurvey = rand(10000, 99999);
            }
            else {
                $rand_ok = 1;
            }
        }
        
        $data = [
            'kode_ruang' => $this->input->post('koderuang', true),
            'kode_survei' => $kodesurvey,
            'nama_ruang' => $this->input->post('namaruang', true),
            'nama_instansi' => $this->input->post('namain', true)
        ];
        $this->db->insert('survei', $data);

        return $this->input->post('koderuang');
    }
}