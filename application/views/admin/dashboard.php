<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Karo Satu Data - Dashboard Admin</title>

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
            <div class="sidebar-heading">
                Administrator
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Upload
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/upload'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Upload Data</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Statistik</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lihat Data</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <div class="sidebar-heading">
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <div class="sidebar-heading">
                Data dan Statistik
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Upload Data</span></a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                                <img class="img-profile rounded-circle" src="http://localhost/satudata/assets/assets/img/logokaro.gif">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
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
                    <h1 class="h3 mb-4 text-gray-800" style="text-align:center"> SELAMAT DATANG ADMIN</h1>
                    <h1 class="h3 mb-4 text-gray-800" style="text-align:center">KARO SATU DATA </h1>
                    <h1 class="h3 mb-4 text-gray-800" style="text-align:center">KABUPATEN KARO</h1>

                    <form class="form-inline mr-auto w-100">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-2 " placeholder="Cari Data" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr>

                    <?php foreach ($user1 as $x) { ?>
                        <div class="list-group">
                            <div href="#" class="list-group-item list-group-item-action ">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><?= $x->judul; ?> - <?= $x->kategori; ?></h5>
                                    <div class="row">
                                        <small class="col"><?= date('d F Y', $x->tanggal); ?></small>
                                        <small class="col">Terakhir Diubah :<?php if($x->tgl_perbarui==NULL){
                                                                                echo date('d F Y', $x->tanggal);
                                                                            }else{
                                                                                echo date('d F Y', $x->tgl_perbarui);
                                                                            } ?></small>
                                    </div>
                                    
                                </div>
                                <p class="mb-1"><?= $x->file; ?></p>
                                <small>

                                    <a><i class="fas fa-chevron-circle-down text-primary" data-toggle="modal" data-target="#exampleModalLong<?=$x->id_data?>"> Details</i></a>
                                    <a><i class="fas fa-trash-alt text-danger" data-toggle="modal" data-target="#modalsaya<?=$x->id_data?>"> Hapus</i></a>

                                </small>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- /.container-fluid -->

                </div>

                <!-- modal -->
                <!-- Button trigger modal -->

                <!-- Modal -->
                <?php foreach ($user1 as $data ) {?>
                <div class="modal fade" id="exampleModalLong<?= $data->id_data ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content p-2 pl-2">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Form Edit Data</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/Dashboard/edit') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="judul"> Judul </label>
                                        <input name="judul" type="text" class="form-control" id="judul" value="<?= $data->judul ?>">
                                    </div>
                                    <div class="form-group row">    
                                        <label for="keterangan">Keterangan</label>
                                        <textarea name="keterangan" type="password" class="form-control" id="keterangan"  ><?= $data->keterangan ?></textarea>
                                    </div>
                                    <div class="form-group row">    
                                        <input name="id" type="hidden" value="<?= $data->id_data ?>">
                                    </div>
                                    <div class="form-group">                                      
                                        <input name="file" type="file" class="form-control-file" id="file">
                                    </div>
                                    <div class="form-group" style="max-width: 70%;">
                                        <label for="sel1">Kategori :</label>
                                        <select name="kategori" class="form-control" id="sel1" placeholder="<?= $data->kategori ?>">
                                            <option value="" disabled>Kategori</option>
                                            <option value="keuangan">Keuangan</option>
                                            <option value="kepegawaian">Kepegawaian</option>
                                            <option value="informasi">Informasi</option>
                                            <option value="sosial">Sosial</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="upload" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-lg active btn-sm" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <?php foreach ($user1 as $data ) {?>
                <div class="modal fade" id="modalsaya<?= $data->id_data ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p> Apakah Anda Yakin ? </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal"> Batal </button>
                                <a href="<?= base_url('admin/Dashboard/hapus/' . $data->id_data) ?>"><button type="button" class="btn btn-light btn btn-outline-primary"> Hapus </button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

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
                    <h5 class="modal-title" id="exampleModalLabel"> Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">pilih "Keluar" jika yakin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('admin/login/logout'); ?>">Keluar</a>
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