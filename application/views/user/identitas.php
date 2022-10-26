<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Identitas Santri
            </h1>
            <!-- <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Layout</a></li>
                <li class="active">Top Navigation</li>
            </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-default color-palette-box">
                        <div class="box-header with-border">
                            <a class="btn btn-app <?= $btn === 'identitas' ? 'bg-green' : '' ?>">
                                <i class="fa fa-user"></i> Identitas Diri
                            </a>
                            <a class="btn btn-app <?= $btn === 'mahrom' ? 'bg-green' : '' ?>">
                                <i class="fa fa-users"></i> Data Mahrom
                            </a>
                            <a class="btn btn-app <?= $btn === 'domisili' ? 'bg-green' : '' ?>">
                                <i class="fa fa-home"></i> Domisili
                            </a>
                            <a class="btn btn-app <?= $btn === 'pendidikan' ? 'bg-green' : '' ?>">
                                <i class="fa fa-graduation-cap"></i> Pendidikan
                            </a>
                            <a class="btn btn-app <?= $btn === 'lain' ? 'bg-green' : '' ?>">
                                <i class="fa fa-list"></i> Lainnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-default color-palette-box">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/user/') ?>dist/img/user4-128x128.jpg" alt="User profile picture">
                            <h3 class="profile-username text-center">Ahmad Danial Karomat</h3>
                            <p class="text-muted text-center">20231001</p>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Alamat</b> <a class="pull-right">Asembakor - Kraksaan Probolinggo</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Waktu Daftar</b> <a class="pull-right">2019-09-09</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status</b> <a class="pull-right">Terverifkasi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="box box-default color-palette-box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-user"></i> Identitas saya</h3>
                        </div>
                        <div class="box-body">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.container -->
</div>
<!-- /.content-wrapper -->