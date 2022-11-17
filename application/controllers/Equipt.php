<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Equipt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('EquiptModel', 'model');
        $this->load->model('Auth_model');
        $this->load->model('ProvinsiModel');
        $this->load->model('KotaModel');
        $this->load->model('KecModel');
        $this->load->model('DesaModel');
        if (!$this->Auth_model->current_user()) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'identitas';
        $data['name'] = $this->Auth_model->current_user();
        $data['agama'] = $this->model->agama()->result();

        $this->load->view('user/head', $data);
        $this->load->view('user/identitas', $data);
        $this->load->view('user/foot');
    }

    public function saveIdentitas()
    {
        $data = [
            'nik' => $this->input->post('nik', true),
            'no_kk' => $this->input->post('no_kk', true),
            'nisn' => $this->input->post('nisn', true),
            'nama' => strtoupper($this->input->post('nama', true)),
            'tempat' => strtoupper($this->input->post('tempat', true)),
            'tanggal' => $this->input->post('tanggal', true) . '-' . $this->input->post('bulan', true) . '-' . $this->input->post('tahun', true),
            'jkl' => $this->input->post('jkl', true),
            'agama' => $this->input->post('agama', true),
            'anak_ke' => $this->input->post('anak_ke', true),
            'jml_sdr' => $this->input->post('jml_sdr', true)
        ];

        $where = $this->input->post('nis', true);

        $this->model->update($data, $where);
        if ($this->db->affected_rows() > 0) {
            redirect('equipt');
        }
    }

    public function parent()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'mahrom';
        $data['name'] = $this->Auth_model->current_user();
        $data['pend'] = $this->model->pend()->result();
        $data['pkj'] = $this->model->pkj()->result();
        $data['hasil'] = $this->model->hasil()->result();

        $this->load->view('user/head', $data);
        $this->load->view('user/mahrom', $data);
        $this->load->view('user/foot');
    }

    public function saveMahrom()
    {
        $data = [
            'a_nik' => $this->input->post('a_nik', true),
            'bapak' => $this->input->post('bapak', true),
            'a_tempat' => $this->input->post('a_tempat', true),
            'a_tanggal' => $this->input->post('tanggal', true) . '-' . $this->input->post('bulan', true) . '-' . $this->input->post('tahun', true),
            'a_pend' => $this->input->post('a_pend', true),
            'a_pkj' => $this->input->post('a_pkj', true),
            'a_hasil' => $this->input->post('a_hasil', true),
            'a_stts' => $this->input->post('a_stts', true),

            // IBU
            'i_nik' => $this->input->post('i_nik', true),
            'ibu' => $this->input->post('ibu', true),
            'i_tempat' => $this->input->post('i_tempat', true),
            'i_tanggal' => $this->input->post('tanggal_i', true) . '-' . $this->input->post('bulan_i', true) . '-' . $this->input->post('tahun_i', true),
            'i_pend' => $this->input->post('i_pend', true),
            'i_pkj' => $this->input->post('i_pkj', true),
            'i_hasil' => $this->input->post('i_hasil', true),
            'i_stts' => $this->input->post('i_stts', true)
        ];

        $where = $this->input->post('nis', true);

        $this->model->update($data, $where);
        if ($this->db->affected_rows() > 0) {
            redirect('equipt/parent');
        }
    }

    public function addres()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'domisili';
        $data['name'] = $this->Auth_model->current_user();
        $data['provinsi'] = $this->ProvinsiModel->view();
        

        $this->load->view('user/head', $data);
        $this->load->view('user/alamat', $data);
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


    public function listKota()
    {
        // Ambil data ID Provinsi yang dikirim via ajax post
        $id_provinsi = $this->input->post('id_provinsi');

        $kota = $this->KotaModel->viewByProvinsi($id_provinsi);

        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option Pilih
        $lists = "<option value=''>-Pilih Kabupaten/Kota-</option>";

        foreach ($kota as $data) {
            $lists .= "<option value='" . $data->id_kab . "'>" . $data->nama . "</option>"; // Tambahkan tag option ke variabel $lists
        }

        $callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

        echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

    public function listKec()
    {
        // Ambil data ID Provinsi yang dikirim via ajax post
        $id_kab = $this->input->post('id_kab');

        $kec = $this->KecModel->viewById($id_kab);

        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option Pilih
        $lists = "<option value=''>-Pilih Kecamatan-</option>";

        foreach ($kec as $data) {
            $lists .= "<option value='" . $data->id_kec . "'>" . $data->nama . "</option>"; // Tambahkan tag option ke variabel $lists
        }

        $callback = array('list_kec' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

        echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

    public function listDesa()
    {
        // Ambil data ID Provinsi yang dikirim via ajax post
        $id_kec = $this->input->post('id_kec');

        $desa = $this->DesaModel->viewById($id_kec);

        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option Pilih
        $lists = "<option value=''>-Pilih Kelurahan/Desa-</option>";

        foreach ($desa as $data) {
            $lists .= "<option value='" . $data->id_kel . "'>" . $data->nama . "</option>"; // Tambahkan tag option ke variabel $lists
        }

        $callback = array('list_desa' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

        echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

    public function get_kab()
    {
        $id_provinsi = $this->input->post('id_provinsi');
        $data = $this->DaftarModel->getKab($id_provinsi);
        echo json_encode($data);
    }

    public function get_kec()
    {
        $id_kab = $this->input->post('id_kab');
        $data = $this->DaftarModel->getKec($id_kab);
        echo json_encode($data);
    }

    public function get_kel()
    {
        $id_kec = $this->input->post('id_kec');
        $data = $this->DaftarModel->getKel($id_kec);
        echo json_encode($data);
    }
}