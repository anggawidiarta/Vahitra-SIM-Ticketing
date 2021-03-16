<?php

class jadwal_model extends CI_model{

    public function getJadwal(){
        return $this->db->get('jadwal')->result_array();
    }

    public function getidjadwal($id){

        return $this->db->get_where('jadwal', ['id_jadwal' => $id])->row_array();

    }

    public function getkelas(){
        return $this->db->get('kelas');
    }

    public function tambahJadwal($data){
        $this->db->insert('jadwal', $data);
    }

    public function hapusJadwal($id_jadwal){
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->delete('jadwal');
    }

    public function editjadwal($data){
        $this->db->where('id_jadwal', $this->input->post('id_jadwal'));
        return $this->db->update('jadwal', $data);
    }

   
}
?>