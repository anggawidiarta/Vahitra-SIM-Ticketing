<?php

    class rute_model extends CI_model{
        
    public function getRute(){
     return $this->db->get('rute')->result_array();
    }

    public function tambahRute($data){
    $this->db->insert('rute', $data);
    }

    public function hapusRute($id_rute){
    $this->db->where('id_rute', $id_rute);
    $this->db->delete('rute');
    }

    public function GetIdRute($id){

		return $this->db->get_where('rute', ['id_rute' => $id])->row_array();
	}

	public function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}
	
	public function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}

?>