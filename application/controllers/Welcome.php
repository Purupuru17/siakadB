<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/*
			http://localhost/siakad/index.php/welcome/index
				
			http://localhost/siakad/ -> HOST 
			index.php/	-> File Index
			welcome/	-> Controller 1,2,3,4 dst
			index		> Fungsi 1,2,3,4 dst
	*/
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function tampil()
	{
		$this->load->view('unimuda');
	}
	public function selamat()
	{
		$this->load->view('welcome_message');
	}
}
