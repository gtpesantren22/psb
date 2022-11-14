<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: PSB PPDWK 2023 ::.</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/izitoast/css/iziToast.min.css">
    <link href="<?= base_url(); ?>assets/css/front.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo/Logo_Pesantren.png">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/1.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/2.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/3.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/components2.css">
    <script src="<?= base_url(); ?>assets/modules/sweetalert/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url(); ?>https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Start GA -->


    <style type="text/css">
    .upper {
        text-transform: uppercase;
    }

    .lower {
        text-transform: lowercase;
    }

    .cap {
        text-transform: capitalize;
    }

    .small {
        font-variant: small-caps;
    }
    </style>
</head>

<body data-spy="scroll" data-target="#menu" data-offset="100">
    <div class="home-wrapper" id="home">
        <div class="home-header">
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
                    <a class="navbar-brand" href="<?= base_url(); ?>javascript:;">
                        <img src="<?= base_url(); ?>assets/img/logo/Logo_Pesantren.png" height="75" />
                        <div class="home-header-text d-none d-sm-block">
                            <h5>PENERIMAAN SANTRI BARU</h5>
                            <h6>PONPES DARUL LUGHAH WAL KAROMAH</h6>
                            <h6>Tahun Pelajaran 2023/2024</h6>
                        </div>
                        <span class="logo-mini-unbk d-block d-sm-none">PSB </span>
                        <span class="logo-mini-tahun d-block d-sm-none">_PPDWK 2023</span>
                    </a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu"
                        aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>" id="link-home">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">Daftar
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <a href="<?= base_url() ?>daftar">
                                        <li class="nav-link">Santri Baru</li>
                                    </a>
                                    <a href="<?= base_url('daftar_lama'); ?>">
                                        <li class="nav-link">Santri Lanjutan</li>
                                    </a>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url(); ?>data" id="link-persyaratan">Data
                                    Pendaftar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('login'); ?>" id="link-persyaratan"><i
                                        class="fa fa-lock"></i> Login</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>