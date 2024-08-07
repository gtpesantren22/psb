<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman User | PSB DWK '24</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/dist/css/skins/_all-skins.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-green layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="<?= base_url('user') ?>" class="navbar-brand"><b>PSB PPDWK </b>2024</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="<?= $menu === 'home' ? 'active' : '' ?>"><a href="<?= base_url('user') ?>">Home
                                    <span class="sr-only">(current)</span></a></li>
                            <li class="dropdown <?= $menu === 'identitas' ? 'active' : '' ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kelengkapan Santri <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= base_url('equipt') ?>"><i class="fa fa-angle-right"></i>Identitas
                                            Santri</a></li>
                                    <li><a href="<?= base_url('equipt/file') ?>"><i class="fa fa-angle-right"></i>Berkas
                                            Pendaftaran</a></li>
                                </ul>
                            </li>
                            <li class="dropdown <?= $menu === 'regist' ? 'active' : '' ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrasi <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= base_url('regist'); ?>"><i class="fa fa-angle-right"></i>Biaya
                                            Pendaftaran</a></li>
                                    <li><a href="<?= base_url('regist/ulang'); ?>"><i class="fa fa-angle-right"></i>Biaya
                                            Registrasi Ulang</a></li>
                                </ul>
                            </li>
                            <li class="<?= $menu === 'info' ? 'active' : '' ?>"><a href="<?= base_url('info') ?>"><i class="fa fa-info"></i>
                                    Informasi</a></li>
                            <li class="<?= $menu === 'announ' ? 'active' : '' ?>"><a href="<?= base_url('announ') ?>"><i class="fa fa-bullhorn"></i> Pengumuman</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="<?= base_url() ?>assets/img/logo/avatar.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs"><?= $name->nama ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?= base_url() ?>assets/img/logo/avatar.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            <?= $name->nis . ' - ' . $name->nama ?>
                                            <small><?= $name->waktu_daftar ?></small>
                                        </p>
                                    </li>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?= base_url('setting') ?>" class="btn btn-default btn-flat">Setting</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?= base_url('login/logout') ?>" class="btn btn-default btn-flat">Sign
                                        out</a>
                                </div>
                            </li>
                        </ul>
                        </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->