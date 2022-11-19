<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SklModel extends CI_Model
{

	public function viewById($id_kec)
	{
		$this->db->where('kode', $id_kec);
		$this->db->order_by('nama', 'ASC');
		$result = $this->db->get('sekolah')->result(); // Tampilkan semua data kota berdasarkan id provinsi

		return $result;
	}
}