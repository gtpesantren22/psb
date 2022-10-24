<div class="home-title">
    <div class="container">
        <h5 class="post-title" id="datadaftar">
            <span class="fa fa-list"></span><span>Form Pengisian Pendaftaran Santri Baru</span>
        </h5>
    </div>
</div>
<!-- 
 <div class="card-body">
     <input type="date" name="tgl_daftar" class="form-control datepicker" value="" hidden>
     <div class="row">
         <div class="col-md-6">
             <div class="form-group">
                 <label for="asal_sekolah">Jalur Pendaftaran *</label><br>
                 <select class="form-control" name="jalur" required>
                     <option value=""> -pilih jalur pendaftaran- </option>
                     <option value="1">Jalur Reguler</option>
                     <option value="2">Jalur Prestasi</option>
                 </select>
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label for="nama">NIK</label>
                     <input type="text" maxlength="16" class="form-control" name="nik" required>
                 </div>
                 <div class="form-group col-md-6">
                     <label for="nohp">No. KK</label>
                     <input type="text" maxlength="16" class="form-control" name="no_kk" required>
                 </div>
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
                            $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "July", "Agustus", "September", "Oktober", "November", "Desember");

                            for ($i = 1; $i <= 12; $i++) { ?>
                             <option value="<?= $i; ?>"><?= $bulan[$i]; ?></option>
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
             <div class="form-group">
                 <label for="asal_sekolah">Jenis Kelamin *</label><br>
                 <input type="radio" name="jkl" value="Laki-laki" required /> Laki-laki
                 <input type="radio" name="jkl" value="Perempuan" required /> Perempuan
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label for="nama">Anak ke *</label>
                     <input type="number" class="form-control" name="anak_ke" required>
                 </div>
                 <div class="form-group col-md-6">
                     <label for="nohp">Jml Saudara *</label>
                     <input type="number" class="form-control" name="jml" required>
                 </div>
             </div>
             <div class="form-group">
                 <label for="asal_sekolah">Lembaga Tujuan *</label><br>
                 <input type="radio" name="lembaga" value="1" required /> MTs
                 <input type="radio" name="lembaga" value="2" required /> SMP
                 <input type="radio" name="lembaga" value="3" required /> MA
                 <input type="radio" name="lembaga" value="4" required /> SMK
                 <input type="radio" name="lembaga" value="5" required /> MI
                 <input type="radio" name="lembaga" value="6" required /> RA
             </div>

             <div class="form-group">
                 <label for="inputPassword4">No. HP</label>
                 <input type="number" class="form-control" name="hp" required>
                 <span style="color: red; font-weight: bold; font-style: italic;">* Harap isi dengan No WA aktif. Karena akan ada pesan WA setelah anda daftar</span>
             </div>

         </div>
         <div class="col-md-1">
             &nbsp;
         </div>
         <div class="col-md-5">
             <div class="form-group">
                 <label for="inputPassword4">Jl / Dusun *</label>
                 <input type="text" class="form-control" name="jln" required>
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label for="nama">RT *</label>
                     <input type="number" class="form-control" name="rt" required>
                 </div>
                 <div class="form-group col-md-6">
                     <label for="nohp">RW *</label>
                     <input type="number" class="form-control" name="rw" required>
                 </div>
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
                     <select id="kota" name="kabupaten" class="form-control" required>
                         <option value="">Pilih Kabupaten</option>
                     </select>
                 </div>
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label for="nama">Kecamatan *</label>
                     <select id="kec" name="kecamatan" class="form-control " required>
                         <option value="">Pilih kecamatan</option>
                     </select>
                 </div>
                 <div class="form-group col-md-6">
                     <label for="nohp">Desa *</label>
                     <select id="kel" name="kelurahan" class="form-control " required>
                         <option value="">Pilih kelurahan</option>
                     </select>
                 </div>
             </div>
             <div class="form-group">
                 <label for="inputPassword4">Sekolah Asal *</label>
                 <input type="text" class="form-control" name="asal" required>
             </div>
             <div class="form-group">
                 <label for="inputPassword4">Alamat Sekolah Asal *</label>
                 <input type="text" class="form-control" name="asal_skl" required>
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label for="nama">Nama Bapak *</label>
                     <input type="text" class="form-control" name="bapak" required>
                 </div>
                 <div class="form-group col-md-6">
                     <label for="nohp">Nama Ibu *</label>
                     <input type="text" class="form-control" name="ibu" required>
                 </div>
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label for="nama">Pekerjaan Bapak *</label>
                     <select class="form-control" name="a_pkj" required>
                         <option value=""> -pilih- </option>
                         <?php
                            foreach ($hasilP as $value) {
                                echo "<option value='" . $value->nama . "'>" . $value->nama . "</option>";
                            }
                            ?>
                     </select>
                 </div>
                 <div class="form-group col-md-6">
                     <label for="nohp">Pekerjaan Ibu *</label>
                     <select class="form-control" name="i_pkj" required>
                         <option value=""> -pilih- </option>
                         <?php
                            foreach ($hasilP as $value) {
                                echo "<option value='" . $value->nama . "'>" . $value->nama . "</option>";
                            }
                            ?>
                     </select>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md-8 col-lg-12">
         <button type="submit" id="btnsimpan" class="btn btn-primary btn-block"><i class="fa fa-check-square fa-lg fa-fw"></i> Daftar</button>
     </div>
 </div>
 <?= form_close(); ?>

 <div class="row">
     <div class="col-md-12">
         <a href="<?= base_url() ?>">
             <button class="btn btn-warning btn-block"><i class="fa fa-arrow-left fa-lg fa-fw"></i> Kembali</button>
         </a>
     </div>
 </div> 
<div class="form-group">
                                                <label for="asal_sekolah">Jalur Pendaftaran *</label><br>
                                                <select class="form-control" name="jalur" required>
                                                    <option value=""> -pilih jalur pendaftaran- </option>
                                                    <option value="1">Jalur Reguler</option>
                                                    <option value="2">Jalur Prestasi</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4">Sekolah Asal *</label>
                                                <input type="text" class="form-control" name="asal" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4">Alamat Sekolah Asal *</label>
                                                <input type="text" class="form-control" name="asal_skl" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Nama Bapak *</label>
                                                    <input type="text" class="form-control" name="bapak" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">Nama Ibu *</label>
                                                    <input type="text" class="form-control" name="ibu" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Pekerjaan Bapak *</label>
                                                    <select class="form-control" name="a_pkj" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        foreach ($hasilP as $value) {
                                                            echo "<option value='" . $value->nama . "'>" . $value->nama . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">Pekerjaan Ibu *</label>
                                                    <select class="form-control" name="i_pkj" required>
                                                        <option value=""> -pilih- </option>
                                                        <?php
                                                        foreach ($hasilP as $value) {
                                                            echo "<option value='" . $value->nama . "'>" . $value->nama . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4">Jl / Dusun *</label>
                                                <input type="text" class="form-control" name="jln" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">RT *</label>
                                                    <input type="number" class="form-control" name="rt" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">RW *</label>
                                                    <input type="number" class="form-control" name="rw" required>
                                                </div>
                                            </div>
-->



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
                        <div class="activities">
                            <div class="activity">

                                <div class="activity-detail">
                                    <p style="font-weight: bold;">Pendaftaran Jalur Reguler</p>
                                    <ul>
                                        <li>Foto Copy Kartu Keluarga 4 lembar</li>
                                        <li>Foto Copy Akta Kelahiran 4 lembar</li>
                                        <li>Foto Copy IJAZAH dilegalisir ( Menyusul ) 4 lembar</li>
                                    </ul>
                                    <p style="font-weight: bold;">Pendaftaran Jalur Prestasi</p>

                                </div>

                            </div>

                        </div>

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
                                    <?= form_open('daftar/daftarAct'); ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama">NIK</label>
                                                <input type="text" maxlength="16" class="form-control" name="nik"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nohp">No. KK</label>
                                                <input type="text" maxlength="16" class="form-control" name="no_kk"
                                                    required>
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
                                                        $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "July", "Agustus", "September", "Oktober", "November", "Desember");

                                                        for ($i = 1; $i <= 12; $i++) { ?>
                                                        <option value="<?= $i; ?>"><?= $bulan[$i]; ?></option>
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
                                                    <select id="kota" name="kabupaten" class="form-control" required>
                                                        <option value="">Pilih Kabupaten</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Kecamatan *</label>
                                                    <select id="kec" name="kecamatan" class="form-control " required>
                                                        <option value="">Pilih kecamatan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">Desa *</label>
                                                    <select id="kel" name="kelurahan" class="form-control " required>
                                                        <option value="">Pilih kelurahan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Anak ke *</label>
                                                    <input type="number" class="form-control" name="anak_ke" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nohp">Jml Saudara *</label>
                                                    <input type="number" class="form-control" name="jml" required>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <label for="asal_sekolah">Lembaga Pilihan *</label><br>
                                                <input type="radio" name="lembaga" value="1" required /> MTs
                                                <input type="radio" name="lembaga" value="2" required /> SMP
                                                <input type="radio" name="lembaga" value="3" required /> MA
                                                <input type="radio" name="lembaga" value="4" required /> SMK
                                                <input type="radio" name="lembaga" value="5" required /> MI
                                                <input type="radio" name="lembaga" value="6" required /> RA
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword4">No. HP</label>
                                                <input type="number" class="form-control" name="hp" required>
                                                <span style="color: red; font-weight: bold; font-style: italic;">* Harap
                                                    isi dengan No WA aktif. Karena akan ada pesan WA setelah anda
                                                    daftar</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12">
                                        <button type="submit" id="btnsimpan" class="btn btn-primary btn-block"><i
                                                class="fa fa-check-square fa-lg fa-fw"></i> Daftar</button>
                                    </div>
                                    <?= form_open(); ?>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>