<?php

$tgl = $name->a_tanggal == '' ? '00-00-0000' : $name->a_tanggal;
$tglI = $name->i_tanggal == '' ? '00-00-0000' : $name->i_tanggal;

$split = explode('-', $tgl);
$tgl_a = $split[0];
$bln_a =  $split[1];
$thn_a = $split[2];

$spliti = explode('-', $tglI);
$tgl_i = $spliti[0];
$bln_i = $spliti[1];
$thn_i = $spliti[2];
?>
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Mahrom Santri
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
                                src="<?= base_url('assets/user/') ?>dist/img/user4-128x128.jpg"
                                alt="User profile picture">
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
                            <h3 class="box-title"><i class="fa fa-user"></i> Data Ayah</h3>
                        </div>
                        <div class="box-body">
                            <form action="<?= base_url('equipt/saveMahrom'); ?>" method="post"
                                class="form-horizontal">
                                <div class="row">
                                    <input type="hidden" name="nis" value="<?= $name->nis ?>">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">NIK Ayah</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="a_nik" class="form-control" maxlength="16"
                                                    value="<?= $name->a_nik ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Nama Ayah</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="bapak" class="form-control"
                                                    value="<?= $name->bapak ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Tmp Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="a_tempat" class="form-control"
                                                    value="<?= $name->a_tempat ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Tgl Lahir</label>
                                            <div class="col-sm-9">

                                                <div class="col-xl-4">
                                                    <select class="form-control" name="tanggal" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        for ($tanggal = 1; $tanggal <= 31; $tanggal++) {
                                                            $i = $tanggal;
                                                            if ($tgl_a == $i) {
                                                                echo "<option value=$i selected>$i</option>";
                                                            } else {
                                                                echo "<option value=$i>$i</option>";
                                                            }
                                                            echo "<option value=$i>$i</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-xl-4">
                                                    <select class="form-control" name="bulan" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        for ($bulan = 1; $bulan <= 12; $bulan++) {
                                                            if ($bln_a == $bulan) {
                                                                echo "<option value=$bulan selected>" . bulan($bulan) . "</option>";
                                                            } else {
                                                                echo "<option value=$bulan>" . bulan($bulan) . "</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-xl-4">
                                                    <select class="form-control" name="tahun" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        $now = date("Y");
                                                        for ($tahun = 1945; $tahun <= $now; $tahun++) {
                                                            if ($thn_a == $tahun) {
                                                                echo "<option value=$tahun selected>$tahun</option>";
                                                            } else {
                                                                echo "<option value=$tahun>$tahun</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Pendidikan</label>
                                            <div class="col-sm-9">
                                                <select name="a_pend" id="" class="form-control" required>
                                                    <option value=""> -pilih- </option>
                                                    <?php foreach ($pend as $ar) : ?>
                                                    <option value="<?= $ar->nama; ?>"
                                                        <?= $ar->nama === $name->a_pend ? 'selected' : '' ?>>
                                                        <?= $ar->nama; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Pekerjaan</label>
                                            <div class="col-sm-9">
                                                <select name="a_pkj" id="" class="form-control" required>
                                                    <option value=""> -pilih- </option>
                                                    <?php foreach ($pkj as $ar) : ?>
                                                    <option value="<?= $ar->nama; ?>"
                                                        <?= $ar->nama === $name->a_pkj ? 'selected' : '' ?>>
                                                        <?= $ar->nama; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Penghasilan</label>
                                            <div class="col-sm-9">
                                                <select name="a_hasil" id="" class="form-control" required>
                                                    <option value=""> -pilih- </option>
                                                    <?php foreach ($hasil as $ar) : ?>
                                                    <option value="<?= $ar->nama; ?>"
                                                        <?= $ar->nama === $name->a_hasil ? 'selected' : '' ?>>
                                                        <?= $ar->nama; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-9">
                                                <input type="radio" name="a_stts" value="Hidup"
                                                    <?= $name->a_stts === 'Hidup' ? 'checked' : '' ?> required>
                                                Masih Hidup
                                                <input type="radio" name="a_stts" value="Meninggal"
                                                    <?= $name->a_stts === 'Meninggal' ? 'checked' : '' ?> required>
                                                Meniggal
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-header with-border">
                                    <h3 class="box-title"><i class="fa fa-user"></i> Data Ibu</h3>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="nis" value="<?= $name->nis ?>">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">NIK Ibu</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="i_nik" class="form-control" maxlength="16"
                                                    value="<?= $name->i_nik ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Nama Ibu</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="ibu" class="form-control"
                                                    value="<?= $name->ibu ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Tmp Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="i_tempat" class="form-control"
                                                    value="<?= $name->i_tempat ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Tgl Lahir</label>
                                            <div class="col-sm-9">

                                                <div class="col-xl-4">
                                                    <select class="form-control" name="tanggal_i" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        for ($tanggal = 1; $tanggal <= 31; $tanggal++) {
                                                            $i = $tanggal;
                                                            if ($tgl_i == $i) {
                                                                echo "<option value=$i selected>$i</option>";
                                                            } else {
                                                                echo "<option value=$i>$i</option>";
                                                            }
                                                            echo "<option value=$i>$i</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-xl-4">
                                                    <select class="form-control" name="bulan_i" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        for ($bulan = 1; $bulan <= 12; $bulan++) {
                                                            if ($bln_i == $bulan) {
                                                                echo "<option value=$bulan selected>" . bulan($bulan) . "</option>";
                                                            } else {
                                                                echo "<option value=$bulan>" . bulan($bulan) . "</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-xl-4">
                                                    <select class="form-control" name="tahun_i" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        $now = date("Y");
                                                        for ($tahun = 1945; $tahun <= $now; $tahun++) {
                                                            if ($thn_i == $tahun) {
                                                                echo "<option value=$tahun selected>$tahun</option>";
                                                            } else {
                                                                echo "<option value=$tahun>$tahun</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Pendidikan</label>
                                            <div class="col-sm-9">
                                                <select name="i_pend" id="" class="form-control" required>
                                                    <option value=""> -pilih- </option>
                                                    <?php foreach ($pend as $ar) : ?>
                                                    <option value="<?= $ar->nama; ?>"
                                                        <?= $ar->nama === $name->i_pend ? 'selected' : '' ?>>
                                                        <?= $ar->nama; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Pekerjaan</label>
                                            <div class="col-sm-9">
                                                <select name="i_pkj" id="" class="form-control" required>
                                                    <option value=""> -pilih- </option>
                                                    <?php foreach ($pkj as $ar) : ?>
                                                    <option value="<?= $ar->nama; ?>"
                                                        <?= $ar->nama === $name->i_pkj ? 'selected' : '' ?>>
                                                        <?= $ar->nama; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Penghasilan</label>
                                            <div class="col-sm-9">
                                                <select name="i_hasil" id="" class="form-control" required>
                                                    <option value=""> -pilih- </option>
                                                    <?php foreach ($hasil as $ar) : ?>
                                                    <option value="<?= $ar->nama; ?>"
                                                        <?= $ar->nama === $name->i_hasil ? 'selected' : '' ?>>
                                                        <?= $ar->nama; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-9">
                                                <input type="radio" name="i_stts" value="Hidup"
                                                    <?= $name->i_stts === 'Hidup' ? 'checked' : '' ?> required>
                                                Masih Hidup
                                                <input type="radio" name="i_stts" value="Meninggal"
                                                    <?= $name->i_stts === 'Meninggal' ? 'checked' : '' ?> required>
                                                Meniggal
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
                                </div>

                            </form>
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