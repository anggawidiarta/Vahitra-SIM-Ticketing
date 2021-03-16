<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');

	} 

	public function index()
	{	

		$this-> form_validation-> set_rules('email', 'Email', 'required|trim');
		$this-> form_validation-> set_rules('password', 'KataSandi', 'required|trim');

		if($this->form_validation->run() == false){
			$data['judul'] = 'Halaman Login Vahitra';
			$this->load->view('template/login_header.php', $data);
			$this->load->view('Auth/login');
			$this->load->view('template/login_footer.php');
		}
		else{

			$this->_login();
		}

	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user){
			// usernya ada nggak

			// jika user aktif
			if($user['is_active'] == 1){
				// cek password
				if(password_verify($password, $user['password'])){

					$data= [

						'email' => $user['email'],
						'role_id' => $user['role_id']

					];

					$this->session->set_userdata($data);

					if($user['role_id'] == 1) {
						redirect('admin');
					}
					else{
						redirect('user');
					}
					
				}
				else{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
											  password tidak valid!
											</div>');
					redirect('auth');
				}

			}

			else{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
											  Email anda belum diaktivasi!
											</div>');
					redirect('auth');
			}

		}
		else
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
											  Email belum pernah terdaftar!
											</div>');
			redirect('auth');
		}
	}

	public function daftar()
	{

		$this-> form_validation-> set_rules('nama', 'Nama', 'required|trim');
		$this-> form_validation-> set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
				'is_unique' => 'Email ini sudah terdaftar di akun yang lain'
		]);
		$this-> form_validation-> set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password1]', [
				'matches' => 'password tidak sesuai!',
				'min_length' => 'password terlalu pendek'
		]);
		$this-> form_validation-> set_rules('password1', 'Password', 'required|trim|matches[password]');

		if($this->form_validation->run() == false){

		$data["judul"] = "Halaman Daftar Vahitra";
		$this->load->view('template/login_header.php', $data);
		$this->load->view('Auth/daftar');
		$this->load->view('template/login_footer.php');
		}
		else{
			$data= [

				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => '2',
				'is_active' => 1,
				'date_buat' => time()

			];


			$this->db->insert('user', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
											  Selamat Anda sudah Terdaftar!
											</div>');
			redirect('auth');
		}

	}

	public function logout(){

		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		
		
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
											  Anda Sudah logout!
											</div>');
		redirect('auth');
	}

} 