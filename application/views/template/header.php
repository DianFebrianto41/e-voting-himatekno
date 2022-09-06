<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title><?php echo $title; ?> </title> -->
    <title>E-Voting | Auth </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scada&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">



    <script src="<?php echo base_url('/assets/js/Chart.js'); ?>"></script>
</head>

<body id="body">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  shadow p-3 mb-5 bg-rounded white fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold">E-Voting</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-active active " href="<?php echo site_url('home/index'); ?>">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-active" href="<?php echo site_url('home/voting'); ?>">Voting</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" data-toggle="modal" data-target="#modalLogin"></i> Voter</a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#modalLogin"></i> Kandidat</a>
                        </div>
                    </li>
                    <?php if ($this->session->userdata('id') != NULL) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $this->session->userdata('nama'); ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-active" href="#">Registrasi</a>
                        </li>

                </ul>

            </div>
        <?php endif; ?>
        </div>
    </nav>


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
    <!-- end navbar -->