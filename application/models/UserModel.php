<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function berkas($nis)
    {
        $this->db->from('berkas_file');
        $this->db->where('nis', $nis);
        return $this->db->get();
    }

    public function getBy($nis)
    {
        $this->db->where('nis', $nis);
        return $this->db->get('tb_santri');
    }
}

?>