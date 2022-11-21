<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Setting Akun
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
                    <div class="box box-default box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Ganti Password</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger">
                                    <?= $this->session->flashdata('error') ?>
                                </div>
                            <?php } elseif ($this->session->flashdata('ok')) { ?>
                                <div class="alert alert-success">
                                    <?= $this->session->flashdata('ok') ?>
                                </div>
                            <?php } ?>
                            <?= form_open('setting/updatePass') ?>
                            <input type="hidden" name="nis" value="<?= $name->nis ?>">
                            <div class="form-group">
                                <label for="">Password Baru</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukan password baru" required>
                            </div>
                            <div class="form-group">
                                <label for="">Ulangi Password</label>
                                <input type="password" class="form-control" name="password2" placeholder="Masukan Ulang password baru" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.container -->
</div>
<!-- /.content-wrapper -->