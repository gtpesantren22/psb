<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'libs/vendor/autoload.php';


use Ramsey\Uuid\Uuid;

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DaftarModel');
        $this->load->model('ProvinsiModel');
        $this->load->model('KotaModel');
        $this->load->model('KecModel');
        $this->load->model('DesaModel');
        $this->load->model('SklModel');

        $this->load->helper('upload_helper');
    }


    public function index()
    {
        $data['hasilP'] = $this->DaftarModel->getPkj();
        $data['hasil'] = $this->DaftarModel->getprov();
        $data['provinsi'] = $this->ProvinsiModel->view();

        // $this->load->view('layout/head', $data);
        $this->load->view('daftar_baru', $data);
        // $this->load->view('layout/foot', $data);
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

    public function listSkl()
    {
        // Ambil data ID Provinsi yang dikirim via ajax post
        $id_kec = $this->input->post('id_kec');

        $desa = $this->SklModel->viewById($id_kec);

        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option Pilih
        $lists = "<option value=''>-Pilih Sekolah-</option>";

        // $a = "var npsn = new Array();\n;";
        // $b = "var nama = new Array();\n;";


        foreach ($desa as $data) {
            $lists .= "<option value='" . $data->npsn . "'>" . $data->npsn . " - " . $data->nama . " - " . $data->desa  . "</option>"; // Tambahkan tag option ke variabel $lists
            // $a .= "npsn['" . $data->npsn . "'] = {npsn:'" . addslashes($data->npsn) . "'};\n";
            // $b .= "nama['" . $data->npsn . "'] = {nama:'" . addslashes($data->nama) . "'};\n";
        }

        $callback = array('list_skl' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

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

    public function get_skl()
    {
        $id_kec = $this->input->post('skl');
        $data = $this->SklModel->getKel($id_kec);
        echo json_encode($data);
    }

    public function daftarAct()
    {
        $key = $this->DaftarModel->apiKey()->row();

        $id = Uuid::uuid4();
        $jalur = 'Reguler';
        $nik = $this->input->post('nik', TRUE);
        $no_kk = $this->input->post('no_kk', TRUE);
        $nisn = $this->input->post('nisn', TRUE);
        $nama = strtoupper($this->input->post('nama', TRUE));
        $tempat = strtoupper($this->input->post('tempat', TRUE));
        $tanggal = $this->input->post('tanggal', TRUE);
        $bulan = $this->input->post('bulan', TRUE);
        $tahun = $this->input->post('tahun', TRUE);
        $jkl = $this->input->post('jkl', TRUE);
        $anak_ke = $this->input->post('anak_ke', TRUE);
        $jml = $this->input->post('jml_sdr', TRUE);
        $lembaga = $this->input->post('lembaga', TRUE);
        $hp = preg_replace("/[^0-9]/", "", $this->input->post('hp', TRUE));

        // $jln = $this->input->post('jln', TRUE);
        // $rt = $this->input->post('rt', TRUE);
        // $rw = $this->input->post('rw', TRUE);

        $provinsi = $this->input->post('provinsi', TRUE);
        $kabupaten = $this->input->post('kabupaten', TRUE);
        $kecamatan = $this->input->post('kecamatan', TRUE);
        $kelurahan = $this->input->post('kelurahan', TRUE);
        // $provinsi = '35';
        // $kabupaten = '35.13';
        // $kecamatan = '35.13.14';
        // $kelurahan = '35.13.14.2013';


        $asal = $this->input->post('asal', TRUE);
        $a_asal = $this->input->post('a_asal', TRUE);
        $bapak = strtoupper($this->input->post('bapak', TRUE));
        $ibu = strtoupper($this->input->post('ibu', TRUE));
        // $a_pkj = $this->input->post('a_pkj', TRUE);
        // $i_pkj = $this->input->post('i_pkj', TRUE);

        $tgl_ok = $tanggal . '-' . $bulan . '-' . $tahun;
        $pr = $this->db->query("SELECT nama FROM provinsi WHERE id_prov = '$provinsi' ")->row();
        $provOk = $pr->nama;
        $kb = $this->db->query("SELECT nama FROM kabupaten WHERE id_kab = '$kabupaten' ")->row();
        $kabOk = $kb->nama;
        $kc = $this->db->query("SELECT nama FROM kecamatan WHERE id_kec = '$kecamatan' ")->row();
        $kecOk = $kc->nama;
        $kl = $this->db->query("SELECT nama FROM kelurahan WHERE id_kel = '$kelurahan' ")->row();
        $kelOk = $kl->nama;


        $cekNik = $this->DaftarModel->cekNIK($nik)->num_rows();
        $cekSMPPa = $this->DaftarModel->cekSMPPa()->num_rows();
        $cekSMPPi = $this->DaftarModel->cekSMPPi()->num_rows();
        $cekMI = $this->DaftarModel->cekMI()->num_rows();
        $cekRA = $this->DaftarModel->cekRA()->num_rows();
        $cekLama = $this->DaftarModel->cekLama($nik)->num_rows();
        $cekNikSm = $this->DaftarModel->getBy('tb_santri_sm', 'nik', $nik)->num_rows();

        $jl = date('Y-m-d');
        if ($lembaga == 'MI' || $lembaga == 'RA') {
            # code...
            $g1 = '2024-01-28';
            $g2 = '2024-03-11';
            $g3 = '2024-03-12';
        } else {
            $g1 = '2023-12-14';
            $g2 = '2024-04-25';
            $g3 = '2024-04-26';
        }

        if ($jl <= $g1) {
            $gel = "1";
            $by = 'Rp. 80.000';
        } else if ($jl > $g1 && $jl <= $g2) {
            $gel = "2";
            $by = 'Rp. 130.000';
        } else if ($jl >= $g3) {
            $gel = "3";
            $by = 'Rp. 180.000';
        }

        // $jk = $jkl == 'Laki-laki' ? '1' : '2';

        // $data = $this->db->query("SELECT max(substring(nis, 6)) as maxKode FROM tb_santri WHERE ket = 'baru' ")->row();
        // $kodeBarang = $data->maxKode ? $data->maxKode : '00000000';
        // $noUrut = (int) substr($kodeBarang, 0, 3);
        // $noUrut++;
        // $char = "2024";
        // $kodeBarang = $char . $jk . sprintf("%03s", $noUrut);
        // $nis = htmlspecialchars($kodeBarang);

        $alm = $kelOk . '-' . $kecOk . '-' . $kabOk;

        if ($lembaga === 'MI') {
            $tambahan = 'Silahkan bergabung ke Grup Siswa Baru MI DWK untuk mengetahui informasi lebih lanjut dengan mengklik link dipaling bawah';
            $linkImg = 'https://psb.ppdwk.com/viho/assets/images/logo/Logo-psb.png';
            $linkgroup = 'https://chat.whatsapp.com/FKuDjKALmcx7U1I5Dv7w5O';
            $tinggal = 'Non Mukim';
            $bawahan = '
_*Catatan Penting :*_
*- Wali murid segera menyetorkan berkas yang dibutuhkan kepada lembaga (Fotocopy KK, KTP bapak  ibu, Akta Kelahiran)*';
        } elseif ($lembaga === 'RA') {
            $tambahan = 'Silahkan bergabung ke Grup Siswa Baru RA DWK untuk mengetahui informasi lebih lanjut dengan mengklik link dipaling bawah.';
            $linkImg = 'https://psb.ppdwk.com/viho/assets/images/logo/Logo-psb.png';
            $linkgroup = 'https://chat.whatsapp.com/L51jKWYqQMX0kFgljf1g7u';
            $tinggal = 'Non Mukim';
            $bawahan = '
            _*Catatan Penting :*_
            *- Wali murid segera menyetorkan berkas yang dibutuhkan kepada lembaga (Fotocopy KK, KTP bapak  ibu, Akta Kelahiran)*';
        } else {
            $tambahan = 'selanjutnya, silahkan melakukan  pembayaran  Biaya Pendaftaran sebesar *' . $by . '* ke *No.Rek BRI 0582-01000-847-303 a.n. PP DARUL LUGHAH WAL KAROAH* dan melakukan upload bukti Transfer pada LINK Berikut ini';
            $linkImg = 'https://psb.ppdwk.com/viho/assets/images/logo/Logo-psb.png';
            $tinggal = 'Mukim';
            $bawahan = '_*Catatan Penting :*_
_*Calon santri diwajibkan memakai baju putih, songkok/kerudung hitam saat tes pendaftaran dengan bawahan hitam atau gelap*_';
        }

        $pesan = '*Selamat*
Data yang anda isi telah  tersimpan di data panitia Penerimaan santri baru PP. Darul Lughah Wal Karomah, atas :
        
Nama : ' . $nama . '
Alamat : ' . $alm . '
Lembaga tujuan : ' . $lembaga . ' DWK
jalur : ' . $jalur . '
Gel :  ' . $gel . '
        
' . $tambahan . '
    
*Terimakasih*';

        $pesan2 = '*Info tambahan santri baru*

Nama : ' . $nama . '
Alamat : ' .  $alm . '
Lembaga tujuan : ' . $lembaga . ' DWK
jalur : ' . $jalur . '
Gel :  ' . $gel . '
No. HP : ' . $hp . '
Waktu Daftar : ' . date('d-m-Y H:i:s') . '
            
*Terimakasih*';

        $data = array(
            'id_santri' => $id,
            'nis' => '',
            'nik' => $nik,
            'nisn' => $nisn,
            'nama' => $nama,
            'tempat' => $tempat,
            'tanggal' => $tgl_ok,
            'jkl' => $jkl,
            'lembaga' => $lembaga,
            // 'jln' => $jln,
            // 'rt' => $rt,
            // 'rw' => $rw,
            'desa' => $kelOk,
            'kec' => $kecOk,
            'kab' => $kabOk,
            'prov' => $provOk,
            'bapak' => $bapak,
            'ibu' => $ibu,
            'hp' => $hp,
            'username' => '',
            // 'password' => $ps,
            'stts' => 'Belum Terverifikasi',
            'gel' => $gel,
            'jalur' => $jalur,
            'waktu_daftar' => date('Y-m-d H:i:s'),
            'anak_ke' => $anak_ke,
            'jml_sdr' => $jml,
            // 'a_pkj' => $a_pkj,
            // 'i_pkj' => $i_pkj,
            'no_kk' => $no_kk,
            'ket' => 'baru',
            'tinggal' => $tinggal,
            'asal' => $asal,
            'a_asal' => $a_asal
        );

        $data2 = [
            'id_seragam' => $id,
            'atasan' => $this->input->post('atasan', true),
            'bawahan' => $this->input->post('bawahan', true),
        ];

        if (($cekNik + $cekNikSm) > 0) {
            echo "
            <script>
                alert('Maaf. NIK anda sudah ada');
                window.location = '" . base_url('daftar') . "';
            </script>
            ";
        } else {
            if ($lembaga === '2' || $lembaga === 2) {
                echo "
                    <script>
                        alert('Maaf. Kuota SMP sudah penuh');
                        window.location = '" . base_url('daftar') . "';
                    </script>
                ";
            } else {

                if ($cekLama > 0) {
                    // return false;
                    $this->session->set_flashdata('error', 'Maaf. Nik Anda sudah terdaftar di Santri Aktif');
                    redirect('daftar');
                }
                if ($cekSMPPa >= 55 and $lembaga === 'SMP' and $jkl === 'Laki-laki') {
                    // return false;
                    $this->session->set_flashdata('error', 'Maaf. Kuota SMP Putra sudah penuh');
                    redirect('daftar');
                }
                if ($cekSMPPi >= 55 and $lembaga === 'SMP' and $jkl === 'Perempuan') {
                    // return false;
                    $this->session->set_flashdata('error', 'Maaf. Kuota SMP Putri sudah penuh');
                    redirect('daftar');
                }
                if ($cekMI >= 50 and $lembaga === 'MI') {
                    // return false;
                    $this->session->set_flashdata('error', 'Maaf. Kuota MI sudah penuh');
                    redirect('daftar');
                }
                if ($cekRA >= 46 and $lembaga === 'RA') {
                    // return false;
                    $this->session->set_flashdata('error', 'Maaf. Kuota RA sudah penuh');
                    redirect('daftar');
                }

                $upload_path = FCPATH . '/assets/berkas/';
                $allowed_types = 'jpg|jpeg|png|pdf';
                $max_size = 20480;

                $kk = upload_file('kk', $upload_path . 'kk/', $allowed_types, $max_size, random(10) . '-kk');
                $akta = upload_file('akta', $upload_path . 'akta/', $allowed_types, $max_size, random(10) . '-akta');
                // $ktp_ayah = upload_file('ktp_ayah', $upload_path . 'ktp_ayah/', $allowed_types, $max_size, random(10) . '-ktp_ayah');
                // $ktp_ibu = upload_file('ktp_ibu', $upload_path . 'ktp_ibu/', $allowed_types, $max_size, random(10) . '-ktp_ibu');
                // $ijazah = upload_file('ijazah', $upload_path . 'ijazah/', $allowed_types, $max_size, random(10) . '-ijazah');
                // $kip = upload_file('kip', $upload_path . 'kip/', $allowed_types, $max_size, random(10) . '-kip');
                // $foto = upload_file('foto', $upload_path . 'foto/', $allowed_types, $max_size, random(10) . '-foto');

                // if (is_string($ijazah)) {
                //     $ijazahOk = '';
                // } else {
                //     $ijazahOk = $ijazah['file_name'];
                // }

                // if (is_string($kip)) {
                //     $kipOk = '';
                // } else {
                //     $kipOk = $kip['file_name'];
                // }

                $dataBerkas = [
                    'id_file' => $id,
                    'nis' => '',
                    'kk' => $kk['file_name'],
                    'akta' => $akta['file_name'],
                    // 'ktp_ayah' => $ktp_ayah['file_name'],
                    // 'ktp_ibu' => $ktp_ibu['file_name'],
                    // 'skl' => $ijazahOk,
                    // 'kip' => $kipOk,
                ];

                $dataFoto = [
                    'id_file' => $id,
                    'nis' => '',
                    // 'diri' =>  $foto['file_name'],
                ];

                // proses simpan data



                if ($lembaga === 'MI' || $lembaga === 'RA') {
                    $this->DaftarModel->input_data('tb_santri', $data);
                    if ($this->db->affected_rows() > 0) {
                        kirim_person($key->api_key, $hp, $pesan);
                        kirim_tmp($key->api_key, $hp, 'LINK GROUP', 'Link undangan group', 'Klik link diatas untuk gabung ke grup siswa baru ' . $lembaga . ' DWK', $linkImg, $linkgroup);
                        kirim_group($key->api_key, '120363026604973091@g.us', $pesan2);
                        redirect('daftar/sukses');
                    }
                } else {
                    $this->DaftarModel->input_data('tb_santri_sm', $data);
                    $this->DaftarModel->input_data('berkas_file', $dataBerkas);
                    $this->DaftarModel->input_data('foto_file', $dataFoto);
                    $this->DaftarModel->input_data('seragam', $data2);

                    if ($this->db->affected_rows() > 0) {
                        kirim_person($key->api_key, $hp, $pesan);
                        kirim_tmp($key->api_key, $hp, 'LINK UPLOAD', 'Link upload bukti transfer', 'Klik link diatas untuk upload bukti transfer pendaftaran', $linkImg, 'https://psb.ppdwk.com/data/uploadBukti/' . $id);
                        kirim_person($key->api_key, '085236924510', $pesan);
                        redirect('daftar/sukses');
                    }
                }
            }
        }
    }

    public function sukses()
    {
        $this->load->view('sukses');
    }
}
