<?php

?>
<!DOCTYPE html>

<html lang="en" translate="no">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="google" content="notranslate" />

    <title>.:: PSB PPDWK 2022 ::.</title>

    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/img/logo/Logo_Pesantren.png">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/izitoast/dist/css/iziToast.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/font-awesome/css/font-awesome.css">

    <!-- <link rel="stylesheet" href="<?= base_url(); ?>css/login.bundle.1.0.3.min.css"> -->
    <!-- <script src="<?= base_url(); ?>css/login.bundle.1.0.3.min.js" type="text/javascript"></script> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">

</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100" style="height:100vh">
                <div style="overflow-y: auto; height: 100vh;">

                    <div class="card p-4">
                        <div class="card-body">
                            <div class="d-lg mb-3 text-center">
                                <img height="110px" src="<?= base_url(); ?>assets/img/logo/Logo_Pesantren.png" alt="Logo">

                                </img>
                            </div>
                            <center>
                                <h5>Form Pendaftaran Santri Lanjutan</h5>
                            </center>
                            <center>
                                <h4 style="font-weight:bold;"> PONPES DARUL LUGHAH WAL KAROMAH</h4>
                            </center>


                            <p><a href="#" class="btn btn-danger btn-block btn-login">
                                    Tahun ajaran 2022/2023</a>.</p>

                            <?= form_open('daftar_lama/daftarAct'); ?>
                            <div class="card-body">
                                <input type="date" name="tgl_daftar" class="form-control datepicker" value="" hidden>
                                <?php
                                foreach ($santri as $row) :
                                    $tanggal = $row['tanggal'];
                                    $thr = explode('-', $tanggal);
                                ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="asal_sekolah">NIS *</label><br>
                                                <input type="text" name="nis" class="form-control" value="<?= $row['nis']; ?>" readonly>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">NIK</label>
                                                    <input type="text" maxlength="16" class="form-control" name="nik" value="<?= $row['nik']; ?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">No. KK</label>
                                                    <input type="text" maxlength="16" class="form-control" name="no_kk" value="<?= $row['no_kk']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="asal_sekolah">Nama Lengkap *</label>
                                                <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="asal_sekolah">Tempat Lahir *</label>
                                                <input type="text" class="form-control" name="tempat" value="<?= $row['tempat']; ?>" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="nisn">Tanggal Lahir *</label>
                                                    <select class="form-control" name="tanggal" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                            <option <?= $thr[0] == $i ? 'selected' : '' ?> value="<?= $i; ?>"><?= $i; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="nisn">Bulan *</label>
                                                    <select class="form-control" name="bulan" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "July", "Agustus", "September", "Oktober", "November", "Desember");

                                                        for ($i = 1; $i <= 12; $i++) { ?>
                                                            <option <?= $thr[1] == $i ? 'selected' : '' ?> value="<?= $i; ?>"><?= $bulan[$i]; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="nisn">Tahun *</label>
                                                    <select class="form-control" name="tahun" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php for ($i = 1980; $i <= date('Y'); $i++) { ?>
                                                            <option <?= $thr[2] == $i ? 'selected' : '' ?> value="<?= $i; ?>"><?= $i; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="asal_sekolah">Jenis Kelamin *</label><br>
                                                <input type="radio" name="jkl" value="Laki-laki" required <?= $row['jkl'] == 'Laki-laki' ? 'checked' : '' ?> /> Laki-laki
                                                <input type="radio" name="jkl" value="Perempuan" required <?= $row['jkl'] == 'Perempuan' ? 'checked' : '' ?> /> Perempuan
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Anak ke *</label>
                                                    <input type="number" class="form-control" name="anak_ke" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">Jml Saudara *</label>
                                                    <input type="number" class="form-control" name="jml" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="asal_sekolah">Lembaga Tujuan *</label><br>
                                                <input type="radio" name="lembaga" value="3" required /> MA
                                                <input type="radio" name="lembaga" value="4" required /> SMK
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword4">No. HP</label>
                                                <input type="number" class="form-control" name="hp" value="<?= $row['hp'] ?>" required>
                                                <span style="color: red; font-weight: bold; font-style: italic;">* Harap isi dengan No WA aktif. Karena akan ada pesan WA setelah anda daftar</span>
                                            </div>

                                        </div>
                                        <div class="col-md-1">
                                            &nbsp;
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="inputPassword4">Jl / Dusun *</label>
                                                <input type="text" class="form-control" name="jln" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">RT *</label>
                                                    <input type="number" class="form-control" name="rt" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">RW *</label>
                                                    <input type="number" class="form-control" name="rw" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Provinsi *</label>
                                                    <select name="provinsi" id="provinsi" class="form-control" required>
                                                        <option value="">Pilih Provinsi</option>
                                                        <?php
                                                        foreach ($hasil as $value) {
                                                            echo "<option value='" . $value->id_prov . "'>" . $value->nama . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">Kabupaten/Kota *</label>
                                                    <select id="kota" name="kabupaten" class="form-control" required>
                                                        <option value="">Pilih Kabupaten</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Kecamatan *</label>
                                                    <select id="kec" name="kecamatan" class="form-control " required>
                                                        <option value="">Pilih kecamatan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">Desa *</label>
                                                    <select id="kel" name="kelurahan" class="form-control " required>
                                                        <option value="">Pilih kelurahan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4">Sekolah Asal *</label>
                                                <input type="text" class="form-control" name="asal" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4">Alamat Sekolah Asal *</label>
                                                <input type="text" class="form-control" name="asal_skl" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Nama Bapak *</label>
                                                    <input type="text" class="form-control" name="bapak" value="<?= $row['bapak'] ?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">Nama Ibu *</label>
                                                    <input type="text" class="form-control" name="ibu" value="<?= $row['ibu'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Pekerjaan Bapak *</label>
                                                    <select class="form-control" name="a_pkj" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        foreach ($hasilP as $value) {
                                                            echo "<option value='" . $value->nama . "'>" . $value->nama . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">Pekerjaan Ibu *</label>
                                                    <select class="form-control" name="i_pkj" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        foreach ($hasilP as $value) {
                                                            echo "<option value='" . $value->nama . "'>" . $value->nama . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-lg-12">
                                    <button type="submit" id="btnsimpan" class="btn btn-primary btn-block"><i class="fa fa-check-square fa-lg fa-fw"></i> Daftar</button>
                                </div>
                            </div>
                            <?= form_close(); ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="<?= base_url('daftar_lama') ?>">
                                        <button class="btn btn-warning btn-block"><i class="fa fa-arrow-left fa-lg fa-fw"></i> Kembali</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Essential javascripts for application to work-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script script src="<?= base_url(); ?>js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="<?= base_url(); ?>js/popper.min.js"></script> -->
    <!-- <script src="<?= base_url(); ?>js/bootstrap.min.js"></script> -->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <!-- <script src="<?= base_url(); ?>assets/js/plugins/pace.min.js"></script> -->
    <!-- Page specific javascripts-->
    <!-- <script type="text/javascript" src="<?= base_url(); ?>js/plugins/bootstrap-notify.min.js"></script> -->
    <!-- <script type="text/javascript" src="<?= base_url(); ?>js/plugins/sweetalert.min.js"></script> -->


    <script src="<?= base_url(); ?>assets/modules/izitoast/dist/js/iziToast.min.js"></script>

</body>

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
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
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
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
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
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            });
        });
    });
</script>

</html>