<?php 

class berita_model extends CI_model {


	public function getAllBerita(){

		return $this->db->get('berita')->result_array();

	}

	public function getberitahome(){

		return $this->db->limit(3)->get('berita')->result_array();

	}

	public function getBerita($limit, $start){

		$query = $this->db->get('berita', $limit, $start);
		return $query;
	}



	public function inputberita(){


		if($_FILES['foto_berita'] = ''){} else{
			 $config['upload_path']          = './assets/img/gambar_berita/';
             $config['allowed_types']        = 'gif|jpg|png|jpeg';

             $this->load->library('upload', $config);

             if ( !$this->upload->do_upload('foto_berita'))
                {
                	
                }
             else
                {
                     $_FILES['foto_berita'] = $this->upload->data('file_name');
                }
		}


		$data= [

				'isi_berita' => $this->input->post('isi_berita'),
				'tanggal_berita' => $this->input->post('tanggal_berita'),
				'foto_berita' => $_FILES['foto_berita'],
				'judul' => $this->input->post('judul')
			];



		
		$this->db->insert('berita', $data);
	}


	public function hapusberita($id){

		$this->db->where('id_berita' , $id);
		$this->db->delete('berita');

	}

	public function GetIdBerita($id){

		return $this->db->get_where('berita', ['id_berita' => $id])->row_array();
	}

	public function updateberita(){

		$data= [

				'isi_berita' => $this->input->post('isi_berita'),
				'tanggal_berita' => $this->input->post('tanggal_berita'),
				'foto_berita' => $this->input->post('gambar'),
				'judul' => $this->input->post('judul')
			];

		$this->db->where('id_berita' , $this->input->post('id_berita'));
		$this->db->update('berita', $data);
	}
}


 ?>