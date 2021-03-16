<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct(){
			parent:: __construct();
			$this->load->model('user_model');
			$this->load->model('berita_model');
			$this->load->model('pelabuhan_model');
			$this->load->model('kapal_model');
			$this->load->model('jadwal_model');
			$this->load->model('rute_model');
			$this->load->library('form_validation');
			$this->load->helper(array('form', 'url'));
			$this->load->helper('text');

		} 
	public function index(){

		$data['judul'] = 'Homepage';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		
		$data['berita'] = $this->berita_model->getberitahome();
		$data['kapal'] = $this->kapal_model->getkapalhome();
		$data['pelabuhan'] = $this->pelabuhan_model->getPelabuhan();
		$this->load->view('template/user_homepage_header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('template/user_footer');
	}

		public function jadwal(){

		$data['judul'] = 'Jadwal';
		$data['jadwal'] = $this->jadwal_model->getJadwal();
		$data['pelabuhan'] = $this->pelabuhan_model->getPelabuhan();
		$data['kelas'] = $this->jadwal_model->getkelas()->result_array();
		$top['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_header', $data);
		$this->load->view('user/jadwal', $data);
		$this->load->view('template/user_footer');
	}

	public function hubungi(){

		$data['judul'] = 'hubungi kami';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_header', $data);
		$this->load->view('user/hubungi', $data);
		$this->load->view('template/user_footer');
	}

	public function pelabuhan(){

		$data['judul'] = 'Info pelabuhan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pelabuhan'] = $this->pelabuhan_model->getPelabuhan();
		$this->load->view('template/user_header', $data);
		$this->load->view('user/pelabuhan', $data);
		$this->load->view('template/user_footer');
	}

	public function berita(){
		$config['base_url'] = site_url('user/berita');
		$config['total_rows'] = $this->db->count_all('berita');
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

		$data['berita'] = $this->berita_model->getBerita($config["per_page"], $data['page'])->result_array();
		$data['pagination'] = $this->pagination->create_links();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = '| BERITA';
		//$data['berita'] = $this->berita_model->getAllBerita();
		$this->load->view('template/user_header', $data);
		$this->load->view('user/berita', $data);
		$this->load->view('template/user_footer');
	}

	public function detailberita(){

		$data['judul'] = 'Menu Berita';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_header', $data);
		$this->load->view('user/detailberita', $data);
		$this->load->view('template/user_footer');
	}

	public function kapal(){
		$config['base_url'] = site_url('user/kapal');
		$config['total_rows'] = $this->db->count_all('kapal');
		$config['per_page'] = 6;
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
		$data['kapal'] = $this->kapal_model->getKapal($config["per_page"], $data['page'])->result_array();
		$data['pagination'] = $this->pagination->create_links();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Menu Kapal';
		$this->load->view('template/user_header', $data);
		$this->load->view('user/kapal', $data);
		$this->load->view('template/user_footer');
	}

	public function pemesanan(){

		$data['judul'] = 'Menu pemesanan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kapal'] = $this->kapal_model->getKapalaja();
		$this->load->view('template/user_header', $data);
		$this->load->view('user/pemesanan', $data);
		$this->load->view('template/user_footer');
	}

	public function profil(){

		$data['judul'] = 'Halaman Profil';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_header', $data);
		$this->load->view('user/profil', $data);
		$this->load->view('template/user_footer');
	}

	public function editprofil(){

		$data['judul'] = 'Halaman Edit Profil';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_header', $data);
		$this->load->view('user/editprofil', $data);
		$this->load->view('template/user_footer');
	}

	public function statuspesanan(){

		$data['judul'] = 'Halaman Pemesanan User';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_header', $data);
		$this->load->view('user/statuspesanan', $data);
		$this->load->view('template/user_footer');
	}

	public function pesanberhasil(){

		$data['judul'] = 'Halaman Pemesanan User berhasil!';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_header', $data);
		$this->load->view('user/pesanberhasil', $data);
		$this->load->view('template/user_footer');
	}

	public function lintasan(){

		$data['judul'] = 'Halaman Pemesanan User berhasil!';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_header', $data);
		$this->load->view('user/lintasan', $data);
		$this->load->view('template/user_footer');
	}

	public function keHalamanKonfirmasi(){
		$data['judul'] = 'Halaman Konfirmasi';

		if(isset($_GET['kode'])):
			$kode = $_GET['kode'];
			$data['no_tiket'] = $this->M_Guest->getPembayaranWhere($kode)->row();
			$data['detail'] = $this->M_Guest->cekKonfirmasi($data['no_tiket']->no_tiket)->result();
			$tiket = $this->M_Guest->getTiketWhere($data['no_tiket']->no_tiket)->row();

			$data['bagian_a'] = $this->M_Guest->getKursiWhere('a',$data['no_tiket']->no_tiket,$tiket->id_jadwal)->result();
			$data['bagian_b'] = $this->M_Guest->getKursiWhere('b',$data['no_tiket']->no_tiket,$tiket->id_jadwal)->result();
		endif;

		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/halaman_konfirmasi');
		$this->load->view('guest/template/footer');
	}


