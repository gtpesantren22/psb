<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Announ extends CI_Controller
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

        $data['menu'] = 'announ';
        $data['name'] = $this->Auth_model->current_user();
        // $data['hasil'] = $this->model->getBy('test', 'nis', $data['name']->nis)->result();
        $data['diri'] = $this->model->getKts($data['name']->nis)->result();

        $this->load->view('user/head', $data);
        $this->load->view('user/pengumuman', $data);
        $this->load->view('user/foot');
    }

}