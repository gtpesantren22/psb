<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class InfoModel extends CI_Model
{
    function data(){
        $this->db->from('info');
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get();
    }

    public function getBy($table, $where, $dtwhere)
    {
        $this->db->where($where, $dtwhere);
        return $this->db->get($table);
    }

    public function getKts($nis)
    {
        $this->db->from('tb_santri');
        $this->db->join('foto_file', 'ON tb_santri.nis=foto_file.nis');
        $this->db->where('tb_santri.nis', $nis);
        return $this->db->get();
    }
}

?>