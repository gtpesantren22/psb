<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DaftarModel extends CI_Model
{

    function getprov()
    {
        $this->db->order_by('nama', 'ASC');
        return $this->db->from('provinsi')->get()->result();
    }

    function getKab($id_provinsi)
    {
        $this->db->where('id_prov', $id_provinsi);
        $this->db->order_by('nama', 'ASC');
        return $this->db->from('kabupaten')->get()->result();
    }
    function getKec($id_kab)
    {
        $this->db->where('id_kab', $id_kab);
        $this->db->order_by('nama', 'ASC');
        return $this->db->from('kecamatan')->get()->result();
    }
    function getKel($id_kec)
    {
        $this->db->where('id_kec', $id_kec);
        $this->db->order_by('nama', 'ASC');
        return $this->db->from('kelurahan')->get()->result();
    }

    function getPkj()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('pkj')->get()->result();
    }

    function cekNIK($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->from('tb_santri');
        return $this->db->get();
    }

    function cekNIS2($nis)
    {
        $this->db->where('nis', $nis);
        $this->db->from('tb_santri');
        return $this->db->get();
    }

    function cekSMPPa()
    {
        $this->db->where('lembaga', 'SMP');
        $this->db->where('jkl', 'Laki-laki');
        $this->db->from('tb_santri');
        return $this->db->get();
    }

    function cekSMPPi()
    {
        $this->db->where('lembaga', 'SMP');
        $this->db->where('jkl', 'Perempuan');
        $this->db->from('tb_santri');
        return $this->db->get();
    }

    function cekMI()
    {
        $this->db->where('lembaga', 'MI');
        $this->db->from('tb_santri');
        return $this->db->get();
    }

    function cekRA()
    {
        $this->db->where('lembaga', 'RA');
        $this->db->from('tb_santri');
        return $this->db->get();
    }

    function cekNis()
    {
        $this->db->query("SELECT max(substring(nis, 6)) as maxKode FROM tb_santri");
        return $this->db->get()->result();
    }

    function input_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function cariNis($nis)
    {
        $this->db->where('nis', $nis);
        $this->db->select('*');
        $this->db->from('tb_lama');
        return $this->db->get()->result_array();
    }

    function apikey()
    {
        $this->db->select('*');
        $this->db->from('api');
        return $this->db->get();
    }
}