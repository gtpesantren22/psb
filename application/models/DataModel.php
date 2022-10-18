<?php

class DataModel extends CI_Model
{
    public function data()
    {
        $this->db->order_by('waktu_daftar', 'ASC');
        $this->db->where('nama !=', '');
        $this->db->from('tb_santri');
        return $this->db->get();
    }

    public function verval()
    {
        $this->db->where('stts', 'Terverifikasi');
        $this->db->from('tb_santri');
        return $this->db->get();
    }

    public function belum()
    {
        $this->db->where('stts', 'Belum Terverifikasi');
        $this->db->from('tb_santri');
        return $this->db->get();
    }
}
