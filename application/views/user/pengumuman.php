<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Pengumuman
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
                            <h3 class="box-title">Pengumuman Hasil Test Santri Baru</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <h4>Beberapa test yang diikuti oleh santri : </h4>
                            <?php foreach ($hasil as $hasil) : ?>
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Tes Pengetahuan Akademik</th>
                                            <th><?= $hasil->tpa ?></th>
                                        </tr>
                                        <tr>
                                            <th>Tes Qiroatul Qur'an</th>
                                            <th><?= $hasil->quran ?></th>
                                        </tr>
                                        <tr>
                                            <th>Tes Pengetahuan Keagamnaan</th>
                                            <th><?= $hasil->agama ?></th>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Dengan hasil ini santri dinyatakan : <u style="color: lightseagreen;">LULUS TEST</u></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <br>
                                <strong></strong>
                            <?php endforeach; ?>
                            <p style="color: red;">* Hasil test ini akan digunakan untuk penetuan penempatan kelas madin dan kelas Al-Qur'an</p>
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