public function pesan($id){
		$data['judul'] = 'Formulir Data Diri';

		$data['info'] = $this->M_Guest->getDataInfoPesan($id)->row();
		$data['id_jadwal'] = $id;

		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/data_diri');
		$this->load->view('guest/template/footer');
	}

	public function pesanTiket(){
		$penumpang = $this->input->post('penumpang');

		// Generate No Pembayaran
		$cek = $this->M_Guest->getPembayaran()->num_rows()+1;

		$no_pembayaran = 'AC246'.$cek;
		
		$harga = $this->input->post('harga');

		$total_pembayaran = $penumpang*$harga;

		// Input Pembayaran
		$no_tiket = 'T00'.$cek;

		$data = array(
			'no_pembayaran' => $no_pembayaran,
			'no_tiket' => $no_tiket,
			'total_pembayaran' => $total_pembayaran,
			'status' => 0
		);

		$this->M_Guest->insertPembayaran($data);


		// Generate Nomor Tiket
		$cek = $this->M_Guest->getTiket()->num_rows()+1;

		

		// Input data Penumpang
		for ($i=1;$i<=$penumpang;$i++) { 
			$data = array(
				'nomor_tiket' => $no_tiket,
				'nama' => $this->input->post('nama'.$i),
				'no_identitas' => $this->input->post('identitas'.$i)
			);

			$this->M_Guest->insertPenumpang($data);
		}

		// input Data Pemesan
		$data = array(
			'nomor_tiket' => $no_tiket,
			'id_jadwal' => $this->input->post('id_jadwal'),
			'nama_pemesan' => $this->input->post('nama_pemesan'), 
			'email' => $this->input->post('email'), 
			'no_telepon' => $this->input->post('no_telp'), 
			'alamat' => $this->input->post('alamat'),
			'tanggal' => date('Y-m-d h:i:s')

		);

		$this->M_Guest->insertPemesan($data);

		$this->session->set_flashdata('nomor', $no_pembayaran);
		$this->session->set_flashdata('total', $total_pembayaran);
		redirect('pembayaran', $total_pembayaran);
		
	}

	public function keHalamanPembayaran(){
		$data['judul'] = 'Konfirmasi Pembayaran';


		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/pembayaran');
		$this->load->view('guest/template/footer');
	}

	public function cekKonfirmasi(){
		$kode = $this->input->post('kode');

		redirect("konfirmasi?kode=".$kode);

	}

	public function kirimKonfirmasi(){
		// Uploading Gambar
		$config['upload_path']          = './assets/bukti/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 2048; // 2MB

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}else{
			$data = $this->upload->data();
			$fileName = $data['file_name'];
			
			$no = $this->input->post('no_pembayaran');
			$this->M_Guest->insertBukti($fileName, $no );

			$this->session->set_flashdata("pesan","Berhasil Mengirim Bukti! Silahkan Cek Kembali 12 Jam Kemudian. Untuk Mengecek Pembayaran Anda");
			redirect("konfirmasi");
		}
	}

	public function print(){
		$data['judul'] = 'Print';

		$no_tiket = $this->input->post('no_tiket');

		$data['detail'] = $this->M_Guest->getPrint($no_tiket)->row();
		$data['jml_penumpang'] = $this->M_Guest->cekKonfirmasi($no_tiket)->num_rows();

		$this->load->view('guest/template/header', $data);
		$this->load->view('print',$data);
		$this->load->view('guest/template/footer', $data);
	}

	// public function detail($id_kapal){
	// 	$where = array('id_kapal' => $id_kapal);
	// 	$data['kapal'] = $this->kapal_model->edit_data($where,'kapal')->result();
	// }

}