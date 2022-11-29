<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Selamat Datang!
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

                <p>Aplikasi pendaftaran santri baru Tahun Pelajaran 2023/2024. Pondok Pesantren Darul Lughah Wal Karmoah
                </p>
            </div>
            <div class="callout callout-danger">
                <h4>Perhatian!</h4>

                <p>Dimohon untuk segera melengkapi identitas dan persyaratan santri baru</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-warning box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Status Santri</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <?php
                            if ($name->stts === 'Terverifikasi') {
                                echo "<span class='label label-success'>" . $name->stts . "</span><br><br>";
                            } else {
                                echo "<span class='label label-danger'>" . $name->stts . "</span><br><br>";
                            }
                            ?>
                            Waktu Pendaftaran : <?= $name->waktu_daftar ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-default box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Kelengkapan Santri</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            Identitas Santri :
                            <div class="progress progress-md active">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    20% selesai
                                </div>
                            </div>
                            Berkas Pendaftaran :
                            <div class="progress progress-md active">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    20% selesai
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Registrasi Santri</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            Biaya Pendaftaran :
                            <?php foreach ($list as $rw) {
                                if ($rw->jml < gel($name->gel)) {
                            ?>
                            <span class="label label-danger"><i class="fa fa-times"></i> Belum Lunas</span><br><br>
                            <?php } else { ?>
                            <span class="label label-success"><i class="fa fa-check"></i> Sudah Lunas</span><br><br>
                            <?php }
                            } ?>

                            Registrasi Ulang :
                            <?php

                            if (($tangg->row('seragam_pes') + $tangg->row('seragam_lem') + $tangg->row('orsaba') + $tangg->row('kartu') + $tangg->row('buku') + $tangg->row('kalender') + $tangg->row('infaq')) >= $listSum->row('nominal')) {
                                echo "<span class='label label-danger'><i class='fa fa-times'></i> Belum Lunas</span><br><br>";
                            } else {
                                echo "<span class='label label-success'><i class='fa fa-check'></i> Sudah Lunas</span><br><br>";
                            }
                            ?>
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