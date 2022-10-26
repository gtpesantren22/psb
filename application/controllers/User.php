<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('DataModel');
    }

    public function index()
    {

        $data['menu'] = 'home';

        $this->load->view('user/head', $data);
        $this->load->view('user/home');
        $this->load->view('user/foot');
    }

    public function logAuth()
    {
    }
}