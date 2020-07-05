<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}
	
	// Daftar
	public function daftar(){
		$this->load->view('daftar');
	}

	public function proses_daftar(){
		$this->load->model('mymodel');
		$data = array (
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		$query = $this->mymodel->Insert('user', $data);
		if($query){
			echo "<script>alert('Pendaftaran Sukses!')</script>";
			$this->daftar();
		} else {
			echo "<script>alert('Pendaftaran Gagal!')</script>";
			$this->daftar();
		}
	}
	// Daftar end

	// Login
	public function login(){
		$this->load->view('login');
	}

	public function proses_login(){
		$this->load->model('mymodel');
		$where = array(
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		$cek = $this->mymodel->GetWhere('user', $where);
		$count_cek = count($cek);
		if($count_cek > 0){
			$anggota = $this->mymodel->GetWhere('user', array('email' => $this->input->post('email')));
			$data_session = array(
				'id_user' => $anggota[0]['id_user'],
				'nama' => $anggota[0]['nama']
			);
			$this->session->set_userdata($data_session);
			echo "<script>alert('Login sukses')</script>";
			redirect(base_url("index.php/dashboard"));
		} else {
			echo "<script>alert('Login gagal!')</script>";
			$this->login();
		}
	}
}
