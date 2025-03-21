<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('https://data.ppdwk.com/daftar');
    }
}
