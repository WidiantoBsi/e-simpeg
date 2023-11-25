<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_pendidikan extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'riwayat_pendidikan/tampil_riwayatpendidikan';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Riwayat Pendidikan';
		$isi['data']		= $this->db->get('tb_riwayat_pendidikan');
		$this->load->view('tampilan_home', $isi);
	}

	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']				= 'riwayat_pendidikan/form_tambahriwayat';
		$isi['judul']				= 'Master';
		$isi['sub_judul']			= 'Tambah Riwayat';
		$isi['tingkat_pendidikan']	= '';
		$isi['kota']				= '';
		$isi['jurusan']				= '';
		$isi['tanggal_ijazah']		= '';
		$isi['tahun_masuk']			= '';
		$isi['tahun_lulus']			= '';
		$this->load->view('tampilan_home', $isi);
	}

	public function edit()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'riwayat_pendidikan/form_tambahriwayat';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Edit Riwayat Pendidikan';

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_riwayat_pendidikan');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['tingkat_pendidikan']	= $row->tingkat_pendidikan;
				$isi['kota']				= $row->kota;
				$isi['jurusan']				= $row->jurusan;
				$isi['tanggal_ijazah']		= $row->tanggal_ijazah;
				$isi['tahun_masuk']			= $row->tahun_masuk;
				$isi['tahun_lulus']			= $row->tahun_lulus;
				$isi['id']					= $row->id;
			}
		}
		else
		{
				$isi['tingkat_pendidikan']	= '';
				$isi['kota']				= '';
				$isi['jurusan']				= '';
				$isi['tanggal_ijazah']		= '';
				$isi['tahun_masuk']		= '';
				$isi['tahun_lulus']		= '';
		}
		$this->load->view('tampilan_home', $isi);
	}

	public function simpan($key)
	{
		$this->model_squrity->getsqurity();

		//$key = $this->input->post('id');
		$data['tingkat_pendidikan']	= $this->input->post('tingkat_pendidikan');
		$data['kota']				= $this->input->post('kota');
		$data['jurusan']			= $this->input->post('jurusan');
		$data['tanggal_ijazah']		= $this->input->post('tanggal_ijazah');
		$data['tahun_masuk']		= $this->input->post('tahun_masuk');
		$data['tahun_lulus']		= $this->input->post('tahun_lulus');

		$this->load->model('model_riwayatpendidikan');
		$query = $this->model_riwayatpendidikan->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_riwayatpendidikan->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		else
		{
			$this->model_riwayatpendidikan->getinsert($data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		redirect('riwayat_pendidikan');
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_riwayatpendidikan');

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_riwayat_pendidikan');
		if($query->num_rows()>0)
		{
			$this->model_riwayatpendidikan->getdelete($key);
		}
		redirect('riwayat_pendidikan');
	}

}
