<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= base_url('') ?>assets/img/logo/Logo_Pesantren.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo/Logo_Pesantren.png">
    <title>.:: PSB PPDWK 2024/2025 ::.</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/fontawesome.css">
    <style>
        body {
            width: 100%;
            font-family: work-Sans, sans-serif;
            background-color: #f6f7fb;
            display: block;
        }

        a {
            text-decoration: none;
        }

        span {
            font-size: 14px;
        }

        p {
            font-size: 13px;
            line-height: 1.7;
            letter-spacing: 0.7px;
            margin-top: 0;
        }

        .text-center {
            text-align: center
        }

        h6 {
            font-size: 16px;
            margin: 0 0 18px 0;
        }

        .my-button {
            background-color: #3498db;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .alert {
            padding: 20px;
            background-color: #04B70D;
            color: white;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 20px;
            line-height: 10px;
            cursor: pointer;
        }


        /* Media query untuk layar ponsel (lebar kurang dari 600px) */
        @media (max-width: 600px) {}
    </style>
</head>

<body style="margin: 30px auto;">
    <table style="width: 100%">
        <tbody>
            <tr>
                <td>
                    <table style="background-color: #f6f7fb; width: 100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table style="width: 650px; margin: 0 auto; margin-bottom: 30px">
                                        <tbody>
                                            <tr>
                                                <!-- <td><a href="index.html"><img class="img-fluid" src="<?= base_url('viho/') ?>assets/images/logo/logo.png" alt=""></a></td> -->
                                                <!-- <td style="text-align: right; color:#999"><span><a href="<?= base_url('data') ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a></span></td> -->
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px">
                        <tbody>
                            <tr>
                                <td style="padding: 30px">
                                    <h6 style="font-weight: 600">Upload Bukti Transfer</h6>
                                    Data santri atas :
                                    <table>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?= $santri->nama ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td><?= $santri->desa . '-' . $santri->kec . '-' . $santri->kab ?></td>
                                        </tr>
                                        <tr>
                                            <td>Lembaga Tujuan</td>
                                            <td>:</td>
                                            <td><?= $santri->lembaga ?> DWK</td>
                                        </tr>
                                        <tr>
                                            <td>Gelombang</td>
                                            <td>:</td>
                                            <td><?= $santri->gel ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bukti Transfer</td>
                                            <td>:</td>
                                            <td>
                                                <?php if ($berkas && $berkas->bukti != '') { ?>
                                                    <strong style="color: #04B70D;">Sudah Upload</strong>
                                                <?php } else { ?>
                                                    <strong style="color: red;">Belum Upload</strong>
                                                <?php } ?>
                                            </td>
                                        </tr>

                                    </table>
                                    <p>
                                        <hr>
                                        <?php if ($this->session->flashdata('ok')) { ?>
                                    <div class="alert">
                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                        <?= $this->session->flashdata('ok') ?>
                                    </div>
                                <?php } ?>
                                <form action="<?= base_url('data/saveBukti') ?>" method="post" enctype="multipart/form-data">
                                    <label for="">Upload Bukti Transfer</label><br><br>
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <input type="file" name="bukti" id="fileInput" required><br>
                                    <div id="fileDisplay" style="display: none;"></div><br>
                                    <button class="my-button" type="submit">^ Upload File</button>
                                </form>
                                <hr>
                                </p>
                                <p style="margin-bottom: 0">
                                    Atas perhatiannya kasmi sampaikan terimakasih <br>
                                    TTD,<br>Panitia PSB PPDWK</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; margin-top: 30px">
                        <tbody>
                            <tr style="text-align: center">
                                <td>
                                    <p style="color: #999; margin-bottom: 0">Copyright 2024-25 © Tim IT - PSB PPDWK</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

<!-- latest jquery-->
<script src="<?= base_url('viho/') ?>assets/js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function setupFileInput(inputId, displayId) {
        const fileInput = document.getElementById(inputId);
        const fileDisplay = document.getElementById(displayId);

        fileInput.addEventListener('change', function() {
            const selectedFile = fileInput.files[0]; // Mengambil berkas yang dipilih oleh pengguna

            if (selectedFile) {
                // Lakukan validasi tipe berkas dan ukuran jika diperlukan
                if (!isValidFileType(selectedFile)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validasi Gagal',
                        text: 'Tipe berkas tidak valid. Hanya gambar (jpg, jpeg, png) dan PDF yang diterima.'
                    });
                    fileInput.value = ''; // Reset input file
                    return;
                }

                if (!isValidFileSize(selectedFile)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validasi Gagal',
                        text: 'Ukuran berkas terlalu besar. Maksimum 15 MB.'
                    });
                    fileInput.value = ''; // Reset input file
                    return;
                }

                // Menampilkan berkas yang dipilih setelah validasi berhasil
                fileDisplay.style.display = 'block';
                fileDisplay.innerHTML = `Berkas yang dipilih: ${selectedFile.name}`;

                // Tampilkan pesan sukses
                Swal.fire({
                    icon: 'success',
                    title: 'Valid',
                    text: 'Berkas valid : ' + selectedFile.name
                });
            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'Info',
                    text: 'Tidak ada berkas yang dipilih.'
                });
            }
        });
    }

    setupFileInput('fileInput', 'fileDisplay');

    function isValidFileType(file) {
        // Contoh: Hanya menerima gambar (jpg, jpeg, png) dan PDF
        const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
        return allowedTypes.includes(file.type);
    }

    function isValidFileSize(file) {
        // Contoh: Maksimum 15 MB
        return file.size <= 15 * 1024 * 1024;
    }
</script>

</html>