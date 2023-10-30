<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('upload_helper');
    }

    public function uploadFile()
    {
        $this->load->view('coba/upload');
    }

    public function cobaUpload()
    {
        $upload_path = FCPATH . '/assets/berkas/coba/';
        $allowed_types = 'jpg|jpeg|png|gif';
        $max_size = 2048;

        $result = upload_file('berkas', $upload_path, $allowed_types, $max_size, 'Coba_pload');

        if (is_string($result)) {
            echo $result . '<br>';
            echo "upload error";
        } else {
            // Jika BErhasil
            print_r($result) . '<br>';
            echo $result['file_ext'];
        }
    }
}
