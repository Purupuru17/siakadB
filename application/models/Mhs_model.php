<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_model extends CI_Model {
	
	var $table = 'tb_mhs';
	var $id = 'id_mhs';

	function select($where = null)
	{
		$this->db->from($this->table); // SELECT * FROM tb_mhs
		if(!is_null($where)){
			$this->db->where($where);
		}
		$this->db->order_by('nama_mhs asc'); //URUTKAN nama_mhs dari A - Z

		$result = $this->db->get(); // AMBIL DATA
		return $result->result_array(); // KIRIM DATA DALAM ARRAY
	}
	function selectId($id = null)
	{
		$this->db->from($this->table); // SELECT * FROM tb_mhs
		$this->db->where($this->id, $id); // WHERE id_mhs = $id

		$result = $this->db->get(); // AMBIL DATA
		return $result->row_array(); // KIRIM DATA DALAM ARRAY (1 data)
	}
	function selectEmpty()
	{
		$var['id_mhs'] = null;
		$var['nim'] = null;
		$var['nama_mhs'] = null;
		$var['prodi'] = null;
		$var['jk_mhs'] = null;
		$var['agama_mhs'] = null;

		return $var;
	}
	function insert($data)
	{
		$this->db->set($this->id,'UUID()',FALSE);
		$result = $this->db->insert($this->table, $data);
		return $result;
	}
	function update($id, $data)
	{
		$this->db->where($this->id, $id);
		$result = $this->db->update($this->table, $data);
		return $result;	
	}
	function delete($id)
	{
		$this->db->where($this->id, $id);
		$result = $this->db->delete($this->table);
		return $result;
	}
}