<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Biodata extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Biodata_model');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['title'] = 'My Biodata';
		$data['biodata'] = $this->Biodata_model->getAllBiodata();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('biodata/index', $data);
		$this->load->view('templates/footer');
	}


	public function tambah()
	{
		$data['title'] = 'DATA PRIBADI PELAMAR';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('ktp', 'KTP', 'required|numeric');
		$this->form_validation->set_rules('tmpt_tgl_lhr', 'Tempat Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenisKel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('golDar', 'Divisi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat KTP', 'required');
		$this->form_validation->set_rules('alamat_tinggal', 'Alamat Tinggal', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('tlp', 'Telepon', 'required');
		$this->form_validation->set_rules('skill', 'Skill', 'required');
		$this->form_validation->set_rules('tersedia', 'Ketersediaan', 'required');
		$this->form_validation->set_rules('gaji', 'Gaji', 'required');
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('biodata/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Biodata_model->tambahData();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('User');
		}
	}

	public function detail($id)
	{

		$data['title'] = 'My Biodata';
		$data['biodata'] = $this->Biodata_model->getBioDataById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('biodata/ detail', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id)
	{
		$this->Biodata_model->hapusbiodata($id);
		$this->session->set_flashdata('flash', 'dihapus');

		redirect('biodata');
	}

	public function update()
	{
		$data['title'] = 'DATA PRIBADI PELAMAR';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('ktp', 'KTP', 'required|numeric');
		$this->form_validation->set_rules('tmpt_tgl_lhr', 'Tempat Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenisKel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('golDar', 'Divisi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat KTP', 'required');
		$this->form_validation->set_rules('alamat_tinggal', 'Alamat Tinggal', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('tlp', 'Telepon', 'required');
		$this->form_validation->set_rules('skill', 'Skill', 'required');
		$this->form_validation->set_rules('tersedia', 'Ketersediaan', 'required');
		$this->form_validation->set_rules('gaji', 'Gaji', 'required');
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('biodata/update', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Biodata_model->updateData();
			$this->session->set_flashdata('flash', 'Di Ubah');
			redirect('User');
		}
	}
}
