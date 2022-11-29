<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Upload Foto
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
                            <a href="<?= base_url('equipt/file') ?>"
                                class="btn btn-app <?= $btn === 'berkas' ? 'bg-green' : '' ?>">
                                <i class="fa fa-file"></i> Berkas Pendaftaran
                            </a>
                            <a href="<?= base_url('equipt/img') ?>"
                                class="btn btn-app <?= $btn === 'foto' ? 'bg-green' : '' ?>">
                                <i class="fa fa-image"></i> Foto
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
                            <h3 class="box-title"><i class="fa fa-file"></i> Berkas Pendaftaran</h3>
                        </div>
                        <div class="box-body">
                            <b class=""><i>Warning ! (Harap dibaca dulu!)</i></b>
                            <p class="text-danger">
                                - Foto yang diupload harus foto resmi. (Berkopyah/Kerudung) - Bukan Foto Selfi dll. <br>
                                - Ukuran Foto ada 3x4 <br>
                                - Maksimal ukuran file yang diupload adalah 50 MB.
                            </p>
                            <hr>
                            <div class="form-group">
                                <label for="">Upload Foto Pribadi</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-default"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->diri != '') : ?>
                                        <img src="<?= base_url('assets/berkas/') . $file->diri; ?>" class="img-fluid"
                                            height="100">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Foto Ayah</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-ayah"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->ayah != '') : ?>
                                        <img src="<?= base_url('assets/berkas/') . $file->ayah; ?>" class="img-fluid"
                                            height="100">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Foto Ibu</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-ibu"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->ibu != '') : ?>
                                        <img src="<?= base_url('assets/berkas/') . $file->ibu; ?>" class="img-fluid"
                                            height="100">
                                        <?php endif; ?>
                                    </div>
                                </div>
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload Foto Pribadi</h4>
            </div>
            <?= form_open_multipart('equipt/uploaddiri') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->diri; ?>">
                <input type="file" name="berkas" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Berkas</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-ayah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload Foto Ayah</h4>
            </div>
            <?= form_open_multipart('equipt/uploadayah') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->ayah; ?>">
                <input type="file" name="berkas" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Berkas</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-ibu">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload Foto Ibu</h4>
            </div>
            <?= form_open_multipart('equipt/uploadibu') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->ibu; ?>">
                <input type="file" name="berkas" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Berkas</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>