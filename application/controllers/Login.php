<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('DataModel');
        $this->load->model('Auth_model');
    }

    public function index()
    {

        // $data['daftar'] = $this->DataModel->data()->result();

        // $this->load->view('layout/head');
        $this->load->view('login');
        // $this->load->view('layout/foot');
    }

    public function logAuth()
    {
        $rules = $this->Auth_model->rules();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            return $this->load->view('login');
        }

        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        if ($this->Auth_model->login($username, $password)) {
            redirect('user');
        } else {
            $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
            $this->load->view('login');
        }

    }

    public function logout()
    {
        // $this->load->model('Auth_model');
        $this->Auth_model->logout();
        redirect('login');
    }
}