<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aplikasi Pendaftaran Santri Baru Tahun Pelajaran 2024/2025 PonPes Darul Lughah Wal Karomah">
  <meta name="keywords" content="santri baru, tahun pelajaran 2024/2025, pendaftaran, PonPes, darul lughah wal karomah, DWK">
  <meta name="author" content="IT PPDWK">
  <link rel="icon" href="<?= base_url('viho/') ?>assets/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="<?= base_url('') ?>assets/img/logo/Logo_Pesantren.png" type="image/x-icon">
  <title>.:: PSB PPDWK 2024/2025 ::.</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/style.css">
  <link id="color" rel="stylesheet" href="<?= base_url('viho/') ?>assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('viho/') ?>assets/css/responsive.css">
</head>

<body>
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">
      <div class="loader-p"></div>
    </div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?= base_url('viho/') ?>assets/images/login/2Ok2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          <div class="login-card">
            <form class="theme-form login-form" method="post" action="<?= base_url('login/masuk') ?>">
              <h4>Halaman Login</h4>
              <h6>Silahkan login menggunakan akun yang sudah dikirimkan!</h6>
              <div class="form-group">
                <label>Username</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                  <input class="form-control" type="text" required="" name="username" placeholder="Input username">
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" type="password" name="password" required="" placeholder="*********">
                  <div class="show-hide"><span class="show"> </span></div>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <input id="checkbox1" type="checkbox">
                  <label class="text-muted" for="checkbox1">Remember password</label>

                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Login</button>
                </div>
                <div class="login-social-title">
                  <h5>atau</h5>
                </div>

                <p>Belum punya akun?<a class="ms-2" href="<?= base_url('daftar') ?>">Daftar Akun</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- page-wrapper end-->
  <!-- latest jquery-->
  <script src="<?= base_url('viho/') ?>assets/js/jquery-3.5.1.min.js"></script>
  <!-- feather icon js-->
  <script src="<?= base_url('viho/') ?>assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="<?= base_url('viho/') ?>assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Sidebar jquery-->
  <script src="<?= base_url('viho/') ?>assets/js/sidebar-menu.js"></script>
  <script src="<?= base_url('viho/') ?>assets/js/config.js"></script>
  <!-- Bootstrap js-->
  <script src="<?= base_url('viho/') ?>assets/js/bootstrap/popper.min.js"></script>
  <script src="<?= base_url('viho/') ?>assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- Plugins JS start-->
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="<?= base_url('viho/') ?>assets/js/script.js"></script>
  <!-- login js-->
  <!-- Plugin used-->
</body>

</html>