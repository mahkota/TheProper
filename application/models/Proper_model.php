<?php
class Proper_model extends CI_model{
    public function getAllSurvei(){
        return $this->db->get('survei')->result_array();
    }

    public function getSurveiById($id){
        return $this->db->get_where('survei', array('id_survei' => $id))->result_array();
    }

    public function createSurvei(){
        $data = [
            'kode_ruang' => $this->input->post('koderuang', true),
            'nama_ruang' => $this->input->post('namaruang', true),
            'nama_instansi' => $this->input->post('namain', true)
        ];
        $this->db->insert('survei', $data);

        return $this->input->post('koderuang');
    }
}