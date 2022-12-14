<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
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

        $this->load->view('user/head', $data);
        $this->load->view('user/identitas', $data);
        $this->load->view('user/foot');
    }
}