<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Form Upload Berkas</h2>
    <form method="post" enctype="multipart/form-data" action="<?= base_url('coba/cobaUpload') ?>">
        <label for="berkas">Pilih berkas:</label>
        <input type="file" name="berkas" id="berkas">
        <input type="submit" value="Upload">
    </form>
</body>

</html>