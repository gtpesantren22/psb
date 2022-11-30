<?php

$split = explode('-', $name->tanggal);
$tgl_a = $split[0];
$bln_a =  $split[1];
$thn_a = $split[2];

?>
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Lainnya
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
                            <a href="<?= base_url('equipt'); ?>"
                                class="btn btn-app <?= $btn === 'identitas' ? 'bg-green' : '' ?>">
                                <i class="fa fa-user"></i> Identitas Diri
                            </a>
                            <a href="<?= base_url('equipt/parent'); ?>"
                                class="btn btn-app <?= $btn === 'mahrom' ? 'bg-green' : '' ?>">
                                <i class="fa fa-users"></i> Data Mahrom
                            </a>
                            <a href="<?= base_url('equipt/addres'); ?>"
                                class="btn btn-app <?= $btn === 'domisili' ? 'bg-green' : '' ?>">
                                <i class="fa fa-home"></i> Alamat
                            </a>
                            <a href="<?= base_url('equipt/univ'); ?>"
                                class="btn btn-app <?= $btn === 'pendidikan' ? 'bg-green' : '' ?>">
                                <i class="fa fa-graduation-cap"></i> Pendidikan
                            </a>
                            <a href="<?= base_url('equipt/other'); ?>"
                                class="btn btn-app <?= $btn === 'lain' ? 'bg-green' : '' ?>">
                                <i class="fa fa-list"></i> Lainnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-default color-palette-box">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle"
                                src="<?= base_url('') ?>assets/img/logo/avatar.jpg" alt="User profile picture">
                            <h3 class="profile-username text-center"><?= $name->nama ?></h3>
                            <p class="text-muted text-center"><?= $name->nis ?></p>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Alamat</b> <a
                                        class="pull-right"><?= $name->desa . ' - ' . $name->kec . ' - ' . $name->kab ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Waktu Daftar</b> <a class="pull-right"><?= $name->waktu_daftar ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status</b> <a class="pull-right"><?= $name->stts ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="box box-default color-palette-box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-list"></i> Lainnya</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <form action="<?= base_url('equipt/saveOther'); ?>" method="post"
                                    class="form-horizontal">
                                    <input type="hidden" name="nis" value="<?= $name->nis ?>">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">NO. HP (WA)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="hp" class="form-control"
                                                    value="<?= $name->hp ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Jalur</label>
                                            <div class="col-sm-9">
                                                <b>: <?= $name->jalur; ?></b> <i>(*Jika ingin mengajukan prestasi,
                                                    silahkan
                                                    menghubungi panitia)</i>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Gelombang</label>
                                            <div class="col-sm-9">
                                                <b>: ke - <?= $name->gel; ?></b>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Jenis Daftar</label>
                                            <div class="col-sm-9">
                                                <input type="radio" name="jenis" value="Baru"
                                                    <?= $name->jenis === 'Baru' ? 'checked' : '' ?> required>
                                                Santri Baru
                                                <input type="radio" name="jenis" value="Mutasi"
                                                    <?= $name->jenis === 'Mutasi' ? 'checked' : '' ?> required>
                                                Mutasi
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-9">
                                                Santri <?= $name->tinggal; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label"></label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-success pull-right" type="submit"><i
                                                        class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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