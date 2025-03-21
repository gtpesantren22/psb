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
                        <p><b class="text-success">Pengisian Berhasil !!</b></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-rosette-discount-check text-success">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" />
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