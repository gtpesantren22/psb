<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Registrasi Daftar Ulang
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
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="box box-warning box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Rincian Daftar Ulang</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <?= form_open('regist/generate') ?>
                            <input type="hidden" name="nis" value="<?= $name->nis; ?>">
                            <input type="hidden" name="jkl" value="<?= $name->jkl; ?>">
                            <input type="hidden" name="ket" value="<?= $name->ket; ?>">
                            <button class="btn btn-success" type="submit"><i class="fa fa-refresh"></i> Refresh</button>
                            <?= form_close() ?>
                            <i class="text-info">*) Tekan tombol Refresh berikut jika Rincian Daftar Ulang tidak
                                muncul</i>
                            <br><br>

                            <?php foreach ($tangg as $row) : ?>
                            <div class="table-responsive">
                                <table id="" class="table table-bordered table-striped">
                                    <tr>
                                        <th>Seragam Pesantren</th>
                                        <th>Rp. <?= rupiah($row->seragam_pes); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Seragam Lembaga</th>
                                        <th>Rp. <?= rupiah($row->seragam_lem); ?></th>
                                    </tr>
                                    <tr>
                                        <th>ORSABA</th>
                                        <th>Rp. <?= rupiah($row->orsaba); ?></th>
                                    </tr>
                                    <tr>
                                        <th>KTS, Kartu Mahrom, Kartu Kesehatan & Foto</th>
                                        <th>Rp. <?= rupiah($row->kartu); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Buku Pedoman Wiridan, Perizinan & Tatib </th>
                                        <th>Rp. <?= rupiah($row->buku); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Kalender Pesantren</th>
                                        <th>Rp. <?= rupiah($row->kalender); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Uang Gedung</th>
                                        <th>Rp. <?= rupiah($row->infaq); ?></th>
                                    </tr>
                                    <tr style="color: white; background-color: #F39C12;">
                                        <th>TOTAL</th>
                                        <th>Rp.
                                            <?= rupiah($row->seragam_pes + $row->seragam_lem + $row->orsaba + $row->kartu + $row->buku + $row->kalender + $row->infaq); ?>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">History Pembayaran</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
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
                                            <th>Penerima</th>
                                            <th>Via</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list as $row) : ?>
                                        <tr>
                                            <td>Rp. <?= rupiah($row->nominal) ?></td>
                                            <td><?= $row->tgl_bayar; ?></td>
                                            <td><?= $row->kasir; ?></td>
                                            <td><?= $row->via; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <table id="" class="table table-sm table-borderless">
                                <tr style="color: blue;">
                                    <th>Total Tanggungan</th>
                                    <th>
                                        <?php
                                        foreach ($tangg as $row) {
                                            echo 'Rp. ' . rupiah($row->seragam_pes + $row->seragam_lem + $row->orsaba + $row->kartu + $row->buku + $row->kalender + $row->infaq);
                                        }
                                        ?>
                                    </th>
                                </tr>
                                <tr style="color: green;">
                                    <th>Sudah Bayar</th>
                                    <th><?php
                                        foreach ($listSum as $row) {
                                            echo 'Rp. ' . rupiah($row->nominal);
                                        }
                                        ?></th>
                                </tr>
                                <tr style="color: red;">
                                    <th>Kurang</th>
                                    <th></th>
                                </tr>
                            </table>
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