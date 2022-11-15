
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

    public function daftarAct()
    {
        $id = Uuid::uuid4();
        $jalur = $this->input->post('reguler');
        $nik = $this->input->post('nik', TRUE);
        $no_kk = $this->input->post('no_kk', TRUE);
        $nama = strtoupper($this->input->post('nama', TRUE));
        $tempat = strtoupper($this->input->post('tempat', TRUE));
        $tanggal = $this->input->post('tanggal', TRUE);
        $bulan = $this->input->post('bulan', TRUE);
        $tahun = $this->input->post('tahun', TRUE);
        $jkl = $this->input->post('jkl', TRUE);
        $anak_ke = $this->input->post('anak_ke', TRUE);
        $jml = $this->input->post('jml', TRUE);
        $lembaga = $this->input->post('lembaga', TRUE);
        $hp = $this->input->post('hp', TRUE);
        $jln = $this->input->post('jln', TRUE);
        $rt = $this->input->post('rt', TRUE);
        $rw = $this->input->post('rw', TRUE);
        $provinsi = $this->input->post('provinsi', TRUE);
        $kabupaten = $this->input->post('kabupaten', TRUE);
        $kecamatan = $this->input->post('kecamatan', TRUE);
        $kelurahan = $this->input->post('kelurahan', TRUE);
        $asal = $this->input->post('asal', TRUE);
        $asal_skl = $this->input->post('asal_skl', TRUE);
        $bapak = strtoupper($this->input->post('bapak', TRUE));
        $ibu = strtoupper($this->input->post('ibu', TRUE));
        $a_pkj = $this->input->post('a_pkj', TRUE);
        $i_pkj = $this->input->post('i_pkj', TRUE);

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
        $cekPa = $this->DaftarModel->cekPa()->num_rows();
        $cekPi = $this->DaftarModel->cekPi()->num_rows();

        $jl = date('Y-m-d');
        $g1 = '2022-02-23';
        $g2 = '2022-03-23';
        $g3 = '2022-03-24';

        if ($jl <= $g1) {
            $gel = "1";
            $by = 'Rp. 50.000';
        } else if ($jl > $g1 && $jl <= $g2) {
            $gel = "2";
            $by = 'Rp. 100.000';
        } else if ($jl >= $g3) {
            $gel = "3";
            $by = 'Rp. 150.000';
        }

        $jk = $jkl == 'Laki-laki' ? '1' : '2';

        $data = $this->db->query("SELECT max(substring(nis, 6)) as maxKode FROM tb_santri WHERE ket = 'baru' ")->row();
        $kodeBarang = $data->maxKode;
        $noUrut = (int) substr($kodeBarang, 0, 3);
        $noUrut++;
        $char = "2023";
        $kodeBarang = $char . $jk . sprintf("%03s", $noUrut);
        $nis = htmlspecialchars($kodeBarang);
        $ps = rand(0, 99999999);

        $alm = $kelOk . '-' . $kecOk . '-' . $kabOk;

        if ($lembaga == 1) {
            $bg = 'MTs DWK';
        } else if ($lembaga == 2) {
            $bg = 'SMP DWK';
        } else if ($lembaga == 3) {
            $bg = 'MA DWK';
        } else if ($lembaga == 4) {
            $bg = 'SMK DWK';
        }

        if ($jalur == 1) {
            $lj = 'Reguler';
        } else {
            $lj = 'Prestasi';
        }

        $pesan = '*Selamat*

Data yang anda isi telah  tersimpan di data panitia Penerimaan santri baru PP. Darul Lughah Wal Karomah, atas :
        
Nama : ' . $nama . '
Alamat : ' . $alm . '
Lembaga tujuan : ' . $bg . '
jalur : ' . $lj . '
Gel :  ' . $gel . '
        
selanjutnya, silahkan melakukan  pembayaran  Biaya Pendaftaran sebesar *' . $by . '* ke *No.Rek BRI 0582-0101-4254-500 a.n. Hadiryanto Putra Pratama* dan melakukan konfirmasi pembayaran disertai bukti transfer ke *No. WA https://wa.me/6282338631044*
    
*Terimakasih*

_*NB : Calon Santri diwajibkan memakai baju putih songkok/kerudung hitam & Bawahan bebas (Ketika tes dan berangkat mondok)*_';

        $pesan2 = '*Info tambahan santri baru*
 
No. Pendaftaran : ' . $nis . '
Nama : ' . $nama . '
Alamat : ' . $alm . '
Lembaga tujuan : ' . $bg . '
jalur : ' . $lj . '
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
            'jln' => $jln,
            'rt' => $rt,
            'rw' => $rw,
            'desa' => $kelOk,
            'kec' => $kecOk,
            'kab' => $kabOk,
            'prov' => $provOk,
            'bapak' => $bapak,
            'ibu' => $ibu,
            'hp' => $hp,
            'username' => $nis,
            'password' => $ps,
            'stts' => 'Belum Terverifikasi',
            'gel' => $gel,
            'jalur' => $jalur,
            'waktu_daftar' => date('Y-m-d H:i:s'),
            'anak_ke' => $anak_ke,
            'jml_sdr' => $jml,
            'a_pkj' => $a_pkj,
            'i_pkj' => $i_pkj,
            'no_kk' => $no_kk,
            'ket' => 'baru',
            'asal' => $asal,
            'a_asal' => $asal_skl
        );

        if ($cekNik == 1) {
            echo "
            <script>
                alert('Maaf. NIK anda sudah ada');
                window.location = '" . base_url('daftar') . "';
            </script>
            ";
        } else {
            
                if ( $lembaga === '2' || $lembaga === 2 ) {
                    echo "
                    <script>
                        alert('Maaf. Kuota SMP sudah penuh');
                        window.location = '" . base_url('daftar') . "';
                    </script>
                ";
                } else {

                    // proses simpan data
                    $this->DaftarModel->input_data('tb_santri', $data);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Success Message...');

                        //PEsan Grup
                        $curl2 = curl_init();
                        curl_setopt_array(
                            $curl2,
                            array(
                                CURLOPT_URL => 'http://8.215.26.187:3000/api/sendMessageGroup',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'POST',
                                CURLOPT_POSTFIELDS => 'apiKey=fb209be1f23625e43cbf285e57c0c0f2&id_group=INPTtXYBKdUF5FS1dEie8m&message=' . $pesan2,
                            )
                        );
                        $response = curl_exec($curl2);
                        curl_close($curl2);

                        // Pesan HP
                        $curl = curl_init();
                        curl_setopt_array(
                            $curl,
                            array(
                                CURLOPT_URL => 'http://8.215.26.187:3000/api/sendMessage',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'POST',
                                CURLOPT_POSTFIELDS => 'apiKey=fb209be1f23625e43cbf285e57c0c0f2&phone=' . $hp . '&message=' . $pesan,
                            )
                        );
                        $response = curl_exec($curl);
                        curl_close($curl);
                        // echo $result;

                        redirect(base_url('data'));
                    }
                }
            }
        
    }
}
