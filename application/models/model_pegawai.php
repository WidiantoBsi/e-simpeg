<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('tb_pegawai');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id',$key);
		$this->db->update('tb_pegawai',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('tb_pegawai',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('tb_pegawai');
	}

}
