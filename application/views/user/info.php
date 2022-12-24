<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Informasi PSB 2023
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
                            <h3 class="box-title">Informasi Seputar Pendaftaran Santri Baru PPDWK 2023</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <?php foreach ($info as $row) : ?>
                                <b style="font-weight: bold; font-size: 20px;"><?= $row->judul ?></b><br>
                                <i><small class="text-primary"><?= tanggalIndo($row->tanggal) ?></small></i><br>
                                <p><?= $row->isi ?></p>
<hr>
                            <?php endforeach; ?>
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