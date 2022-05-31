<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		//array data -> nim yg isinya : 12345 (int)
		//array data -> nama yg isinya : LADY (string)
		$var['nim'] = 12345;
		$var['nama'] = 'LADY';
		$this->load->view('mahasiswa/view_lihat', $var);
	}
	public function tambah()
	{
		$this->load->view('mahasiswa/view_tambah');
	}
	public function ubah()
	{
		$this->load->view('mahasiswa/view_ubah');
	}
	public function hapus()
	{
		$this->load->view('mahasiswa/view_hapus');
	}
}