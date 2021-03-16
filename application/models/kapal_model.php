<?php 

class kapal_model extends CI_model{
    
	public function getAllKapal(){

		return $this->db->get('kapal')->result_array();

		}

		public function getKapalaja(){

			return $this->db->get('kapal');
	
			}
			
	public function getkapalhome(){

			return $this->db->limit(8)->get('kapal')->result_array();
	
		}

		public function getKapal($limit, $start){

		$query = $this->db->get('kapal', $limit, $start);
		return $query;
			}

	public function tambah_kapal($data){

		$this->db->insert('kapal', $data);

	}

	public function hapus_kapal($id_kapal){

		$this->db->where('id_kapal', $id_kapal);

		$this->db->delete('kapal');
    }

    public function GetIdkapal($id){

		return $this->db->get_where('kapal', ['id_kapal' => $id])->row_array();
	}

	public function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}
	
	public function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    public function detail_data($id_kapal = null){
		$query = $this->db->get_where('kapal', array('id_kapal' =>
		$id_kapal))->row();
		return $query;
	}
}

?>