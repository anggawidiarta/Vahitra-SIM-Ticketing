<?php
class pelabuhan_model extends CI_model{

    public function getPelabuhan(){
        return $this->db->get('pelabuhan')->result_array();
    }

    public function tambahPelabuhan($data){
        $this->db->insert('pelabuhan', $data);
        
    }

    public function hapusPelabuhan($no_pelabuhan){
    $this->db->where('no_pelabuhan', $no_pelabuhan);
    $this->db->delete('pelabuhan');    
    }



}
?>