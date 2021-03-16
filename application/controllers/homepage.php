<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller
{

	public function index(){

		$data['judul'] = 'Homepage';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_nologin_header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('template/user_footer');
	}

		public function jadwal(){

		$data['judul'] = 'Jadwal';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/user_header', $data);
		$this->load->view('user/jadwal', $data);
		$this->load->view('template/user_footer');
	}

}