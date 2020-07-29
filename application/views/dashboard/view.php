<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Beranda - Karo Satu Data</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet" />
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
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div id="myCarousel" class="carousel slide row d-flex justify-content-center" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide="1"></li>
                            <li data-target="#myCarousel" data-slide="2"></li>
                        </ol> -->
            <div calss="p-2 col-sl-5 mx-auto my-auto " style="position:absolute; z-index:10; top:15%; margin-top:5%;">
                <div class="masthead-subheading">MEJUAH-JUAH</div>
                <br>
                <div class="masthead-heading text-uppercase">Karo Satu Data</div>
                <br>
                <br>
                <form action="<?= base_url('auth/cari') ?>" method="post" id="myform">
                    <div class="p-1 bg-light rounded rounded-half shadow-sm mb-4" style="padding : 1px">
                        <div class="input-group">
                            <input type="text" placeholder="Cari data" value="" aria-describedby="button-addon1" class="form-control border-0 bg-transparent text-dark text-bolt" name="data" id="data">
                            <div class="input-group-append">
                                <button id="tombolcari" type="submit" class="btn btn-link text-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="carousel-inner" role="">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="http://localhost/satudata/assets/assets/img/kia1.jpg" alt="">
                    <!-- <div class="carousel-caption ">
                                    <div class="masthead-subheading">MEJUAH-JUAH</div>
                                    <div class="masthead-heading text-uppercase">Karo Satu Data</div>
                                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
                                </div> -->
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://localhost/satudata/assets/assets/img/kia3.jpg" alt="">
                    <!-- <div class="carousel-caption ">
                                    <div class="masthead-subheading">MEJUAH-JUAH</div>
                                    <div class="masthead-heading text-uppercase">Karo Satu Data</div>
                                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
                                </div> -->
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://localhost/satudata/assets/assets/img/kia2.jpg" alt="">
                    <!-- <div class="carousel-caption ">
                                    <div class="masthead-subheading">MEJUAH-JUAH</div>
                                    <div class="masthead-heading text-uppercase">Karo Satu Data</div>
                                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
                                </div> -->
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://localhost/satudata/assets/assets/img/kia4.jpg" alt="">
                    <!-- <div class="carousel-caption ">
                                    <div class="masthead-subheading">MEJUAH-JUAH</div>
                                    <div class="masthead-heading text-uppercase">Karo Satu Data</div>
                                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
                                </div> -->
                </div>
            </div>
            <a class="left carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <i class="fas fa-angle-double-left size : 5x"></i>
                <a class="right carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <i class="fas fa-angle-double-right size : 5x"></i>
                </a>
        </div>
        <!-- <div class="container">
                <div class="masthead-subheading">MEJUAH-JUAH</div>
                <div class="masthead-heading text-uppercase">Karo Satu Data</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div> -->
    </header>
    <!-- Services-->
    <section class="page-section" id="hasil">
        <div class="container">
            <div class="row">
                <h3>Hasil Pencarian...</h3>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-10">
                    <div class="bs-example">
                        <div class="list-group">
                            <div class="view" id="view">
                                <?php
                                if (!empty($data)) {
                                    foreach ($data as $dat) {
                                        $file = $dat->file;
                                ?>
                                        <a href="<?= base_url('upload/file/' . $file) ?>" class="list-group-item list-group-item-action" download>
                                            <div class="d-flex w-100 justify-content-between">
                                                <h4><?= $dat->judul ?> - <?= $dat->kategori ?></h4>
                                                <small><?= $dat->tanggal ?></small>
                                            </div>
                                            <p><?= $dat->file ?></p>
                                        </a>
                                    <?php } ?>
                                <?php } else {
                                    echo "<h4> Tidak Ada Data </h4>";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/config.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function hasil() {
            document.getElementById('hasil').scrollIntoView();
            window.setTimeout(function() {
                top();
            }, 2000);
        }
        hasil();
    </script>
</body>

</html>