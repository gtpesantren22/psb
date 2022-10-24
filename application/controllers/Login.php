<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('DataModel');
    }

    public function index()
    {

        // $data['daftar'] = $this->DataModel->data()->result();

        // $this->load->view('layout/head');
        $this->load->view('login');
        // $this->load->view('layout/foot');
    }
}
