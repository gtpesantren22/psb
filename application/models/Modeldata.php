<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modeldata extends CI_Model
{

    function hapus($table, $where)
    {
        $this->db->where('id_regist', $where);
        $this->db->delete($table);
    }

    function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function edit($table, $data, $where, $dtwhere)
    {
        $this->db->where($where, $dtwhere);
        $this->db->update($table, $data);
    }
    function edit2($table, $data, $where)
    {
        $this->db->where('id_regist', $where);
        $this->db->update($table, $data);
    }


    function getBy($table, $where, $dtwhere)
    {
        $this->db->where($where, $dtwhere);
        $this->db->from($table);
        return $this->db->get();
    }
    function getBy2($table, $where, $dtwhere, $where2, $dtwhere2)
    {
        $this->db->where($where, $dtwhere);
        $this->db->where($where2, $dtwhere2);
        $this->db->from($table);
        return $this->db->get();
    }
}
