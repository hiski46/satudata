<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Karo Satu Data - Registrasi </title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/admin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/admin/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block  " style="padding: 5%">
            <img class="img-fluid" src="http://localhost/satudata/assets/assets/img/logokaro.gif" alt="">
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
              </div>
              <form class="user" method="POST" action="<?= base_url('admin/registrasi') ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama " value="<?= set_value('nama') ?>">
                  <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email " value="<?= set_value('email') ?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulang Password">
                  </div>
                </div>
                <button class="btn btn-outline-success btn-user btn-block" type="submit">Registrasi</button>
                <hr>
                <a class="" href="<?= base_url('admin/operator') ?> " style="text-decoration: none;">
                  <button class="btn btn-outline-danger btn-user btn-block" type="button">Batal</button>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/admin/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/admin/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>