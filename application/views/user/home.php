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
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
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
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <?php
                            $akta = $row->akta != '' ? 14.3 : 0;
                            $kk = $row->kk != '' ? 14.3 : 0;
                            $ktp_ayah = $row->ktp_ayah != '' ? 14.3 : 0;
                            $ktp_ibu = $row->ktp_ibu != '' ? 14.3 : 0;
                            $skl = $row->skl != '' ? 14.3 : 0;
                            $ijazah = $row->ijazah != '' ? 14.3 : 0;
                            $kip = $row->kip != '' ? 14.3 : 0;
                            $ttl = round(($akta + $kk + $ktp_ayah + $ktp_ibu + $skl + $ijazah + $kip), 0);

                            $nik = $rowSn->nik != '' ? 2.3 : 0;
                            $no_kk = $rowSn->no_kk != '' ? 2.3 : 0;
                            $nisn = $rowSn->nisn != '' ? 2.3 : 0;
                            $nama = $rowSn->nama != '' ? 2.3 : 0;
                            $tempat = $rowSn->tempat != '' ? 2.3 : 0;
                            $tanggal = $rowSn->tanggal != '' ? 2.3 : 0;
                            $jkl = $rowSn->jkl != '' ? 2.3 : 0;
                            $agama = $rowSn->agama != '' ? 2.3 : 0;
                            $anak_ke = $rowSn->anak_ke != '' ? 2.3 : 0;
                            $jml_sdr = $rowSn->jml_sdr != '' ? 2.3 : 0;
                            $a_nik = $rowSn->a_nik != '' ? 2.3 : 0;
                            $bapak = $rowSn->bapak != '' ? 2.3 : 0;
                            $a_tempat = $rowSn->a_tempat != '' ? 2.3 : 0;
                            $a_tanggal = $rowSn->a_tanggal != '' ? 2.3 : 0;
                            $a_pend = $rowSn->a_pend != '' ? 2.3 : 0;
                            $a_pkj = $rowSn->a_pkj != '' ? 2.3 : 0;
                            $a_hasil = $rowSn->a_hasil != '' ? 2.3 : 0;
                            $a_stts = $rowSn->a_stts != '' ? 2.3 : 0;

                            // IBU
                            $i_nik = $rowSn->i_nik != '' ? 2.3 : 0;
                            $ibu = $rowSn->ibu != '' ? 2.3 : 0;
                            $i_tempat = $rowSn->i_tempat != '' ? 2.3 : 0;
                            $i_tanggal = $rowSn->i_tanggal != '' ? 2.3 : 0;
                            $i_pend = $rowSn->i_pend != '' ? 2.3 : 0;
                            $i_pkj = $rowSn->i_pkj != '' ? 2.3 : 0;
                            $i_hasil = $rowSn->i_hasil != '' ? 2.3 : 0;
                            $i_stts = $rowSn->i_stts != '' ? 2.3 : 0;
                            $jln = $rowSn->jln != '' ? 2.3 : 0;
                            $rt = $rowSn->rt != '' ? 2.3 : 0;
                            $rw = $rowSn->rw != '' ? 2.3 : 0;
                            $kd_pos = $rowSn->kd_pos != '' ? 2.3 : 0;
                            $desa = $rowSn->desa != '' ? 2.3 : 0;
                            $kec = $rowSn->kec != '' ? 2.3 : 0;
                            $kab = $rowSn->kab != '' ? 2.3 : 0;
                            $prov = $rowSn->prov != '' ? 2.3 : 0;

                            $npsn = $rowSn->npsn != '' ? 2.3 : 0;
                            $asal = $rowSn->asal != '' ? 2.3 : 0;
                            $a_asal = $rowSn->a_asal != '' ? 2.3 : 0;

                            $hp = $rowSn->hp != '' ? 2.3 : 0;
                            $jenis = $rowSn->jenis != '' ? 2.3 : 0;
                            $tinggal = $rowSn->tinggal != '' ? 2.3 : 0;

                            $ttl2 = round(($nik +
                                $no_kk +
                                $nisn +
                                $nama +
                                $tempat +
                                $tanggal +
                                $jkl +
                                $agama +
                                $anak_ke +
                                $jml_sdr +
                                $a_nik +
                                $bapak +
                                $a_tempat +
                                $a_tanggal +
                                $a_pend +
                                $a_pkj +
                                $a_hasil +
                                $a_stts +

                                // IBU
                                $i_nik +
                                $ibu +
                                $i_tempat +
                                $i_tanggal +
                                $i_pend +
                                $i_pkj +
                                $i_hasil +
                                $i_stts +
                                $jln +
                                $rt +
                                $rw +
                                $kd_pos +
                                $desa +
                                $kec +
                                $kab +
                                $prov +

                                $npsn +
                                $asal +
                                $a_asal +

                                $hp +
                                $jenis +
                                $tinggal), 0);
                            ?>
                            <div class="col">
                                Identitas Santri :
                                <a href="<?= base_url('equipt') ?>" class="pull-right"><small>Lihat detail <i class="fa fa-arrow-right"></i></small></a>
                                <div class="progress progress-md active">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?= $ttl2 ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $ttl2 ?>%">
                                        <?= $ttl2 ?>% selesai
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                Berkas Pendaftaran :
                                <a href="<?= base_url('equipt/file') ?>" class="pull-right"><small>Lihat detail <i class="fa fa-arrow-right"></i></small></a>
                                <div class="progress progress-md active">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?= $ttl ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $ttl ?>%">
                                        <?= $ttl ?>% selesai
                                    </div>
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
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
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