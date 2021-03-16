<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

		public function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
		$this->load->model('berita_model');
		$this->load->model('pelabuhan_model');
		$this->load->model('kapal_model');
		$this->load->model('jadwal_model');
		$this->load->model('rute_model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));

	} 
	public function index(){

		$data['judul'] = 'Dashboard Admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('template/admin_footer');
	}

	public function kelolauser(){

		$data['judul'] = 'Kelola user';
		
		
		$data['user'] = $this->user_model->getAllUser();
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/kelolauser', $data);
		$this->load->view('template/admin_footer');

	}

	public function hapususer($id){

		$data['user'] = $this->user_model->hapus($id);
		$this->session->set_flashdata('flash', 'dihapus');

		$this->session->set_flashdata('hapus', '<div class="alert alert-success" role="alert">
											  Data Berhasil Dihapus!
											</div>');
		redirect('admin/kelolauser'); 
	}


	public function updateuser($id)
	{	

		$data['judul'] = 'update user';
		$data['user'] = $this->user_model->GetIdUser($id);

		$this-> form_validation-> set_rules('nama', 'Nama', 'required|trim');
		$this-> form_validation-> set_rules('email', 'Email', 'required|trim|valid_email');
		$this-> form_validation-> set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password1]', [
				'matches' => 'password tidak sesuai!',
				'min_length' => 'password terlalu pendek'
		]);
		$this-> form_validation-> set_rules('password1', 'Password', 'required|trim|matches[password]');

		if($this->form_validation->run() == false){

		$data["judul"] = "Halaman update user Vahitra";
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/updateuser', $data);
		$this->load->view('template/admin_footer');


		$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
											  Data Gagal Diubah!
											</div>');

		}

		else{
			
			$this->user_model->updateuser($id);
			$this->session->set_flashdata('ubah', '<div class="alert alert-success" role="alert">
											  Data Berhasil Diubah!
											</div>');

			redirect('admin/kelolauser'); 

		}

	}


	public function berita(){

		$data['judul'] = 'Kelola berita';
		
		
		$data['berita'] = $this->berita_model->getAllBerita();
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/berita', $data);
		$this->load->view('template/admin_footer');

	}

	public function inputberita()
	{

		$this-> form_validation-> set_rules('tanggal_berita', 'Tanggal', 'required|trim');

		if($this->form_validation->run() == false){

		$data["judul"] = "Halaman tambah Berita Vahitra";
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/inputberita', $data);
		$this->load->view('template/admin_footer');

		$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
											  Berita tidak dapat dipublish!
											</div>');

		}

		else{
			

			$data['berita'] = $this->berita_model->inputberita();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
											  Berita Sudah Dipublish!
											</div>');
			redirect('admin/berita');
		}

	}


    public function hapusberita($id){

		$data['berita'] = $this->berita_model->hapusberita($id);
		$this->session->set_flashdata('flash', 'dihapus');

		$this->session->set_flashdata('hapus', '<div class="alert alert-success" role="alert">
											  Data Berhasil Dihapus!
											</div>');
		redirect('admin/berita'); 
	}


	public function editberita($id)
	{
		$data["judul"] = "Edit Berita Vahitra";
		$data["berita"] = $this->berita_model->GetIdBerita($id);
		$this-> form_validation-> set_rules('tanggal_berita', 'Tanggal', 'required|trim');

		if($this->form_validation->run() == false){

		
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/editberita', $data);
		$this->load->view('template/admin_footer');
		}
		else{


			$this->berita_model->updateberita($id);
			$this->session->set_flashdata('ubah', '<div class="alert alert-success" role="alert">
											  Berita Berhasil Diupdate!
											</div>');

			redirect('admin/berita'); 
		}

	}


	public function kapal(){
		$config['base_url'] = site_url('admin/kapal');
		$config['total_rows'] = $this->db->count_all('kapal');
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<div class="pagging 
		text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_cose'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close'] = '<span aria-hidden="true">&raquo</span></span></li>';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close'] = '</span>Next</li>';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['judul'] = 'Kapal';

		$data['kapal'] = $this->kapal_model->getKapal($config["per_page"], $data['page'])->result();
		$data['pagination'] = $this->pagination->create_links();
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/kapal', $data);
		$this->load->view('template/admin_footer');
	}
	//Untuk Menambah Data Kapal
	public function tambahkapal(){
		
            $nama      		= $this->input->post('nama');
            $perusahaan 	= $this->input->post('perusahaan');
            $nahkoda		= $this->input->post('nahkoda');
			$date_masuk  	= $this->input->post('date_masuk');
			// $judul			= $this->input->post('file_name');
			$foto 			= $_FILES['foto'];
			 if($foto=''){}else{ 
			 	$config['upload_path'] = './assets/foto';
			 	$config['allowed_types'] = 'jpg|png|gif|jpeg';
			 	$this->upload->initialize($config);
			 	if(!$this->upload->do_upload('foto')){
			 		echo "Upload Gagal"; die();
			 	}
			 	else{
			 		$foto = $this->upload->data('file_name');
			 	}
			 }
		$data = array(
			'nama' =>$nama,
			'perusahaan' =>$perusahaan,
			'nahkoda' =>$nahkoda,
			'date_masuk' =>$date_masuk,
			'foto' 		=>$foto
		);
        $this->kapal_model->tambah_kapal($data, 'kapal');
        redirect('admin/kapal');
	}

	public function hapuskapal($id_kapal){

		$data['kapal'] = $this->kapal_model->hapus_kapal($id_kapal);
		$this->session->set_flashdata('flash', 'dihapus');

		$this->session->set_flashdata('hapus_kapal', '<div class="alert alert-success" role="alert">
											  Data Berhasil Dihapus!
											</div>');
		redirect('admin/kapal'); 
	}

	public function editkapal($id_kapal){
		$data['judul'] = "Halaman update kapal Vahitra";
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$where = array('id_kapal' => $id_kapal);
		$data['kapal'] = $this->kapal_model->edit_data($where,'kapal')->result();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/editkapal', $data);
		$this->load->view('template/admin_footer');
	}

	public function updatekapal(){
		$id_kapal = $this->input->post('id_kapal');
		$nama = $this->input->post('nama');
		$perusahaan = $this->input->post('perusahaan');
		$date_masuk = $this->input->post('date_masuk');
		$nahkoda = $this->input->post('nahkoda');
		
		$data = array(
			'nama' => $nama,
			'perusahaan' => $perusahaan,
			'date_masuk' => $date_masuk,
			'nahkoda' => $nahkoda,
		);
		$where = array(
			'id_kapal' => $id_kapal
		);
		$this->kapal_model->update_data($where,$data,'kapal');
		redirect('admin/kapal'); 
	}

	//Jadwal
	public function jadwal(){
		$data['judul'] = 'Jadwal';
		$data['jadwal'] = $this->jadwal_model->getJadwal();
		$data['pelabuhan'] = $this->pelabuhan_model->getPelabuhan();
		$data['kelas'] = $this->jadwal_model->getkelas()->result_array();
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/jadwal', $data);
		$this->load->view('template/admin_footer');
	}

	public function tambahjadwal(){

		$data['pelabuhan'] = $this->pelabuhan_model->getPelabuhan();
		$data['kelas'] = $this->jadwal_model->getkelas()->result_array();
		$hari = $this->input->post('hari');
		$hari = date('Y-m-d', strtotime($hari));
		$kapal = $this->input->post('Nama_kapal');
		$waktu = $this->input->post('waktu');
		$asal = $this->input->post('asal');
		$tujuan = $this->input->post('tujuan');
		$harga = $this->input->post('harga');

	$data = array(
		'Nama_kapal' => $kapal,
		'hari' => $hari,
		'waktu' => $waktu,
		'asal' => $asal,
		'tujuan' => $tujuan,
		'harga' => $harga
		);
		$this->jadwal_model->tambahJadwal($data, 'jadwal');
		redirect('admin/jadwal');

	}

	public function hapusjadwal($id_jadwal){
		$data['jadwal'] = $this->jadwal_model->hapusJadwal($id_jadwal);
		$this->session->set_flashdata('flash', 'dihapus');

		$this->session->set_flashdata('hapusJadwal', '<div class="alert alert-success" role="alert">
											  Data Berhasil Dihapus!
											</div>');
		redirect('admin/jadwal'); 

	}

	public function editjadwal($id){



		$hari = $this->input->post('hari');
		$hari = date('Y-m-d', strtotime($hari));
		$kapal = $this->input->post('Nama_kapal');
		$waktu = $this->input->post('waktu');
		$asal = $this->input->post('asal');
		$tujuan = $this->input->post('tujuan');
		$harga = $this->input->post('harga');


		$data = array(
			'Nama_kapal' => $kapal,
			'hari' => $hari,
			'waktu' => $waktu,
			'asal' => $asal,
			'tujuan' => $tujuan,
			'harga' => $harga
			);

		$this-> form_validation-> set_rules('Nama_kapal', 'kapal', 'required|trim');

		if($this->form_validation->run() == false){


		$data["judul"] = "Halaman update jadwal Vahitra";
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['jadwal']= $this->jadwal_model->getidjadwal($id);
		$data['kelas'] = $this->jadwal_model->getkelas()->result_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/editjadwal', $data);
		$this->load->view('template/admin_footer');
	}

		else{
			$this->jadwal_model->editjadwal($data);
			redirect('admin/jadwal'); 
		}

		
		
	}
//Pelabuhan
	public function pelabuhan(){
		$data['judul'] = 'Pelabuhan';
		$data['pelabuhan'] = $this->pelabuhan_model->getPelabuhan();
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/pelabuhan', $data);
		$this->load->view('template/admin_footer');
	}

	public function tambahpelabuhan(){
		$nama_pelabuhan = $this->input->post('nama_pelabuhan');
		$letak			= $this->input->post('letak');

	$data = array(
		'nama_pelabuhan'=> $nama_pelabuhan,
		'letak'			=> $letak,
	);
	$this->pelabuhan_model->tambahPelabuhan($data, 'pelabuhan');
	redirect('admin/pelabuhan');
	}

	public function hapusPelabuhan($no_pelabuhan){
		$data['pelabuhan'] = $this->pelabuhan_model->hapusPelabuhan($no_pelabuhan);
		$this->session->set_flashdata('flash', 'dihapus');
		$this->session->set_flashdata('hapusPelabuhan', '<div class="alert alert-success" role="alert">
											  Data Berhasil Dihapus!
											</div>');
		redirect('admin/pelabuhan');
	}

//Rute
	public function rute(){
		$data['judul'] = 'Rute';
		$data['rute'] = $this->rute_model->getRute();
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/rute', $data);
		$this->load->view('template/admin_footer');
	}

	public function tambahrute(){
		$asal_tujuan = $this->input->post('asal_tujuan');

		$data = array(
		'asal_tujuan' => $asal_tujuan
		);
		
		$this->rute_model->tambahRute($data, 'rute');
		redirect('admin/rute');	
	}

	public function editrute($id_rute){
		$data['judul'] = "Halaman Update Rute";
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$where = array('id_rute' => $id_rute);
		$data['rute'] = $this->rute_model->edit_data($where,'rute')->result();
		$this->load->view('template/admin_header', $data);
		$this->load->view('template/admin_sidebar', $data);
		$this->load->view('template/admin_topbar', $top);
		$this->load->view('admin/editrute', $data);
		$this->load->view('template/admin_footer');
	}

	public function updaterute(){
		$id_rute = $this->input->post('id_rute');
		$asal_tujuan = $this->input->post('asal_tujuan');
		
		$data = array(
			'asal_tujuan' => $asal_tujuan
		);
		$where = array(
			'id_rute' => $id_rute
		);
		$this->rute_model->update_data($where,$data,'rute');
		redirect('admin/rute'); 
	}

	public function hapusrute($id_rute){
		$data['rute'] = $this->rute_model->hapusRute($id_rute);
		$this->session->set_flashdata('flash', 'dihapus');
		$this->session->set_flashdata('hapusRute', '<div class="alert alert-success" role="alert">
											  Data Berhasil Dihapus!
											</div>');
		redirect('admin/rute');		
	}


	public function keHalamanKonfirPem(){
		$data['list']	= $this->M_Admin->getKonfirmasiPembayaran()->result();

		$this->load->view('admin/konfirmasi_pembayaran', $data);
	}

	public function verifikasiPembayaran($id){
		$update = $this->M_Admin->updatePembayaran($id);

		if($update){
			$this->session->set_flashdata('pesan','Berhasil Melakukan Verifikasi!');
			redirect('admin/konfirmasi-pembayaran');
		}else{
			echo "gagal";
		}
	}

	public function prosesBerangkat($id){
		$update = $this->M_Admin->prosesBerangkat($id);

		if($update){
			$this->session->set_flashdata('pesan','Berhasil Mengubah Status Jadwal');
			redirect('admin/dashboard/kelola-jadwal');
		}else{
			echo "Gagal";
		}
	}




	

	

}