<div class="home-title">
    <div class="container">
        <h5 class="post-title" id="datadaftar">
            <span class="fa fa-list"></span><span>Form Pengisian Pendaftaran Santri Baru</span>
        </h5>
    </div>
</div>

<div class="row">
    <div class="col-sm-4 d-flex ">
        <div class="col-md-12 animated bounceInLeft">
            <div class="card mt-2 mb-1">
                <div class="card-header text-white" style="background-color: #005f6b">
                    <h4>Petunjuk Pengisian</h4>

                </div>
                <div class="card-body">
                    <div class="col-12 animated bounceIn">
                        <p class="text-danger">Harap dibaca dulu sebelum melakukan pengisian !</p>
                        <ol>
                            <li>Semua Kolom Wajib Diisi</li>
                            <li>Untuk Pengisian Semua kolom, diharapkan mengisi <b><u>berdasarkan data di Kartu Keluarga
                                        (KK)</u></b></li>
                            <li>Khusus Pendaftar MI dan RA itu tidak tinggal di Pesantren</li>
                            <li class="text-danger"><b><i>Untuk No. WA harap diisi dengan No. WA aktif, Karena semua
                                        informasi akan dikirimkan kepada No yang didaftarkan</i></b></li>
                            <li class="text-danger">Setalah melakukan pendaftaran, akan mendapatkan informasi berupa
                                pesan WA, harap untuk mengikuti pesan tersebut</li>
                        </ol>
                        <p>Jika ada pertanyaan bisa menghubungi kontak dibawah ini :</p>
                        <ul>
                            <li>Ust. Hadiryanto Putra P, S.Pd (0823-3863-1044)</li>
                            <li>Ust. Ihya'ulumuddin, S.Pd (0852-3558-3647)</li>
                            <li>Ust. Rizal Asayadi M (0821-4434-8785)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-8 d-flex ">
        <div class="col-md-12 animated bounceInLeft">
            <div class="card mt-2 mb-2">
                <div class="card-header text-white" style="background-color: #005f6b">
                    <h4>Form Pendaftaran Santri Baru</h4>

                </div>
                <div class="card-body">
                    <div class="col-12 animated bounceIn">
                        <div class="activities">
                            <div class="activity">

                                <div class="activity-detail">
                                    <?php if ($this->session->flashdata('error')) { ?>
                                        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                                    <?php } ?>
                                    <?php
                                    $skr = date('Y-m-d');
                                    $buka = date('2022-12-11');
                                    $tutup = date('2023-12-04');
                                    if ($skr >= $buka && $skr <= $tutup) { ?>
                                        <?= form_open('daftar/daftarAct'); ?>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama">NIK</label>
                                                    <input type="text" maxlength="16" class="form-control" name="nik" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nohp">No. KK</label>
                                                    <input type="text" maxlength="16" class="form-control" name="no_kk" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="asal_sekolah">Nama Lengkap *</label>
                                                    <input type="text" class="form-control" name="nama" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="asal_sekolah">Tempat Lahir *</label>
                                                    <input type="text" class="form-control" name="tempat" required>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="nisn">Tanggal Lahir *</label>
                                                        <select class="form-control" name="tanggal" required>
                                                            <option value=""> -pilih- </option>
                                                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                                <option value="<?= $i; ?>"><?= $i; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="nisn">Bulan *</label>
                                                        <select class="form-control" name="bulan" required>
                                                            <option value=""> -pilih- </option>
                                                            <?php
                                                            for ($i = 1; $i <= 12; $i++) { ?>
                                                                <option value="<?= $i; ?>"><?= bulan($i); ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="nisn">Tahun *</label>
                                                        <select class="form-control" name="tahun" required>
                                                            <option value=""> -pilih- </option>
                                                            <?php for ($i = 1980; $i <= date('Y'); $i++) { ?>
                                                                <option value="<?= $i; ?>"><?= $i; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-1">
                                                &nbsp;
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="asal_sekolah">Jenis Kelamin *</label><br>
                                                    <input type="radio" name="jkl" value="Laki-laki" required /> Laki-laki
                                                    <input type="radio" name="jkl" value="Perempuan" required /> Perempuan
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="nama">Provinsi *</label>
                                                        <select name="provinsi" id="provinsi" class="form-control" required>
                                                            <option value="">Pilih Provinsi</option>
                                                            <?php
                                                            foreach ($hasil as $value) {
                                                                echo "<option value='" . $value->id_prov . "'>" . $value->nama . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="nohp">Kabupaten/Kota *</label>
                                                        <select id="kota" name="kabupaten" class="form-control">
                                                            <option value="">Pilih Kabupaten</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="nama">Kecamatan *</label>
                                                        <select id="kec" name="kecamatan" class="form-control ">
                                                            <option value="">Pilih kecamatan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="nohp">Desa *</label>
                                                        <select id="kel" name="kelurahan" class="form-control ">
                                                            <option value="">Pilih kelurahan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="asal_sekolah">Lembaga Pilihan *</label><br>
                                                    <input type="radio" name="lembaga" value="RA" required /> RA
                                                    <input type="radio" name="lembaga" value="MI" required /> MI
                                                    <input type="radio" name="lembaga" value="MTs" required /> MTs
                                                    <input type="radio" name="lembaga" value="SMP" required /> SMP
                                                    <input type="radio" name="lembaga" value="MA" required /> MA
                                                    <input type="radio" name="lembaga" value="SMK" required /> SMK
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputPassword4">No. HP</label>
                                                    <input type="number" class="form-control" name="hp" required>
                                                    <span style="color: red; font-weight: bold; font-style: italic;">* Harap
                                                        isi dengan No WA aktif. Karena akan ada pesan WA setelah anda
                                                        daftar</span>
                                                </div>

                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-8 col-lg-12">
                                            <button type="submit" id="btnsimpan" class="btn btn-primary btn-block"><i class="fa fa-check-square fa-lg fa-fw"></i> Daftar</button>
                                        </div> -->
                                        <?= form_open(); ?>
                                    <?php } else {
                                        // echo "<h3 class='text-center text-danger'>Pendaftaran Akan dibuka pada tanggal 11 Desember 2022 !</h3>";
                                        echo "<h3 class='text-center text-danger'>Pendaftaran Sudah Tutup pada akhir Gelombang 3 (03 Juni 2023)</h3>";
                                    } ?>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>