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
	public function tambah_aksi()
	{
		//simpan ke database
		$input = $this->input->post(); //ambil input dengan method POST dari View
		//print_r($input);
		//exit();
		//database        //view
		$data['nim'] = $input['nim'];
		$data['nama_mhs'] = $input['nama'];
		$data['prodi'] = 'PTI';
		$data['jk_mhs'] = null;
		$data['agama_mhs'] = null;

		$this->load->model('mhs_model');
		$insert = $this->mhs_model->insert($data); //kirim data ke mhs_model
		if($insert){
			redirect('mahasiswa'); //kalau berhasil
		}else{
			redirect('mahasiswa/tambah'); //kalau gagal
		}
	}
	public function ubah($id)
	{	
		$this->load->model('mhs_model'); //LOAD MODEL di CONTROLLER

		$var['data_mhs'] = $this->mhs_model->selectId($id); //PANGGIL FUNGSI

		$this->load->view('mahasiswa/view_ubah', $var);
	}
	public function hapus($id)
	{
		$this->load->model('mhs_model');
		$delete = $this->mhs_model->delete($id); //kirim id ke mhs_model
		if($delete){
			redirect('mahasiswa'); //kalau berhasil
		}else{
			redirect('mahasiswa'); //kalau gagal
		}
	}
}