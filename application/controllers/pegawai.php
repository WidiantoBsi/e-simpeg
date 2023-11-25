<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'pegawai/tampil_datapegawai';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Pegawai';
		$isi['data']		= $this->db->get('tb_pegawai');
		$this->load->view('tampilan_home', $isi);
	}

	public function tambah()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']			= 'pegawai/form_tambahpegawai';
		$isi['judul']			= 'Master';
		$isi['sub_judul']		= 'Tambah Pegawai';
		$isi['nip']				= '';
		$isi['nama_pegawai']	= '';
		$isi['jk']				= '';
		$isi['status']			= '';
		$isi['agama']			= '';
		$isi['tempat_lahir']	= '';
		$isi['tanggal_lahir']	= '';
		$isi['alamat']			= '';
		$isi['telepon']			= '';
		$this->load->view('tampilan_home', $isi);
	}

	public function edit()
	{
		$this->model_squrity->getsqurity();
		$isi['tampil']		= 'pegawai/form_tambahpegawai';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Edit Data Pegawai';

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_pegawai');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['nip']				= $row->nip;
				$isi['nama_pegawai']	= $row->nama_pegawai;
				$isi['jk']				= $row->jk;
				$isi['status']			= $row->status;
				$isi['agama']			= $row->agama;
				$isi['tempat_lahir']	= $row->tempat_lahir;
				$isi['tanggal_lahir']	= $row->tanggal_lahir;
				$isi['alamat']			= $row->alamat;
				$isi['telepon']			= $row->telepon;
				$isi['id']				= $row->id;
			}
		}
		else
		{
				$isi['nip']				= '';
				$isi['nama_pegawai']	= '';
				$isi['jk']				= '';
				$isi['status']			= '';
				$isi['agama']			= '';
				$isi['tempat_lahir']	= '';
				$isi['tanggal_lahir']	= '';
				$isi['alamat']			= '';
				$isi['telepon']			= '';
		}
		$this->load->view('tampilan_home', $isi);
	}

	public function simpan($key)
	{
		$this->model_squrity->getsqurity();

		//$key = $this->input->post('id');
		$data['nip']	= $this->input->post('nip');
		$data['nama_pegawai']	= $this->input->post('nama_pegawai');
		$data['jk']		= $this->input->post('jk');
		$data['status']			= $this->input->post('status');
		$data['agama']		= $this->input->post('agama');
		$data['tempat_lahir']	= $this->input->post('tempat_lahir');
		$data['tanggal_lahir']	= $this->input->post('tanggal_lahir');
		$data['alamat']		= $this->input->post('alamat');
		$data['telepon']			= $this->input->post('telepon');

		$this->load->model('model_pegawai');
		$query = $this->model_pegawai->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_pegawai->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		else
		{
			$this->model_pegawai->getinsert($data);
			$this->session->set_flashdata('info','Data Sukses Disimpan');
		}
		redirect('pegawai');
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_pegawai');

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_pegawai');
		if($query->num_rows()>0)
		{
			$this->model_pegawai->getdelete($key);
		}
		redirect('pegawai');
	}

}
