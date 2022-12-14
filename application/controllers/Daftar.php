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
    }


    public function index()
    {
        $data['hasilP'] = $this->DaftarModel->getPkj();
        $data['hasil'] = $this->DaftarModel->getprov();
        $data['provinsi'] = $this->ProvinsiModel->view();

        $this->load->view('layout/head', $data);
        $this->load->view('daftar_baru', $data);
        $this->load->view('layout/foot', $data);
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
        $nama = strtoupper($this->input->post('nama', TRUE));
        $tempat = strtoupper($this->input->post('tempat', TRUE));
        $tanggal = $this->input->post('tanggal', TRUE);
        $bulan = $this->input->post('bulan', TRUE);
        $tahun = $this->input->post('tahun', TRUE);
        $jkl = $this->input->post('jkl', TRUE);
        // $anak_ke = $this->input->post('anak_ke', TRUE);
        // $jml = $this->input->post('jml', TRUE);
        $lembaga = $this->input->post('lembaga', TRUE);
        $hp = $this->input->post('hp', TRUE);
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


        // $asal = $this->input->post('asal', TRUE);
        // $asal_skl = $this->input->post('asal_skl', TRUE);
        // $bapak = strtoupper($this->input->post('bapak', TRUE));
        // $ibu = strtoupper($this->input->post('ibu', TRUE));
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

        $jl = date('Y-m-d');
        $g1 = '2023-01-28';
        $g2 = '2023-03-11';
        $g3 = '2023-03-12';

        if ($jl <= $g1) {
            $gel = "1";
            $by = 'Rp. 70.000';
        } else if ($jl > $g1 && $jl <= $g2) {
            $gel = "2";
            $by = 'Rp. 120.000';
        } else if ($jl >= $g3) {
            $gel = "3";
            $by = 'Rp. 170.000';
        }

        $jk = $jkl == 'Laki-laki' ? '1' : '2';

        $data = $this->db->query("SELECT max(substring(nis, 6)) as maxKode FROM tb_santri WHERE ket = 'baru' ")->row();
        $kodeBarang = $data->maxKode;
        $noUrut = (int) substr($kodeBarang, 0, 3);
        $noUrut++;
        $char = "2023";
        $kodeBarang = $char . $jk . sprintf("%03s", $noUrut);
        $nis = htmlspecialchars($kodeBarang);

        $alm = $kelOk . '-' . $kecOk . '-' . $kabOk;



        if ($lembaga === 'RA') {
            $tambahan = 'Silahkan bergabung ke Grup Siswa Baru MI DWK untuk mengetahui informasi lebih lanjut dengan mengklik link dipaling bawah';
            $tmp = array(array('url' => 'https://chat.whatsapp.com/Eqwog9EcvmzHXz4hZX14Fc', 'text' => 'Klik disini untuk bergabung'));
            $tinggal = 'Non Mukim';
            $bawahan = '
_*Catatan Penting :*_
*- Wali murid segera menyetorkan berkas yang dibutuhkan kepada lembaga (Fotocopy KK, KTP bapak  ibu, Akta Kelahiran)*';
        } elseif ($lembaga === 'RA') {
            $tambahan = 'Silahkan bergabung ke Grup Siswa Baru RA DWK untuk mengetahui informasi lebih lanjut dengan mengklik link dipaling bawah.';
            $tmp = array(array('url' => 'https://chat.whatsapp.com/LhePAcQXgD8HWz3O8YJdNF', 'text' => 'Klik disini untuk bergabung'));
            $tinggal = 'Non Mukim';
            $bawahan = '
_*Catatan Penting :*_
*- Wali murid segera menyetorkan berkas yang dibutuhkan kepada lembaga (Fotocopy KK, KTP bapak  ibu, Akta Kelahiran)*';
        } else {
            $tambahan = 'selanjutnya, silahkan melakukan  pembayaran  Biaya Pendaftaran sebesar *' . $by . '* ke *No.Rek BRI 0582-0101-4254-500 a.n. Hadiryanto Putra Pratama* dan melakukan konfirmasi pembayaran disertai bukti transfer ke *No. WA 082338631044*';
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
    
*Terimakasih*

' . $bawahan;

        $pesan2 = '*Info tambahan santri baru*
 
No. Pendaftaran : ' . $nis . '
Nama : ' . $nama . '
Alamat : ' . $alm . '
Lembaga tujuan : ' . $lembaga . ' DWK
jalur : ' . $jalur . '
Gel :  ' . $gel . '
No. HP : ' . $hp . '
Waktu Daftar : ' . date('d-m-Y H:i:s') . '
            
*Terimakasih*';

        $data = array(
            'id_santri' => $id,
            'nis' => $nis,
            'nik' => $nik,
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
            // 'bapak' => $bapak,
            // 'ibu' => $ibu,
            'hp' => $hp,
            'username' => $nis,
            // 'password' => $ps,
            'stts' => 'Belum Terverifikasi',
            'gel' => $gel,
            'jalur' => $jalur,
            'waktu_daftar' => date('Y-m-d H:i:s'),
            // 'anak_ke' => $anak_ke,
            // 'jml_sdr' => $jml,
            // 'a_pkj' => $a_pkj,
            // 'i_pkj' => $i_pkj,
            'no_kk' => $no_kk,
            'ket' => 'baru',
            'tinggal' => $tinggal
            // 'a_asal' => $asal_skl
        );

        if ($cekNik > 0) {
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

                if ($cekSMPPa >= 55 AND $lembaga === 'SMP' AND $jkl === 'Laki-laki') {
                    // return false;
                    $this->session->set_flashdata('error', 'Maaf. Kuota SMP Putra sudah penuh');
                    redirect('daftar');
                }
                if ($cekSMPPi >= 55 AND $lembaga === 'SMP' and $jkl === 'Perempuan') {
                    // return false;
                    $this->session->set_flashdata('error', 'Maaf. Kuota SMP Putri sudah penuh');
                    redirect('daftar');
                }
                if ($cekMI >= 40 AND $lembaga === 'MI') {
                    // return false;
                    $this->session->set_flashdata('error', 'Maaf. Kuota MI sudah penuh');
                    redirect('daftar');
                }
                if ($cekRA >= 40 AND $lembaga === 'RA') {
                    // return false;
                    $this->session->set_flashdata('error', 'Maaf. Kuota RA sudah penuh');
                    redirect('daftar');
                }

                // proses simpan data
                $this->DaftarModel->input_data('tb_santri', $data);
                $this->DaftarModel->input_data('berkas_file', ['nis' => $nis]);
                $this->DaftarModel->input_data('foto_file', ['nis' => $nis]);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Pesan');
                    //PEsan Grup

                    if ($lembaga === 'MI' || $lembaga === 'RA') {
                        kirim_tmp($key->api_key, $hp, $pesan, $tmp, 'https://i.postimg.cc/8c8fghZq/LOGO-WA.jpg');
                        kirim_group($key->api_key, '120363026604973091@g.us', $pesan2);
                    } else {
                        kirim_person($key->api_key, $hp, $pesan);
                        kirim_group($key->api_key, '120363026604973091@g.us', $pesan2);
                    }
                    redirect('data');
                }
            }
        }
    }
}