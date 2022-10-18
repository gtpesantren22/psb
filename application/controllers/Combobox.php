<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Combobox extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ComboboxModel');
    }


    public function index()
    {
        $data['hasil'] = $this->ComboboxModel->getprov();
        $this->load->view('daftar', $data);
    }

    // Kabupaten
    

    // Kecamatan

    // Kelurahan

}
