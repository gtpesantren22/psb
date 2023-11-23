<?php

class DataModel extends CI_Model
{
    public function data()
    {
        // $this->db->order_by('waktu_daftar', 'ASC');
        // $this->db->where('nama !=', '');
        // $this->db->from('tb_santri');
        // return $this->db->get();

        return $this->db->query("SELECT * FROM tb_santri UNION SELECT * FROM tb_santri_sm ORDER BY nama ASC");
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

    public function down()
    {
        $this->db->from('downloads');
        return $this->db->get();
    }

    function getBy($tbl, $wh, $dwh)
    {
        $this->db->where($wh, $dwh);
        $this->db->from($tbl);
        return $this->db->get();
    }

    function ubah($tbl, $wh, $dwh, $data)
    {
        $this->db->where($wh, $dwh);
        $this->db->update($tbl, $data);
    }
}
