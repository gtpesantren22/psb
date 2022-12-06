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

    public function saveAddres()
    {
        if ($this->input->post('kelurahan') === '') {
            $almt = explode('-', $this->input->post('alamat'));
            $provOk = $almt[3];
            $kabOk = $almt[2];
            $kecOk = $almt[1];
            $kelOk = $almt[0];
        } else {
            $provinsi = $this->input->post('provinsi', TRUE);
            $kabupaten = $this->input->post('kabupaten', TRUE);
            $kecamatan = $this->input->post('kecamatan', TRUE);
            $kelurahan = $this->input->post('kelurahan', TRUE);

            $pr = $this->db->query("SELECT nama FROM provinsi WHERE id_prov = '$provinsi' ")->row();
            $provOk = $pr->nama;
            $kb = $this->db->query("SELECT nama FROM kabupaten WHERE id_kab = '$kabupaten' ")->row();
            $kabOk = $kb->nama;
            $kc = $this->db->query("SELECT nama FROM kecamatan WHERE id_kec = '$kecamatan' ")->row();
            $kecOk = $kc->nama;
            $kl = $this->db->query("SELECT nama FROM kelurahan WHERE id_kel = '$kelurahan' ")->row();
            $kelOk = $kl->nama;
        }

        $data = [
            'jln' => $this->input->post('jln', true),
            'rt' => $this->input->post('rt', true),
            'rw' => $this->input->post('rw', true),
            'kd_pos' => $this->input->post('kd_pos', true),
            'desa' => $kelOk,
            'kec' => $kecOk,
            'kab' => $kabOk,
            'prov' => $provOk
        ];

        $where = $this->input->post('nis', true);

        $this->model->update($data, $where);
        if ($this->db->affected_rows() > 0) {
            redirect('equipt/addres');
        }
    }

    public function univ()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'pendidikan';
        $data['name'] = $this->Auth_model->current_user();
        $data['provinsi'] = $this->ProvinsiModel->view();

        $this->load->view('user/head', $data);
        $this->load->view('user/univ', $data);
        $this->load->view('user/foot');
    }

    public function saveUniv()
    {
        $npsn = $this->input->post('npsn');
        $dtSkl = $this->model->getSkl($npsn);

        $data = [
            'npsn' => $npsn,
            'asal' => $dtSkl->nama,
            'a_asal' => $dtSkl->alamat . ', Desa/Kel. ' . $dtSkl->desa
        ];

        $where = $this->input->post('nis', true);

        $this->model->update($data, $where);
        if ($this->db->affected_rows() > 0) {
            redirect('equipt/univ');
        }
    }

    public function other()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'lain';
        $data['name'] = $this->Auth_model->current_user();

        $this->load->view('user/head', $data);
        $this->load->view('user/lain', $data);
        $this->load->view('user/foot');
    }

    public function saveOther()
    {

        $data = [
            'hp' => $this->input->post('hp', true),
            'jenis' => $this->input->post('jenis', true),
            'tinggal' => $this->input->post('tinggal', true)
        ];

        $where = $this->input->post('nis', true);

        $this->model->update($data, $where);
        if ($this->db->affected_rows() > 0) {
            redirect('equipt/other');
        }
    }

    public function file()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'berkas';
        $data['name'] = $this->Auth_model->current_user();
        $data['file'] = $this->model->getFile($data['name']->nis)->row();

        $this->load->view('user/head', $data);
        $this->load->view('user/berkas', $data);
        $this->load->view('user/foot');
    }

    public function uploadAkta()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png|pdf';
        $config['file_name']            = 'AKTA-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'akta' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('berkas_file', $nis);
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            } else {
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            }
        }
    }

    public function uploadKK()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png|pdf';
        $config['file_name']            = 'KK-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'kk' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('berkas_file', $nis);
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            } else {
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            }
        }
    }

    public function uploadktp_ayah()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png|pdf';
        $config['file_name']            = 'ktp_ayah-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'ktp_ayah' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('berkas_file', $nis);
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            } else {
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            }
        }
    }

    public function uploadktp_ibu()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png|pdf';
        $config['file_name']            = 'ktp_ibu-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'ktp_ibu' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('berkas_file', $nis);
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            } else {
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            }
        }
    }

    public function uploadskl()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png|pdf';
        $config['file_name']            = 'skl-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'skl' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('berkas_file', $nis);
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            } else {
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            }
        }
    }

    public function uploadijazah()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png|pdf';
        $config['file_name']            = 'ijazah-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'ijazah' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('berkas_file', $nis);
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            } else {
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            }
        }
    }

    public function uploadkip()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png|pdf';
        $config['file_name']            = 'kip-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'kip' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('berkas_file', $nis);
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            } else {
                $this->model->upload('berkas_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/file');
                }
            }
        }
    }

    public function img()
    {
        $data['menu'] = 'identitas';
        $data['btn'] = 'foto';
        $data['name'] = $this->Auth_model->current_user();
        $data['file'] = $this->model->getFoto($data['name']->nis)->row();

        $this->load->view('user/head', $data);
        $this->load->view('user/foto', $data);
        $this->load->view('user/foot');
    }

    public function uploaddiri()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['file_name']            = 'diri-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'diri' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('foto_file', $nis);
                $this->model->upload('foto_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/img');
                }
            } else {
                $this->model->upload('foto_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/img');
                }
            }
        }
    }

    public function uploadayah()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['file_name']            = 'ayah-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'ayah' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('foto_file', $nis);
                $this->model->upload('foto_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/img');
                }
            } else {
                $this->model->upload('foto_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/img');
                }
            }
        }
    }

    public function uploadibu()
    {
        $nis = $this->input->post('nis', true);
        $lama = $this->input->post('file_lama', true);

        $config['upload_path']          = FCPATH . '/assets/berkas/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['file_name']            = 'ibu-' . $nis . random(4);
        $config['overwrite']            = true;
        $config['max_size']             = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            if ($lama != '') {
                unlink('assets/berkas/' . $lama);
            }
            $uploaded_data = $this->upload->data();
            $new_data = [
                'ibu' => $uploaded_data['file_name']
            ];

            if ($this->model->getFile($nis)->num_rows() < 1) {
                $this->model->input('foto_file', $nis);
                $this->model->upload('foto_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/img');
                }
            } else {
                $this->model->upload('foto_file', $new_data, $nis);
                if ($this->db->affected_rows() > 0) {
                    redirect('equipt/img');
                }
            }
        }
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