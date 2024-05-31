<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= base_url('') ?>assets/img/logo/Logo_Pesantren.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo/Logo_Pesantren.png">
    <title>.:: PSB PPDWK 2024/2025 ::.</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/owlcarousel.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url('viho/') ?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/responsive.css">

    <style>
        #loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading-spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid #ffffff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="landing-wrraper">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- header start-->
            <header class="landing-header">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="navbar navbar-light p-0" id="navbar-example2"><a class="navbar-brand" href="<?= base_url() ?>">PSB DWK</a>
                                <div class="buy-block"><a class="btn-landing" href="<?= base_url('') ?>"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    <!-- <div class="toggle-menu"><i class="fa fa-bars"></i></div> -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header end-->

            <!-- Spinner loader -->
            <div id="loading-overlay">
                <div class="loading-spinner"></div>
            </div>

            <!--unic-cards start-->
            <section class="unique-cards section-py-space mt-10">
                <div class="title">
                    <h1>&nbsp;</h1>
                    <h2>Formulir Pendaftaran</h2>
                </div>
                <div class="custom-container">
                    <div class="card">
                        <div class="card-body">
                            <form class="theme-form needs-validation" novalidate="" method="post" action="<?= base_url('daftar/daftarAct') ?>" enctype="multipart/form-data">
                                <div class="alert alert-info dark" role="alert">
                                    <b>Biodata Santri</b>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputEmail3">NIK <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="nik" placeholder="NIK" maxlength="16" minlength="16" required>
                                        <div class="invalid-feedback">NIK Wajib diisi dan harus 16 angka</div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputPassword3">No. KK <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="no_kk" placeholder="No. KK" maxlength="16" minlength="16" required>
                                        <div class="invalid-feedback">No.KK Wajib diisi dan harus 16 angka</div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputPassword3">NISN</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="nisn" placeholder="NISN">
                                        <small class="form-text text-muted"> NISN bisa dicek di Web berkut ini <a href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" target="_blank"><b>CARI DISINI</b></a></small>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputPassword3">Nama Lengkap <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                                        <div class="invalid-feedback">Nama Lengkap Wajib diisi</div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputPassword3">Tempat Lahir <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="tempat" placeholder="Tempat Lahir" required>
                                        <div class="invalid-feedback">Tempat Lahir Wajib diisi</div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputPassword3">Tanggal Lahir <small class="text-danger">*</small></label>
                                    <div class="col-sm-9 input-group-solid">
                                        <div class="input-group">
                                            <select class="form-control" name="tanggal" required>
                                                <option value=""> -tanggal- </option>
                                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                    <option value="<?= $i; ?>"><?= $i; ?></option>
                                                <?php } ?>
                                            </select>
                                            <select class="form-control" name="bulan" required>
                                                <option value=""> -bulan- </option>
                                                <?php
                                                for ($i = 1; $i <= 12; $i++) { ?>
                                                    <option value="<?= $i; ?>"><?= bulan($i); ?></option>
                                                <?php } ?>
                                            </select>
                                            <select class="form-control" name="tahun" required>
                                                <option value=""> -tahun- </option>
                                                <?php for ($i = 1990; $i <= date('Y'); $i++) { ?>
                                                    <option value="<?= $i; ?>"><?= $i; ?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="invalid-feedback">Tanggal Lahir Wajib diisi</div>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="mb-3">
                                    <div class="row">
                                        <label class="form-label col-sm-3 pt-0">Jenis Kelamin <small class="text-danger">*</small></label>
                                        <div class="col-sm-9">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio11" name="jkl" value="Laki-laki" required>
                                                <label class="form-check-label" for="radio11">Laki-laki</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio22" name="jkl" value="Perempuan" required>
                                                <label class="form-check-label" for="radio22">Perempuan</label>
                                            </div>
                                            <div class="invalid-feedback">Jenis Kelamin Wajib diisi</div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputPassword3">Alamat <small class="text-danger">*</small></label>
                                    <div class="col-sm-9 input-group-solid">
                                        <div class="input-group">
                                            <select name="provinsi" id="provinsi" class="form-control" required>
                                                <option value="">Pilih Provinsi</option>
                                                <?php
                                                foreach ($hasil as $value) {
                                                    echo "<option value='" . $value->id_prov . "'>" . $value->nama . "</option>";
                                                }
                                                ?>
                                            </select>
                                            <select id="kota" name="kabupaten" class="form-control" required>
                                                <option value="">Pilih Kabupaten</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select id="kec" name="kecamatan" class="form-control " required>
                                                <option value="">Pilih kecamatan</option>
                                            </select>

                                            <select id="kel" name="kelurahan" class="form-control " required>
                                                <option value="">Pilih kelurahan</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">Alamat Wajib diisi</div>
                                    </div>
                                </div>
                                <!-- <hr> -->
                                <div class="alert alert-info dark" role="alert">
                                    <b>Biodata Keluarga</b>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputEmail3">Nama Bapak <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="inputEmail3" type="text" name="bapak" placeholder="Nama Bapak" required>
                                        <div class="invalid-feedback">Nama Bapak Wajib diisi</div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputPassword3">Nama Ibu <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="inputPassword3" type="text" name="ibu" placeholder="Nama Ibu" required>
                                        <div class="invalid-feedback">Nama Ibu Wajib diisi</div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputPassword3">Saudara <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="anak_ke" required placeholder="Anak ke">
                                            <input type="number" class="form-control" name="jml_sdr" required placeholder="Jumlah Saudara">
                                        </div>
                                        <div class="invalid-feedback">Saudara Wajib diisi</div>
                                    </div>
                                </div>
                                <!-- <hr> -->
                                <div class="alert alert-info dark" role="alert">
                                    <b>Pendidikan</b>
                                </div>
                                <fieldset class="mb-3">
                                    <div class="row">
                                        <label class="form-label col-sm-3 pt-0">Lembaga Pilihan <small class="text-danger">*</small></label>
                                        <div class="col-sm-9">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="RA" name="lembaga" value="RA" required>
                                                <label class="form-check-label" for="RA">RA DWK</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="MI" name="lembaga" value="MI" required>
                                                <label class="form-check-label" for="MI">MI DWK</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="MTs" name="lembaga" value="MTs" required>
                                                <label class="form-check-label" for="MTs">MTs DWK</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="SMP" name="lembaga" value="SMP" required>
                                                <label class="form-check-label" for="SMP">SMP DWK</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="MA" name="lembaga" value="MA" required>
                                                <label class="form-check-label" for="MA">MA DWK</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="SMK" name="lembaga" value="SMK" required>
                                                <label class="form-check-label" for="SMK">SMK DWK</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="Mahasiswa" name="lembaga" value="Mahasiswa" required>
                                                <label class="form-check-label" for="Mahasiswa">Mahasiswa</label>
                                            </div>
                                            <div class="invalid-feedback">Lembaga Pilihan Wajib diisi</div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputEmail3">Nama Sekolah Asal <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="asal" placeholder="Nama Sekolah Asal" required>
                                        <div class="invalid-feedback">Nama Sekolah Asal Wajib diisi</div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputPassword3">Alamat Sekolah Asal <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="a_asal" placeholder="Alamat Sekolah Asal" required>
                                        <div class="invalid-feedback">Alamat Sekolah Asal Wajib diisi</div>
                                    </div>
                                </div>
                                <div class="alert alert-info dark" role="alert">
                                    <b>Lain-lain</b>
                                </div>
                                <p class="text-danger"><b>Diharapkan untuk membaca panduan berikut sebelum melakukan pemilihan ukuran seragam.</b> <a href="<?= base_url('welcome/unduh/4') ?>">Baca Disini</a></p>
                                <fieldset class="mb-3">
                                    <div class="row">
                                        <label class="form-label col-sm-3 pt-0">Ukuran Seragam Atasan (Baju) <small class="text-danger">*</small></label>
                                        <div class="col-sm-9">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radioS" name="atasan" value="S" required>
                                                <label class="form-check-label" for="radioS">S</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radioM" name="atasan" value="M" required>
                                                <label class="form-check-label" for="radioM">M</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radioL" name="atasan" value="L" required>
                                                <label class="for-check-label" for="radioL">L</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radioXL" name="atasan" value="XL" required>
                                                <label class="form-check-label" for="radioXL">XL</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radioXXL" name="atasan" value="XXL" required>
                                                <label class="form-check-label" for="radioXXL">XXL</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radioXXXL" name="atasan" value="XXXL" required>
                                                <label class="form-check-label" for="radioXXXL">XXXL</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio0" name="atasan" value="0" required>
                                                <label class="form-check-label" for="radio0">Tidak tahu</label>
                                            </div>
                                            <div class="invalid-feedback">Jenis Kelamin Wajib diisi</div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="mb-3">
                                    <div class="row">
                                        <label class="form-label col-sm-3 pt-0">Ukuran Seragam Bawahan (Rok/Celana) <small class="text-danger">*</small></label>
                                        <div class="col-sm-9">
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio26" name="bawahan" value="26" required>
                                                <label class="form-check-label" for="radio26">No. 26</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio27" name="bawahan" value="27" required>
                                                <label class="form-check-label" for="radio27">No. 27</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio28" name="bawahan" value="28" required>
                                                <label class="for-check-label" for="radio28">No. 28</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio29" name="bawahan" value="29" required>
                                                <label class="form-check-label" for="radio29">No. 29</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio30" name="bawahan" value="30" required>
                                                <label class="form-check-label" for="radio30">No. 30</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio31" name="bawahan" value="31" required>
                                                <label class="form-check-label" for="radio31">No. 31</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio32" name="bawahan" value="32" required>
                                                <label class="form-check-label" for="radio32">No. 32</label>
                                            </div>
                                            <div class="form-check radio radio-primary">
                                                <input class="form-check-input" type="radio" id="radio01" name="bawahan" value="0" required>
                                                <label class="form-check-label" for="radio01">Tidak tahu</label>
                                            </div>
                                            <div class="invalid-feedback">Jenis Kelamin Wajib diisi</div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="inputEmail3">No. HP <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="hp" placeholder="No. HP" required>
                                        <div class="invalid-feedback">No.HP Wajib diisi</div>
                                        <small class="form-text text-danger"> Diisi dengan No.HP WhatsApp karena informasi akan di kirimkan ke No tersebut. dengan format : 085xxxxxxxxxx</small>
                                    </div>
                                </div>
                                <div class="alert alert-info dark" role="alert">
                                    <b>Upload Berkas</b>
                                </div>
                                Berkas-berkas yang akan diupload
                                <ol>
                                    <li>Foto/Scan Kartu Keluarga <i class="text-danger">(Wajib Upload)</i></li>
                                    <li>Foto/Scan Akta Kelahiran <i class="text-danger">(Wajib Upload)</i></li>
                                    <!-- <li>Foto/Scan KTP Ayah</li>
                                    <li>Foto/Scan KTP Ibu</li>
                                    <li>Foto/Scan Ijazah/SKL/Raport Terakhir <i class="text-danger">(Bisa menyusul)</i></li>
                                    <li>Foto/Scan Kartu KIP (Bagi yang memiliki) <i class="text-danger">(Tidak wajib)</i></li> -->
                                    <!-- <li>Pas Foto Santri 4x6 (Memakai Songkok/Kerudung Hitam, Baju putih)</li> -->
                                </ol>
                                <small class="form-text text-danger"> Upload foto/scan berkas-berkas diatas dalam bentuk Gambar (JPG/PNG/JPEG) atau PDF</small>
                                <hr>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="">Foto/Scan Kartu Keluarga <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="kk" id="fileInput_kk" required>
                                        <div id="fileDisplay_kk" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="">Foto/Scan Akta Kelahiran <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="akta" id="fileInput_akta" required>
                                        <div id="fileDisplay_akta" style="display: none;"></div>
                                    </div>
                                </div>
                                <!-- <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="">Foto/Scan KTP Ayah <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="ktp_ayah" id="fileInput_ktp_ayah" required>
                                        <div id="fileDisplay_ktp_ayah" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="">Foto/Scan KTP Ibu <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="ktp_ibu" id="fileInput_ktp_ibu" required>
                                        <div id="fileDisplay_ktp_ibu" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="">Foto/Scan Ijazah/SKL/Raport</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="ijazah" id="fileInput_ijazah">
                                        <div id="fileDisplay_ijazah" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="">Foto/Scan Kartu KIP</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="kip" id="fileInput_kip">
                                        <div id="fileDisplay_kip" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 form-label" for="">Pas Foto Santri <small class="text-danger">*</small></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="foto" id="fileInput_foto" required>
                                        <div id="fileDisplay_foto" style="display: none;"></div>
                                    </div>
                                </div> -->

                                <div class="alert alert-info dark" role="alert">
                                    <!-- <b>Upload Berkas</b> -->
                                </div>
                                <div class="mb-3 row">
                                    <div class="checkbox p-3">
                                        <div class="checkbox checkbox-primary">
                                            <input class="form-check-input" id="invalidCheck" type="checkbox" required="">
                                            <label class="form-check-label" for="invalidCheck">Saya yakin bahwa data diatas adalah data valid berdasarkan Kartu Keluarga <i class="text-danger">(Centang)</i></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p>Saya yakin bahwa data diatas adalah data valid berdasarkan Kartu Keluarga</p> -->
                                <button class="btn btn-sm btn-success " type="submit"><i class="fa fa-check-square"></i> Daftar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!--unic-cards end-->

            <!--footer start-->

            <div class="sub-footer">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-md-6 col-sm-2">
                            <!-- <div class="footer-contain"><img class="img-fluid" src="<?= base_url('viho/') ?>assets/images/logo/logo.png" alt=""></div> -->
                        </div>
                        <div class="col-md-6 col-sm-10">
                            <div class="footer-contain">
                                <p class="mb-0">Copyright 2024-25 © Tim IT - PSB PPDWK </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer end-->
        </div>
    </div>
    <!-- latest jquery-->
    <script src="<?= base_url('viho/') ?>assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url('viho/') ?>assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?= base_url('viho/') ?>assets/js/sidebar-menu.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url('viho/') ?>assets/js/bootstrap/popper.min.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="<?= base_url('viho/') ?>assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/owlcarousel/owl-custom.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/landing_sticky.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/landing.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/jarallax_libs/libs.min.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?= base_url('viho/') ?>assets/js/form-validation-custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url('viho/') ?>assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var loadingOverlay = document.getElementById("loading-overlay");

            // Fungsi untuk menampilkan loading
            function showLoading() {
                loadingOverlay.style.display = "flex";
            }

            // Fungsi untuk menyembunyikan loading
            function hideLoading() {
                loadingOverlay.style.display = "none";
            }

            // Menambahkan event listener untuk mengatur tampilan loading saat halaman sedang dimuat
            window.addEventListener("beforeunload", function() {
                showLoading();
            });

            // Menambahkan event listener untuk menyembunyikan loading setelah halaman selesai dimuat
            window.addEventListener("load", function() {
                hideLoading();
            });
        });

        $('.datepicker').datepicker({
            autoclose: true
        })
    </script>
    <script>
        $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
            // Kita sembunyikan dulu untuk loadingnya
            $("#loading").hide();

            $("#provinsi").change(function() { // Ketika user mengganti atau memilih data provinsi
                $("#kota").hide(); // Sembunyikan dulu combobox kota nya
                $("#loading").show(); // Tampilkan loadingnya

                $.ajax({
                    type: "POST", // Method pengiriman data bisa dengan GET atau POST
                    url: "<?php echo base_url("daftar/listKota"); ?>", // Isi dengan url/path file php yang dituju
                    data: {
                        id_provinsi: $("#provinsi").val()
                    }, // data yang akan dikirim ke file yang dituju
                    dataType: "json",
                    beforeSend: function(e) {
                        if (e && e.overrideMimeType) {
                            e.overrideMimeType("application/json;charset=UTF-8");
                        }
                    },
                    success: function(response) { // Ketika proses pengiriman berhasil
                        $("#loading").hide(); // Sembunyikan loadingnya

                        // set isi dari combobox kota
                        // lalu munculkan kembali combobox kotanya
                        $("#kota").html(response.list_kota).show();
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" +
                            thrownError); // Munculkan alert error
                    }
                });
            });

            $("#kota").change(function() { // Ketika user mengganti atau memilih data provinsi
                $("#kec").hide(); // Sembunyikan dulu combobox kota nya
                $("#loading").show(); // Tampilkan loadingnya

                $.ajax({
                    type: "POST", // Method pengiriman data bisa dengan GET atau POST
                    url: "<?php echo base_url("daftar/listKec"); ?>", // Isi dengan url/path file php yang dituju
                    data: {
                        id_kab: $("#kota").val()
                    }, // data yang akan dikirim ke file yang dituju
                    dataType: "json",
                    beforeSend: function(e) {
                        if (e && e.overrideMimeType) {
                            e.overrideMimeType("application/json;charset=UTF-8");
                        }
                    },
                    success: function(response) { // Ketika proses pengiriman berhasil
                        $("#loading").hide(); // Sembunyikan loadingnya

                        // set isi dari combobox kota
                        // lalu munculkan kembali combobox kotanya
                        $("#kec").html(response.list_kec).show();
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" +
                            thrownError); // Munculkan alert error
                    }
                });
            });

            $("#kec").change(function() { // Ketika user mengganti atau memilih data provinsi
                $("#kel").hide(); // Sembunyikan dulu combobox kota nya
                $("#loading").show(); // Tampilkan loadingnya

                $.ajax({
                    type: "POST", // Method pengiriman data bisa dengan GET atau POST
                    url: "<?php echo base_url("daftar/listDesa"); ?>", // Isi dengan url/path file php yang dituju
                    data: {
                        id_kec: $("#kec").val()
                    }, // data yang akan dikirim ke file yang dituju
                    dataType: "json",
                    beforeSend: function(e) {
                        if (e && e.overrideMimeType) {
                            e.overrideMimeType("application/json;charset=UTF-8");
                        }
                    },
                    success: function(response) { // Ketika proses pengiriman berhasil
                        $("#loading").hide(); // Sembunyikan loadingnya

                        // set isi dari combobox kota
                        // lalu munculkan kembali combobox kotanya
                        $("#kel").html(response.list_desa).show();
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" +
                            thrownError); // Munculkan alert error
                    }
                });
            });
        });
    </script>

    <script>
        function setupFileInput(inputId, displayId) {
            const fileInput = document.getElementById(inputId);
            const fileDisplay = document.getElementById(displayId);

            fileInput.addEventListener('change', function() {
                const selectedFile = fileInput.files[0]; // Mengambil berkas yang dipilih oleh pengguna

                if (selectedFile) {
                    // Lakukan validasi tipe berkas dan ukuran jika diperlukan
                    if (!isValidFileType(selectedFile)) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Validasi Gagal',
                            text: 'Tipe berkas tidak valid. Hanya gambar (jpg, jpeg, png) dan PDF yang diterima.'
                        });
                        fileInput.value = ''; // Reset input file
                        return;
                    }

                    if (!isValidFileSize(selectedFile)) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Validasi Gagal',
                            text: 'Ukuran berkas terlalu besar. Maksimum 15 MB.'
                        });
                        fileInput.value = ''; // Reset input file
                        return;
                    }

                    // Menampilkan berkas yang dipilih setelah validasi berhasil
                    fileDisplay.style.display = 'block';
                    fileDisplay.innerHTML = `Berkas yang dipilih: ${selectedFile.name}`;

                    // Tampilkan pesan sukses
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Sukses',
                    //     text: 'Berkas valid : ' + selectedFile.name
                    // });
                } else {
                    Swal.fire({
                        icon: 'info',
                        title: 'Info',
                        text: 'Tidak ada berkas yang dipilih.'
                    });
                }
            });
        }

        setupFileInput('fileInput_kk', 'fileDisplay_kk');
        setupFileInput('fileInput_akta', 'fileDisplay_akta');
        // setupFileInput('fileInput_ktp_ayah', 'fileDisplay_ktp_ayah');
        // setupFileInput('fileInput_ktp_ibu', 'fileDisplay_ktp_ibu');
        // setupFileInput('fileInput_ijazah', 'fileDisplay_ijazah');
        // setupFileInput('fileInput_kip', 'fileDisplay_kip');
        // setupFileInput('fileInput_foto', 'fileDisplay_foto');

        function isValidFileType(file) {
            // Contoh: Hanya menerima gambar (jpg, jpeg, png) dan PDF
            const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
            return allowedTypes.includes(file.type);
        }

        function isValidFileSize(file) {
            // Contoh: Maksimum 15 MB
            return file.size <= 15 * 1024 * 1024;
        }
    </script>

</body>

</html>