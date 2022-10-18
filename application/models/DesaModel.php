<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DesaModel extends CI_Model {
	
	public function viewById($id_kec){
		$this->db->where('id_kec', $id_kec);
		$this->db->order_by('nama', 'ASC');
		$result = $this->db->get('kelurahan')->result(); // Tampilkan semua data kota berdasarkan id provinsi
		
		return $result; 
	}
}

