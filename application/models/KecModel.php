<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KecModel extends CI_Model {
	
	public function viewById($id_kab){
		$this->db->where('id_kab', $id_kab);
		$this->db->order_by('nama', 'ASC');
		$result = $this->db->get('kecamatan')->result(); // Tampilkan semua data kota berdasarkan id provinsi
		
		return $result; 
	}
}

