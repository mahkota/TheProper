<?php
class Proper_model extends CI_model{
    public function getAllSurvei(){
        return $this->db->get('survei')->result_array();
    }

    public function getSurveiById($id){
        return $this->db->get_where('survei', array('id_survei' => $id))->result_array();
    }

    public function createSurvei($data){
        $this->db->insert('survei', $data);
    }
}