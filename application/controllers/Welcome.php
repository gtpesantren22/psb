<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('DataModel');
	}

	public function index()
	{
		$data['all'] = $this->DataModel->data()->num_rows();
		$data['verval'] = $this->DataModel->verval()->num_rows();
		$data['belum'] = $this->DataModel->belum()->num_rows();

		$this->load->view('layout/head');
		$this->load->view('home', $data);
		$this->load->view('layout/foot');
	}
}
