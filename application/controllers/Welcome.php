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
		// $data['all'] = $this->DataModel->data()->num_rows();
		// $data['verval'] = $this->DataModel->verval()->num_rows();
		// $data['belum'] = $this->DataModel->belum()->num_rows();
		// $data['down'] = $this->DataModel->down()->result();

		// $this->load->view('layout/head');
		// $this->load->view('home', $data);
		// $this->load->view('layout/foot');

		$this->load->view('comingsoon');
	}

	public function unduh($id)
	{
		$file = $this->DataModel->getBy('downloads', 'id_download', $id)->row();
		force_download('viho/assets/images/Brosur/' . $file->berkas, NULL);
		redirect('/');
	}
}
