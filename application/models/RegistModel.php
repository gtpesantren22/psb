<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RegistModel extends CI_Model
{
    function bp_total($nis)
    {
        $this->db->select('SUM(nominal) AS jml');
        $this->db->where('nis', $nis);
        $this->db->from('bp_daftar');
        return $this->db->get();
    }

    function bp_daftar($nis)
    {
        $this->db->select('*');
        $this->db->where('nis', $nis);
        $this->db->from('bp_daftar');
        return $this->db->get();
    }

    function regist($nis)
    {
        $this->db->select('*');
        $this->db->where('nis', $nis);
        $this->db->from('regist');
        return $this->db->get();
    }

    function registSum($nis)
    {
        $this->db->select_sum('nominal');
        $this->db->where('nis', $nis);
        $this->db->from('regist');
        return $this->db->get();
    }

    function tangg($nis)
    {
        $this->db->select('*');
        $this->db->where('nis', $nis);
        $this->db->from('tanggungan');
        return $this->db->get();
    }

    function biaya($jkl, $ket)
    {
        $this->db->select('*');
        $this->db->where('jkl', $jkl);
        $this->db->where('ket', $ket);
        $this->db->from('biaya');
        return $this->db->get();
    }

    function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function edit($where, $table, $data)
    {
        $this->db->where('nis', $where);
        $this->db->update($table, $data);
    }
}