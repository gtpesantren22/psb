<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Registrasi Pendaftaran
            </h1>
            <!-- <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Layout</a></li>
                <li class="active">Top Navigation</li>
            </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="callout callout-info">
                <h4><?= $name->nis . ' - ' . $name->nama ?></h4>

                <span class="label label-warning">Tanggal Daftar : <?= $name->waktu_daftar; ?></span>
                <span class="label label-success">Gelombag <?= $name->gel; ?></span>
                <span class="label label-danger">Jalur : <?= $name->jalur; ?></span>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="box box-warning box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nominal Pendaftaran</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <p class="text-center text-bold fs-3">Gelombang <?= $name->gel; ?></p>
                            <h2 class="text-success text-bold text-center"><?= rupiah(gel($name->gel)) ?></h2>
                            <?php foreach ($list as $rw) {
                                if ($rw->jml < gel($name->gel)) {
                            ?>
                                    <p class="text-center text-bold fs-3">Status Pembayaran : <span class="label label-danger"><i class="fa fa-times"></i> Belum</span></p>
                                    <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span class="sr-only">Error:</span>
                                        Nominal Pendaftaran bisa dibayarkan melalui transfer ke <b>No.Rek BRI 0582-01000-847-303 a.n. PP DARUL LUGHAH WAL KAROAH</b> dan melakukan konfirmasi
                                        pembayaran disertai bukti transfer ke No. WA 082329641926
                                    </div>
                                <?php } else { ?>
                                    <p class="text-center text-bold fs-3">Status Pembayaran : <span class="label label-success"><i class="fa fa-check"></i> Sudah</span></p>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Rincian Pembayaran</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nominal</th>
                                            <th>Tgl Bayar</th>
                                            <th>Verifikator</th>
                                            <th>Via</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $row) : ?>
                                            <tr>
                                                <td><?= rupiah($row->nominal) ?></td>
                                                <td><?= $row->tgl_bayar; ?></td>
                                                <td><?= $row->kasir; ?></td>
                                                <td><?= $row->via; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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