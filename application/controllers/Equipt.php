<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Equipt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('DataModel');
        $this->load->model('Auth_model');
        if (!$this->Auth_model->current_user()) {
            redirect('login');
        }
    }
    
    public function index()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'identitas';
        $data['name'] = $this->Auth_model->current_user();

        $this->load->view('user/head', $data);
        $this->load->view('user/identitas', $data);
        $this->load->view('user/foot');
    }

    public function file()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'berkas';

        $this->load->view('user/head', $data);
        $this->load->view('user/berkas', $data);
        $this->load->view('user/foot');
    }

    public function img()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'foto';

        $this->load->view('user/head', $data);
        $this->load->view('user/foto', $data);
        $this->load->view('user/foot');
    }
}