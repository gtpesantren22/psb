<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/izitoast/css/iziToast.min.css">
    <link href="<?= base_url(); ?>assets/css/front.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo/Logo_Pesantren.png">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/1.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/3.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/components2.css">
    <script src="<?= base_url(); ?>assets/modules/sweetalert/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="row">
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
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="nama">NIK</label>
                                                    <input type="text" maxlength="16" class="form-control" name="nik" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nohp">No. KK</label>
                                                    <input type="text" maxlength="16" class="form-control" name="no_kk" required>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12">
                                            <button type="submit" id="btnsimpan" class="btn btn-primary btn-block"><i class="fa fa-check-square fa-lg fa-fw"></i> Daftar</button>
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
</body>

</html>