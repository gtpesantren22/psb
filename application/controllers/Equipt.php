<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Equipt extends CI_Controller
{
    public function index()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'identitas';

        $this->load->view('user/head', $data);
        $this->load->view('user/identitas', $data);
        $this->load->view('user/foot');
    }
}