<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-Voting | Himatekno</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('/assets/vendor/css/style.css'); ?>" rel="stylesheet">

    <script src="<?php echo base_url('/assets/vendor/js/Chart.js'); ?>"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center ">
                <img src="<?php echo base_url('/assets/img/Logo HIMATEKNO HD.png'); ?>" alt="">
                <span>E-Voting</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <?php if ($this->session->userdata('id') != NULL) : ?>
                        <li><a class="nav-link scrollto active" href="<?php echo site_url('home/index'); ?>">Home</a></li>

                        <li><a class="nav-link scrollto" href="<?php echo site_url('home/voting'); ?>">Voting</a></li>

                        <li class="dropdown"><a href="#"><span><?php echo $this->session->userdata('nama'); ?></span> <i class="bi bi-chevron-down"></i></a>
                            <ul>

                                <li><a href="<?php echo site_url('auth/logout'); ?>">Log out</a></li>

                            </ul>
                        </li>

                    <?php endif; ?>

                    <!-- <li class="dropdown"><a class="getstarted scrollto" href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#modalLogin">Delegasi</a></li>

                        </ul>
                    </li> -->

                    <!-- <li class="dropdown"><a href="#"><span>Register</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Delegasi</a></li>
                            <li><a href="#">Kandidat</a></li>

                        </ul>
                    </li> -->
                    <li><a class="getstarted scrollto" href="#" data-toggle="modal" data-target="#modalLogin">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->





    <!-- modal login-->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Silahkan login terlebih dahulu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo site_url('auth/login'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-form-label">Nomor Induk Mahasiswa</label>
                            <input type="text" id="nim1" name="nim1" required=" required" class="form-control ">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input type="password" id="password1" name="password1" required="required" class="form-control ">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal login-->