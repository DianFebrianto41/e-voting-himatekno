<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Admin | Himatekno </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/bootstrap.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/font-awesome.min.css'); ?>">

    <!-- NProgress -->
    <link href="<?php echo base_url('/assets/vendor/css/nprogress.css'); ?>" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?php echo base_url('/assets/vendor/css/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('/assets/vendor/css/custom.css'); ?>" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?php echo base_url('/assets/vendor/datatables/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/vendor/datatables/css/buttons.bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/vendor/datatables/css/fixedHeader.bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/vendor/datatables/css/responsive.bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/vendor/datatables/css/scroller.bootstrap.css'); ?>" rel="stylesheet">




    <script src="<?php echo base_url('/assets/vendor/js/Chart.js'); ?>"></script>
</head>

<body class="nav-md footer_fixed">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <!-- <img src="<?php echo base_url('/assets/vendor/img/Logo HIMATEKNO HD.png'); ?>" class="user-profile" alt=""> -->
                        <a href="index.html" class="site_title text-center"><span class="">E-Voting</span></a>
                    </div>

                    <div class="clearfix"></div>


                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Menu Administrator</h3>
                            <ul class="nav side-menu">
                                <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
                                    <a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                                </li>

                                <li><a><i class="fa fa-edit"></i> Manajemen Data <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="<?php echo $this->uri->segment(2) == 'kelas' ? 'active' : '' ?>">
                                            <a href="<?php echo site_url('admin/kelas'); ?>"> Kelas</a>
                                        </li>

                                        <li class="<?php echo $this->uri->segment(2) == 'kandidat' ? 'active' : '' ?>">
                                            <a href="<?php echo site_url('admin/kandidat'); ?>"> Kandidat</a>
                                        </li>

                                        <li class="<?php echo $this->uri->segment(2) == 'visimisi' ? 'active' : '' ?>">
                                            <a href="<?php echo site_url('admin/visimisi'); ?>"> Visi & Misi</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="<?php echo $this->uri->segment(2) == 'suara' ? 'active' : '' ?>">
                                    <a href="<?php echo site_url('admin/suara'); ?>"><i class="fa fa-bar-chart-o"></i> Hasil Suara</a>
                                </li>

                                <li class="<?php echo $this->uri->segment(2) == 'user' ? 'active' : '' ?>">
                                    <a href="<?php echo site_url('admin/user'); ?>"><i class="fa fa-user"></i> User</a>
                                </li>

                                <li class="<?php echo $this->uri->segment(2) == 'logout' ? 'active' : '' ?>">
                                    <a href="<?php echo site_url('auth/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>



                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">

                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>