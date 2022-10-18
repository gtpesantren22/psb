<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KotaModel extends CI_Model {
	
	public function viewByProvinsi($id_provinsi){
		$this->db->where('id_prov', $id_provinsi);
		$this->db->order_by('nama', 'ASC');
		$result = $this->db->get('kabupaten')->result(); // Tampilkan semua data kota berdasarkan id provinsi
		
		return $result; 
	}
}
