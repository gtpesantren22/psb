</div>
<div class="home-footer">
    <div class="container text-center">by ©2022 Admin PPDWK </div>
</div>
</body>

<script>
var baseURL = '/';
</script>

<script src="<?= base_url(); ?>assets/sw/sweetalert2.all.min.js"></script>
<!-- <script src="<?= base_url(); ?>vendor/jquery-3.2.1.min.js"></script> -->
<script src="<?= base_url(); ?>vendor/jquery.form.min.js"></script>
<script src="<?= base_url(); ?>vendor/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>vendor/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/sweetalert/sweetalert.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<!-- Vendor -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

<script src="<?= base_url(); ?>vendor/wow.min.js"></script>

<!-- Assets -->
<script src="<?= base_url(); ?>vendor/front.min.js"></script>
<!-- Vendor -->


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">

<style type="text/css" class="init">

</style>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" class="init">
$(document).ready(function() {
    $('#sampleTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            '', '', '', '', ''
        ]
    });
});
</script>

<script>
$(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#loading").hide();

    $("#provinsi").change(function() { // Ketika user mengganti atau memilih data provinsi
        $("#kota").hide(); // Sembunyikan dulu combobox kota nya
        $("#loading").show(); // Tampilkan loadingnya

        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "<?php echo base_url("daftar/listKota"); ?>", // Isi dengan url/path file php yang dituju
            data: {
                id_provinsi: $("#provinsi").val()
            }, // data yang akan dikirim ke file yang dituju
            dataType: "json",
            beforeSend: function(e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response) { // Ketika proses pengiriman berhasil
                $("#loading").hide(); // Sembunyikan loadingnya

                // set isi dari combobox kota
                // lalu munculkan kembali combobox kotanya
                $("#kota").html(response.list_kota).show();
            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" +
                    thrownError); // Munculkan alert error
            }
        });
    });

    $("#kota").change(function() { // Ketika user mengganti atau memilih data provinsi
        $("#kec").hide(); // Sembunyikan dulu combobox kota nya
        $("#loading").show(); // Tampilkan loadingnya

        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "<?php echo base_url("daftar/listKec"); ?>", // Isi dengan url/path file php yang dituju
            data: {
                id_kab: $("#kota").val()
            }, // data yang akan dikirim ke file yang dituju
            dataType: "json",
            beforeSend: function(e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response) { // Ketika proses pengiriman berhasil
                $("#loading").hide(); // Sembunyikan loadingnya

                // set isi dari combobox kota
                // lalu munculkan kembali combobox kotanya
                $("#kec").html(response.list_kec).show();
            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" +
                    thrownError); // Munculkan alert error
            }
        });
    });

    $("#kec").change(function() { // Ketika user mengganti atau memilih data provinsi
        $("#kel").hide(); // Sembunyikan dulu combobox kota nya
        $("#loading").show(); // Tampilkan loadingnya

        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "<?php echo base_url("daftar/listDesa"); ?>", // Isi dengan url/path file php yang dituju
            data: {
                id_kec: $("#kec").val()
            }, // data yang akan dikirim ke file yang dituju
            dataType: "json",
            beforeSend: function(e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response) { // Ketika proses pengiriman berhasil
                $("#loading").hide(); // Sembunyikan loadingnya

                // set isi dari combobox kota
                // lalu munculkan kembali combobox kotanya
                $("#kel").html(response.list_desa).show();
            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" +
                    thrownError); // Munculkan alert error
            }
        });
    });
});
</script>

</html>