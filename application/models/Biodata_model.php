<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_model extends CI_Model{
	public function getAllBiodata()
	{
		return $this->db->get('tb_biodata')->result_array();
	}

	public function tambahData()
	{
		$data = [
			"posisi" => $this->input->post('posisi',true),
			"nama" => $this->input->post('nama',true),
			"ktp" => $this->input->post('ktp',true),
			"tmpt_tgl_lhr" => $this->input->post('tmpt_tgl_lhr',true),
			"jenisKel" => $this->input->post('jenisKel',true),
			"agama" => $this->input->post('agama',true),
			"golDar" => $this->input->post('golDar',true),
			"status" => $this->input->post('status',true),
			"alamat" => $this->input->post('alamat',true),
			"alamat_tinggal" => $this->input->post('alamat_tinggal',true),
			"email" => $this->input->post('email',true),
			"tlp" => $this->input->post('tlp',true),
			"noOthers" => $this->input->post('noOthers',true),
			"idPendidikan" => $this->input->post('idPendidikan',true),
			"idPelatihan" => $this->input->post('idPelatihan',true),
			"idPekerjaan" => $this->input->post('idPekerjaan',true),
			"skill" => $this->input->post('skill',true),
			"tersedia" => $this->input->post('tersedia',true),
			"gaji" => $this->input->post('gaji',true)
		];
		$this->db->insert('tb_biodata', $data);
	}

	public function getBioDataById($id)
	{
		return $this->db->get_where('tb_biodata', ['id' => $id])->row_array();
	}

	public function hapusbiodata($id)
	{
		$this->db->delete('tb_biodata', ['id' => $id]);
	}

	public function updateData()
	{
		$data = [
			"posisi" => $this->input->post('posisi',true),
			"nama" => $this->input->post('nama',true),
			"ktp" => $this->input->post('ktp',true),
			"tmpt_tgl_lhr" => $this->input->post('tmpt_tgl_lhr',true),
			"jenisKel" => $this->input->post('jenisKel',true),
			"agama" => $this->input->post('agama',true),
			"golDar" => $this->input->post('golDar',true),
			"status" => $this->input->post('status',true),
			"alamat" => $this->input->post('alamat',true),
			"alamat_tinggal" => $this->input->post('alamat_tinggal',true),
			"email" => $this->input->post('email',true),
			"tlp" => $this->input->post('tlp',true),
			"noOthers" => $this->input->post('noOthers',true),
			"idPendidikan" => $this->input->post('idPendidikan',true),
			"idPelatihan" => $this->input->post('idPelatihan',true),
			"idPekerjaan" => $this->input->post('idPekerjaan',true),
			"skill" => $this->input->post('skill',true),
			"tersedia" => $this->input->post('tersedia',true),
			"gaji" => $this->input->post('gaji',true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_biodata', $data);
	}
	

}
