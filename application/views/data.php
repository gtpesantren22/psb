<!--unic-cards start-->
<section class="unique-cards section-py-space mt-10">
    <div class="title">
        <h1>&nbsp;</h1>
        <h2>Data Pendaftar</h2>
    </div>
    <div class="custom-container">
        <div class="card">
            <div class="card-header">
                <h5>Data Calon Santri Terdaftar</h5>
                <span>Daftar nama-nama calon santri yang sudah terdaftar</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="show-case">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Pendaftar</th>
                                <th>Alamat</th>
                                <th>Tujuan</th>
                                <th>Satatus</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($daftar as $row) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama ?></td>
                                    <td><?= $row->desa . ' - ' . $row->kec . ' - ' . $row->kab ?></td>
                                    <td><?= $row->lembaga ?></td>
                                    <td><?= $row->stts ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--unic-cards end-->