<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="http://localhost/satudata/assets/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="http://localhost/satudata/assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/assets/img/logo1.png') ?>" alt="" /></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url("data") ?>">Data</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url("galery") ?>">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url("tentang") ?>">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url("help") ?>">Bantuan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url("admin/login") ?>">Login</a></li>
                </ul>
            </div>
    </nav>
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-2"><img src="<?= base_url('upload/foto/' . $user1['image']) ?>" alt="" class="img-responsive img-fluid" style="max-width:70% height:auto;"></div>
                <div class="col-10">
                    <div class="text-left">
                        <h2 class="section-heading text-uppercase"><?= $user1['name'] ?></h2>
                        <h3 class="section-subheading text-muted">Dalam Satu Data</h3>
                    </div>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" action="<?= base_url('data/userid1/' . $user1['id']) ?>">
                        <div class="input-group">

                            <input type="text" class="form-control bg-light border-0 small" name='cari' id='cari' placeholder="Cari Data ..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-10">
                    <div class="bs-example">
                        <div class="list-group">
                            <?php
                            foreach ($user as $instansi) {
                            ?>
                                <a href="<?= base_url('upload/file/' . $instansi->file) ?>" class="list-group-item list-group-item-action" download>
                                    <div class="d-flex w-100 justify-content-between">
                                        <h4><?= $instansi->judul ?> - <?= $instansi->kategori ?></h4>
                                        <small><?= $instansi->tanggal ?></small>
                                    </div>
                                    <p><?= $instansi->file ?></p>
                                </a>
                            <?php } ?>
                            <!-- <a href="#" class="list-group-item list-group-item-action ">
        </div>
    </nav>
    <section class="page-section" id="services">
        <div class="container" style="">
            <div class="row" style="">
                <div class="col-2"><img src="<?= base_url('upload/foto/' . $user1['image']) ?>" alt="" class="img-responsive img-fluid" style="max-width:70% height:auto;"></div>
                <div class="col-10">
                    <div class="text-left">
                        <h2 class="section-heading text-uppercase"><?= $user1['name'] ?></h2>
                        <h3 class="section-subheading text-muted">Dalam Satu Data</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-10">
                    <div class="bs-example">
                        <div class="list-group">
                            <?php
                            foreach ($user as $instansi) {
                            ?>
                                <a href="<?= base_url('upload/file/' . $instansi['file']) ?>" class="list-group-item list-group-item-action" download>
                                    <div class="d-flex w-100 justify-content-between">
                                        <h4><?= $instansi->judul ?> - <?= $instansi->kategori ?></h4>
                                        <small><?= date('d F Y', $instansi->tanggal) ?></small>
                                    </div>
                                    <p><?= $instansi->file ?></p>
                                </a>
                            <?php } ?>
                            <?php echo $this->pagination->create_links(); ?>
                         <a href="#" class="list-group-item list-group-item-action ">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h4>Scientists found massive black hole</h4>
                                        <small>2 days ago</small>
                                    </div>
                                    <p>Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum.</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h4>NASA launches solar probe</h4>
                                        <small>3 days ago</small>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                </a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer-->
            <footer class="footer py-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                        <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/dinkominfokaro"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/kominfo.karo/"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/dinkominfokaro/"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="col-lg-4 text-lg-right"><a class="mr-3" href="#!">Privacy Policy</a><a href="#!">Terms of Use</a></div>
                    </div>
                </div>
        </div>
        </div>
    </section>

    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="http://localhost/satudata/assets//css/styles.css/assets/mail/jqBootstrapValidation.js"></script>
    <script src="http://localhost/satudata/assets//css/styles.css/assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="http://localhost/satudata/assets//css/styles.css/js/scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>