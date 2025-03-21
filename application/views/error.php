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
            <div class="text-center mb-2">
                <h2 class="navbar-brand navbar-brand-autodark">FORM PENGISIAN UKURAN SERAGAM <br> PSB PPDWK 2025/2026</h3>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <div class="text-center">
                        <p><b class="text-danger">Pengisian Gagal. Silahkan dicoba ulang !!</b></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-exclamation-circle text-danger">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 9v4" />
                            <path d="M12 16v.01" />
                        </svg>

                    </div>
                </div>
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