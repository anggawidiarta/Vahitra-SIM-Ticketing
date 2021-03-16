<?php 

class user_model extends CI_model {


	public function getAllUser(){

		return $this->db->get('user')->result_array();

	}


	public function hapus($id){

		$this->db->where('id' , $id);
		$this->db->delete('user');

	}

	public function getpelabuhan(){
		return $this->db->get('pelabuhan');
	}

	public function GetIdUser($id){

		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function updateuser($id){

		$data= [

				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => '2',
				'is_active' => 1,
				'date_buat' => time()

			];

		$this->db->where('id' , $this->input->post('id'));
		$this->db->update('user', $data);
	}

	public function getDataInfoPesan($id){
		$this->db->select('jadwal.*, Asal.nama_stasiun AS ASAL, Tujuan.nama_stasiun As TUJUAN');
		$this->db->where('jadwal.id', $id);
		$this->db->join('stasiun as Asal','jadwal.asal = Asal.id', 'left');
		$this->db->join('stasiun as Tujuan','jadwal.tujuan = Tujuan.id', 'left');
		return $this->db->get('jadwal');
	}

	public function getTiket(){
		return $this->db->get('tiket');
	}

	public function insertPenumpang($data){
		return $this->db->insert('penumpang', $data);
	}

	public function insertPemesan($data){
		return $this->db->insert('tiket', $data);
	}

	public function insertPembayaran($data){
		return $this->db->insert('pembayaran', $data);
	}

	public function getPembayaran(){
		return $this->db->get('pembayaran');
	}

	public function getPembayaranWhere($kode){
		$this->db->where('no_pembayaran', $kode);
		return $this->db->get("pembayaran");
	}

	public function cekKonfirmasi($nomor){
		$this->db->where('nomor_tiket', $nomor);
		return $this->db->get('penumpang');
	}

	public function insertBukti($nama, $no){
		$data = array(
			'bukti'		=> $nama,
			'status'	=> 1
		);
		$this->db->where('no_pembayaran', $no);
		return $this->db->update("pembayaran", $data);
	}

	public function getTiketWhere($tiket){
		return $this->db->get_where('tiket', array('nomor_tiket' => $tiket));
	}

	public function getPrint($no_tiket){
		$this->db->select('*, Asal.nama_stasiun AS ASAL, Tujuan.nama_stasiun As TUJUAN');
		$this->db->join('jadwal','jadwal.id=tiket.id_jadwal');
		$this->db->join('stasiun as Asal','jadwal.asal = Asal.id', 'left');
		$this->db->join('stasiun as Tujuan','jadwal.tujuan = Tujuan.id', 'left');
		$this->db->where('nomor_tiket', $no_tiket);
		return $this->db->get('tiket');
	}

}


 ?>