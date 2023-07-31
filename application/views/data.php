<?php if ($this->session->flashdata('success')) { ?>
    <script>
        alert('Pendaftaran Berhasil. Silahkan menunggu pesan WA untuk informasi lebih lanjut');
    </script>
<?php } ?>
<div class="home-title">
    <div class="container">
        <h5 class="post-title" id="datadaftar">
            <span class="fa fa-user"></span><span>Data Pendaftar</span>
        </h5>
    </div>
</div>
<div class="home-content-wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">

                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th width="30">NO</th>
                                        <th>Nama Pendaftar</th>
                                        <th>Alamat</th>
                                        <th>Tgl Daftar</th>
                                        <th>Tujuan</th>
                                        <th>Satatus</th>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>