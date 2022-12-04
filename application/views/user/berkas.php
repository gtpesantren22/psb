<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Upload Berkas Pendaftaran
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
                                - Upload file berupa PDF dan IMG/gambar <br>
                                - File yang diupload harus jelas/bisa dibaca <br>
                                - Maksimal ukuran file yang diupload adalah 10 MB.
                            </p>
                            <hr>
                            <div class="form-group">
                                <label for="">Upload Akta Kelahiran</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-default"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->akta != '') : ?>
                                        <span class="label label-success"><i class="fa fa-check"></i> Sudah
                                            Upload</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Kartu Keluarga (KK)</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-kk"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->kk != '') : ?>
                                        <span class="label label-success"><i class="fa fa-check"></i> Sudah
                                            Upload</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload KTP Bapak</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-ktp_ayah"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->ktp_ayah != '') : ?>
                                        <span class="label label-success"><i class="fa fa-check"></i> Sudah
                                            Upload</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload KTP Ibu</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-ktp_ibu"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->ktp_ibu != '') : ?>
                                        <span class="label label-success"><i class="fa fa-check"></i> Sudah
                                            Upload</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Surat Keterangan Lulus (SKL)</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-skl"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->skl != '') : ?>
                                        <span class="label label-success"><i class="fa fa-check"></i> Sudah
                                            Upload</span>
                                        <?php endif; ?>
                                        <i class="text-danger">*) Upload jika sudah keluar (menyusul)</i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Ijazah</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-ijazah"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->ijazah != '') : ?>
                                        <span class="label label-success"><i class="fa fa-check"></i> Sudah
                                            Upload</span>
                                        <?php endif; ?>
                                        <i class="text-danger">*) Upload jika sudah keluar (menyusul)</i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload KIP</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-kip"> Upload Disini
                                            !</button>
                                    </div>
                                    <div class="col-md-9">
                                        <?php if ($file->kip != '') : ?>
                                        <span class="label label-success"><i class="fa fa-check"></i> Sudah
                                            Upload</span>
                                        <?php endif; ?>
                                        <i class="text-danger">*) Upload jika mempunyai KIP (Gambar Kartu KIP)</i>
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
                <h4 class="modal-title">Upload Akta Kelahiran</h4>
            </div>
            <?= form_open_multipart('equipt/uploadAkta') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->akta; ?>">
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
<div class="modal fade" id="modal-kk">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload Kartu Keluarga (KK)</h4>
            </div>
            <?= form_open_multipart('equipt/uploadKK') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->kk; ?>">
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
<div class="modal fade" id="modal-ktp_ayah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload KTP Ayah</h4>
            </div>
            <?= form_open_multipart('equipt/uploadktp_ayah') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->ktp_ayah; ?>">
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
<div class="modal fade" id="modal-ktp_ibu">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload KTP Ibu</h4>
            </div>
            <?= form_open_multipart('equipt/uploadktp_ibu') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->ktp_ibu; ?>">
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
<div class="modal fade" id="modal-skl">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload Surat Keterangan Lulu (SKL)</h4>
            </div>
            <?= form_open_multipart('equipt/uploadskl') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->skl; ?>">
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
<div class="modal fade" id="modal-ijazah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload Ijazah</h4>
            </div>
            <?= form_open_multipart('equipt/uploadijazah') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->ijazah; ?>">
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
<div class="modal fade" id="modal-kip">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload KIP</h4>
            </div>
            <?= form_open_multipart('equipt/uploadkip') ?>
            <div class="modal-body">
                <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                <input type="hidden" name="file_lama" value="<?= $file->kip; ?>">
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