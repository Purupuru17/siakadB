<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->model('mhs_model'); //LOAD MODEL di CONTROLLER

		$where['jk_mhs'] = 'Laki-Laki';
		$where['prodi'] = 'PGSD';

		$var['data_mhs'] = $this->mhs_model->select(); //PANGGIL FUNGSI

		$this->load->view('mahasiswa/view_lihat', $var) ; //KIRIM DATA ke VIEW
	}
	public function tambah()
	{
		$this->load->view('mahasiswa/view_tambah');
	}
	public function ubah($id)
	{	
		$this->load->model('mhs_model'); //LOAD MODEL di CONTROLLER

		$var['data_mhs'] = $this->mhs_model->selectId($id); //PANGGIL FUNGSI

		$this->load->view('mahasiswa/view_ubah', $var);
	}
	public function hapus()
	{
		$this->load->view('mahasiswa/view_hapus');
	}
}