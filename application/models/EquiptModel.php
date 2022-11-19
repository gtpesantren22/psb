<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EquiptModel extends CI_Model
{
    function update($data, $where)
    {
        $this->db->where('nis', $where);
        $this->db->update('tb_santri', $data);
    }

    function upload($data, $where)
    {
        $this->db->where('nis', $where);
        $this->db->update('berkas_file', $data);
    }

    function agama()
    {
        $this->db->select('*');
        $this->db->from('agama');
        return $this->db->get();
    }

    function pend()
    {
        $this->db->select('*');
        $this->db->from('pend');
        return $this->db->get();
    }

    function pkj()
    {
        $this->db->select('*');
        $this->db->from('pkj');
        return $this->db->get();
    }

    function hasil()
    {
        $this->db->select('*');
        $this->db->from('hasil');
        return $this->db->get();
    }

    function getSkl($npsn)
    {
        $this->db->where('npsn', $npsn);
        $this->db->from('sekolah');
        return $this->db->get()->row();
    }

    function getFile($nis)
    {
        $this->db->where('nis', $nis);
        $this->db->from('berkas_file');
        return $this->db->get();
    }

    function input($nis)
    {
        $this->db->insert('berkas_file', ['nis' => $nis]);
    }
}