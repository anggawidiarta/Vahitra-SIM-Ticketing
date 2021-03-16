<?php 

class pembayaran_model extends CI_model {


public function getKonfirmasiPembayaran(){
		$where = array(
			'status'	=> 1
		);
		return $this->db->get_where('pembayaran', $where);
}

public function updatePembayaran($id){
		$data = array(
			'status'	=> 2
		);
		$this->db->where('id', $id);
		return $this->db->update('pembayaran', $data);
}

public function prosesBerangkat($id){
		$data = array(
			'status'	=> 1
		);
		$this->db->where('id', $id);
		return $this->db->update('jadwal', $data);
	}	
}