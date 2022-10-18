<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProvinsiModel extends CI_Model {
	
	public function view(){
		$this->db->order_by('nama', 'ASC');
        return $this->db->from('provinsi')->get()->result();
	}
}
