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

                            <?= form_open('daftar_lama/cari'); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="asal_sekolah">Cari santri berdasarkan NIS *</label><br>
                                            <input type="text" name="nis" placeholder="Masukan nis" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-lg-12">
                                    <button type="submit" id="btnsimpan" class="btn btn-primary btn-block"><i class="fa fa-search fa-lg fa-fw"></i> Cari santri</button>
                                </div>
                            </div>
                            <?= form_close(); ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="<?= base_url() ?>">
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

</html>