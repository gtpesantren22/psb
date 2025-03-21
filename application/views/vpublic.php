<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PSB PPDWK - 2025/2026</title>
    <!-- CSS files -->
    <link href="<?= base_url('demo/') ?>dist/css/tabler.min.css?1684106062" rel="stylesheet" />
    <link href="<?= base_url('demo/') ?>dist/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
    <link href="<?= base_url('demo/') ?>dist/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
    <link href="<?= base_url('demo/') ?>dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
    <link href="<?= base_url('demo/') ?>dist/css/demo.min.css?1684106062" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="<?= base_url('demo/') ?>dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <h2 class="navbar-brand navbar-brand-autodark">FORM PENGISIAN UKURAN SERAGAM <br> PSB PPDWK 2025/2026</h3>
            </div>
            <form class="card card-md" action="<?= base_url('seragam/simpan') ?>" method="post" autocomplete="off" novalidate>
                <input type="hidden" name="token" value="<?= $token ?>">
                <input type="hidden" name="id" value="<?= $siswa->id_santri ?>">
                <input type="hidden" name="nis" value="<?= $siswa->nis ?>">
                <div class="card-body">
                    <h2 class="card-title text-center mb-2"><?= $siswa->nama ?></h2>
                    <p class="text-muted mb-3">
                        Alamat : <?= $siswa->desa . ' - ' . $siswa->kec . ' - ' . $siswa->kab ?><br>
                        Lembaga : <?= $siswa->lembaga ?>
                    </p>

                    <ul class="text-danger">
                        <li>
                            Untuk ukuran seragam bisa dicek keterangan yang muncul dibawah saat memilih ukurannya
                        </li>
                        <li>
                            Mohon mengukur baju/celana santri dengan cermat dan memilih ukuran yang tepat, karena pemesanan ukuran tidak dapat ditukar.
                        </li>
                    </ul>
                    <?php if ($seragam && $seragam->atasan != '' && $seragam->bawahan != 0): ?>
                        <p><b class="text-success">!! Anda sudah pernah mengisi ukuran</b></p>
                    <?php endif ?>
                    <div class="mb-3">
                        <label class="form-label">Ukuran Atasan/Baju</label>
                        <div>
                            <?php foreach ($atasan as $atas): ?>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input rdb-atasan" type="radio" name="atasan" <?= $seragam && $seragam->atasan == $atas->ukuran ? 'checked' : '' ?> data-id="<?= $atas->id ?>" value="<?= $atas->ukuran ?>">
                                    <span class="form-check-label"><?= $atas->ukuran ?></span>
                                </label>
                            <?php endforeach ?>
                            <div class="text-muted" id="hasil-ukuran"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ukuran Celana/Rok</label>
                        <div>
                            <?php foreach ($bawahan as $bawah): ?>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input rdb-bawahan" type="radio" name="bawahan" <?= $seragam && $seragam->bawahan == $bawah->ukuran ? 'checked' : '' ?> data-id="<?= $bawah->id ?>" value="<?= $bawah->ukuran ?>">
                                    <span class="form-check-label">No. <?= $bawah->ukuran ?></span>
                                </label>
                            <?php endforeach ?>
                            <div class="text-muted" id="hasil-bawah"></div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">
                            <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg>
                            Simpan ukuran baju
                        </button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                jangan lupa klik, <a href="#">SIMPAN</a> jika sudah selesai memilih.
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="<?= base_url('demo/') ?>dist/js/tabler.min.js?1684106062" defer></script>
    <script src="<?= base_url('demo/') ?>dist/js/demo.min.js?1684106062" defer></script>

    <script>
        $(document).ready(function() {
            $('.rdb-atasan').on('change', function() {
                var id = $(this).data('id');
                var hasil = '';
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('seragam/atasan') ?>',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#hasil-ukuran').empty();
                        hasil += `<div class="card card-active"><div class="card-body">`
                        hasil += `Lebar Dada : ` + data.data.ld + ` cm <br>`
                        hasil += `Panjang : ` + data.data.pj + ` cm <br>`
                        hasil += `<i class="text-danger">Khusus santri putri, seragam atasan berbentuk TUNIK</i></div></div>`;
                        $('#hasil-ukuran').append(hasil)
                    }
                });
            });
            $('.rdb-bawahan').on('change', function() {
                var id = $(this).data('id');
                var hasil = '';
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('seragam/bawahan') ?>',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#hasil-bawah').empty();
                        hasil += `<div class="card card-active"><div class="card-body">`
                        hasil += `Lingkar Pinggang : ` + data.data.lp + ` cm <br>`
                        hasil += `Panjang : ` + data.data.pj + ` cm <br>`
                        hasil += `</div></div>`;
                        $('#hasil-bawah').append(hasil)
                    }
                });
            });
        });
    </script>
</body>

</html>