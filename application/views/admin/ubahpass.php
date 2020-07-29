<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Karo Satu Data - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/admin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/admin') ?>">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-database"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Karo Satu Data - Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/upload'); ?>">
                    <i class="fas fa-file-upload"></i>
                    <span>Upload Data</span></a>

                <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
                    <i class="far fa-folder-open"></i>
                    <span>Lihat Data</span></a>

                <!-- Divider -->
                <hr class="sidebar-divider ">

            </li>

            <div class="sidebar-heading">
                Galeri
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/uploadgaleri'); ?>">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Upload Galeri</span></a>


                <hr class="sidebar-divider ">
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('upload/foto/' . $user['image']) ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('admin/detailadmin'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="<?= base_url('admin/ubahpass'); ?>">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ubah Password
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('admin/login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="card border-primary mb-3 mx-auto" style="max-width: 75%;">
                        <div class="card-header">Ubah Password</div>
                        <div class="card-body text-primary">
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('admin/ubahpass') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="lama" class="col-md-4">Password Lama</label>
                                    <input type="password" class="form-control col-md-8" id="lama" name="lama" placeholder="Masukkan Password Lama">
                                    <?= form_error('lama', '<small class ="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <label for="baru" class="col-md-4">Password Baru</label>
                                    <input type="password" class="form-control col-md-8" id="baru" name="baru" placeholder="Masukkan Password Baru">
                                    <?= form_error('baru', '<small class ="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <label for="ulang" class="col-md-4">Ulangi Password Baru</label>
                                    <input type="password" class="form-control col-md-8" id="ulang" name="ulang" placeholder="Ulangi Masukkan Password Baru">
                                    <?= form_error('ulang', '<small class ="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <input type="submit" class="btn btn-primary btn-sm" id="simpan" value="Simpan Perubahan" placeholder="Ulangi Masukkan Password Baru">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; The Most Angry 2020. </span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Klik tombol "Keluar" jika anda ingin keluar.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-primary" href="<?= base_url('admin/login/logout'); ?>">Logout</a>
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