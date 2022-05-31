<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
						//folder/nama file
		$this->load->view('dosen/view_lihat');
	}
	public function tambah()
	{
		$this->load->view('dosen/view_tambah');
	}
	public function ubah()
	{
		$this->load->view('dosen/view_ubah');
	}
	public function hapus()
	{
		$this->load->view('dosen/view_hapus');
	}
}