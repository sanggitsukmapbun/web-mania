<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index(){
        if (!empty($this->session->userdata('id_user'))){
            $this->load->view('user/index');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function tambah($id){
        $this->load->model('mymodel');
        $data = array(
            'id_user' => $id,
            'judul' => $this->input->post('judul'),
            'album' => $this->input->post('album')
        );
        // var_dump($data);
        $query = $this->mymodel->Insert('idol',$data);
        if($query){
            echo "<script>alert('Peminjaman sukses!')</script>";
            $this->index();
        } else {
            echo "<script>alert('Peminjaman gagal!')</script>";
            $this->index();
        }
    }

    public function list($id){
        $this->load->model('mymodel');
        $where = array('id_user' => $id);
        $lagu = $this->mymodel->GetWhere('idol',$where);
        $data = array('data' => $lagu);
        $this->load->view('user/list',$data);
    }

    public function edit($id_lagu){
        $this->load->model('mymodel');
        $relawan = $this->mymodel->GetWhere('idol', array('id_lagu' => $id_lagu));
        $data = array(
            'id_lagu' => $id_lagu,
            'judul' => $relawan[0]['judul'],
            'album' => $relawan[0]['album'],
            'id_user' => $relawan[0]['id_user']
        );
        $this->load->view('user/edit_lagu',$data);
    }

    public function proses_edit($id_lagu){
        $this->load->model('mymodel');
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'judul' => $this->input->post('judul'),
            'album' => $this->input->post('album')
        );
        $where =  array(
            'id_lagu' => $id_lagu
        );
        $query = $this->mymodel->Update('idol',$data,$where);
        if($query){
            echo "<script>alert('Edit lagu sukses!')</script>";
            $this->list($this->session->userdata('id_user'));
        } else {
            echo "<script>alert('Edit lagu gagal!')</script>";
            $this->list($this->session->userdata('id_user'));
        }
    }

    public function hapus($id_lagu){
        $this->load->model('mymodel');
        $id_lagu = array(
            'id_lagu' => $id_lagu
        );
        $query = $this->mymodel->Delete('idol',$id_lagu);
        if($query){
            echo "<script>alert('Hapus lagu sukses!')</script>";
            $this->list($this->session->userdata('id_user'));
        } else {
            echo "<script>alert('Hapus lagu gagal!')</script>";
            $this->list($this->session->userdata('id_user'));
        }
    }
}