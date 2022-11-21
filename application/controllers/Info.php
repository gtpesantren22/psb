<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('DataModel');
        $this->load->model('Auth_model');
        $this->load->model('InfoModel', 'model');

        if (!$this->Auth_model->current_user()) {
            redirect('login');
        }
    }

    public function index()
    {

        $data['menu'] = 'info';
        $data['name'] = $this->Auth_model->current_user();
        $data['info'] = $this->model->data()->result();

        $this->load->view('user/head', $data);
        $this->load->view('user/info', $data);
        $this->load->view('user/foot');
    }

}