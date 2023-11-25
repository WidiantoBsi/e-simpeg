<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatihan extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'pelatihan/tampil_datapelatihan';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Pelatihan';
		$isi['data']		= $this->db->get('tb_pelatihan');
		$this->load->view('tampilan_home', $isi);
	}

	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'pelatihan/form_tambahpelatihan';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Tambah Pelatihan';
		$isi['nama_pelatihan']	= '';
		$isi['tanggal_mulai']	= '';
		$isi['tanggal_akhir']	= '';
		$isi['tempat_diklat']	= '';
		$isi['keterangan']		= '';
		$this->load->view('tampilan_home', $isi);
	}

	public function edit()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'pelatihan/form_tambahpelatihan';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Edit Data Pelatihan';

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_pelatihan');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['nama_pelatihan']	= $row->nama_pelatihan;
				$isi['tanggal_mulai']	= $row->tanggal_mulai;
				$isi['tanggal_akhir']	= $row->tanggal_akhir;
				$isi['tempat_diklat']	= $row->tempat_diklat;
				$isi['keterangan']		= $row->keterangan;
				$isi['id']				= $row->id;
			}
		}
		else
		{
				$isi['nama_pelatihan']	= '';
				$isi['tanggal_mulai']	= '';
				$isi['tanggal_akhir']	= '';
				$isi['tempat_diklat']	= '';
				$isi['keterangan']		= '';
		}
		$this->load->view('tampilan_home', $isi);
	}

	public function simpan($key)
	{
		$this->model_squrity->getsqurity();

		//$key = $this->input->post('id');
		$data['nama_pelatihan']			= $this->input->post('nama_pelatihan');
		$data['tanggal_mulai']			= $this->input->post('tanggal_mulai');
		$data['tanggal_akhir']		= $this->input->post('tanggal_akhir');
		$data['tempat_diklat']	= $this->input->post('tempat_diklat');
		$data['keterangan']			= $this->input->post('keterangan');

		$this->load->model('model_pelatihan');
		$query = $this->model_pelatihan->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_pelatihan->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		else
		{
			$this->model_pelatihan->getinsert($data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		redirect('pelatihan');
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pelatihan');

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_pelatihan');
		if($query->num_rows()>0)
		{
			$this->model_pelatihan->getdelete($key);
		}
		redirect('pelatihan');
	}

}
