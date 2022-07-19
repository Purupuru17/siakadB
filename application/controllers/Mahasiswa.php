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
		$this->load->model('mhs_model');

		$var['title'] = 'TAMBAH MAHASISWA';
		$var['action'] = site_url('mahasiswa/tambah_aksi');
		$var['data_mhs'] = $this->mhs_model->selectEmpty();

		$this->load->view('mahasiswa/view_tambah', $var);
	}
	public function tambah_aksi()
	{
		$input = $this->input->post(); //ambil input dengan method POST dari View
		$data['nim'] = $input['nim'];
		$data['nama_mhs'] = $input['nama'];
		$data['prodi'] = 'PTI';
		$data['jk_mhs'] = $input['jenis'];
		$data['agama_mhs'] = $input['agama'];

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
		$this->load->model('mhs_model');

		$var['title'] = 'UBAH MAHASISWA';
		$var['action'] = site_url('mahasiswa/ubah_aksi/'.$id);
		$var['data_mhs'] = $this->mhs_model->selectId($id);

		$this->load->view('mahasiswa/view_tambah', $var);
	}
	public function ubah_aksi($id)
	{
		$input = $this->input->post();
		$data['nim'] = $input['nim'];
		$data['nama_mhs'] = $input['nama'];
		$data['prodi'] = 'PTI';
		$data['jk_mhs'] = $input['jenis'];
		$data['agama_mhs'] = $input['agama'];

		$this->load->model('mhs_model');
		$update = $this->mhs_model->update($id, $data); //kirim data ke mhs_model
		if($update){
			redirect('mahasiswa'); //kalau berhasil
		}else{
			redirect('mahasiswa/ubah/'.$id); //kalau gagal
		}
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