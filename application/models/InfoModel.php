<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class InfoModel extends CI_Model
{
    function data(){
        $this->db->from('info');
        $this->db->order_by('tgl', 'DESC');
        return $this->db->get();
    }
}

?>