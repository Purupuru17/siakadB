<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_model extends CI_Model {
	
	var $table = 'tb_mhs';
	var $id = 'id_mhs';

	function select()
	{
		$this->db->from($this->table); // SELECT * FROM tb_mhs
		$result = $this->db->get(); // AMBIL DATA

		return $result->result_array(); // KIRIM DATA DALAM ARRAY
	}
	function insert()
	{
		
	}
	function update()
	{
		
	}
	function delete()
	{
		
	}
}