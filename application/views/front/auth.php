<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Selamat datang di sistem voting pemilihan ketua Himatekno</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Tentukan pilihanmu</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#register" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Register</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?php echo base_url('/assets/vendor/img/Logo HIMATEKNO HD.png'); ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= infos Section ======= -->
    <section id="info" class="info">

        <div class="container" data-aos="fade-up">


            <header class="section-header">

                <p>Cara Mengikuti Voting</p>
            </header>
            <div class="row gx-0">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <img src="<?php echo base_url('/assets/vendor/img/values-3.png'); ?>" class="" alt="">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center">
                    <div class="row d-flex align-items-center gy-4">
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="info-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Terdaftar & memiliki akun</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="info-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Pilih kandidat</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="info-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Login</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="info-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Klik tombol voting</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="info-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Pilih Menu Voting</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="info-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Selesai</h3>
                            </div>
                        </div>
                    </div>
                </div>




            </div> <!-- / row -->
        </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="register" class="register">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h2>Belum punya akun?</h2>
                        <p>Silahkan daftar pada form di bawah ini! </p>


                        <form action="<?php echo site_url('auth/registrasi'); ?>" method="post">
                            <div class="form-group">
                                <label class="col-form-label">Nama Lengkap <span class="required">*</span>
                                </label>
                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo set_value('nama'); ?>" required>
                                <?php echo form_error('nama', '<span class="text-dark small pl-2">', '</span>'); ?>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Nomor Induk Mahasiswa <span class="required">*</span>
                                </label>
                                <input type="text" id="nim" name="nim" class="form-control " value="<?php echo set_value('nim'); ?>" required>
                                <?php echo form_error('nim', '<span class="text-dark small pl-2">', '</span>'); ?>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label " id="kelas_id" name="kelas_id">Kelas <span class="required">*</span>
                                </label>
                                <select id="kelas_id" name="kelas_id" class="form-control" required>

                                    <?php foreach ($kelas as $kls) : ?>
                                        <option value="<?= $kls->id_kelas; ?>"> <?= $kls->nama; ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Email <span class="required">*</span>
                                </label>
                                <input type="text" id="email" name="email" class="form-control " value="<?php echo set_value('email'); ?>" required>
                                <?php echo form_error('email', '<span class="text-dark small pl-2">', '</span>'); ?>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Password <span class="required">*</span>
                                </label>
                                <input type="password" id="password" name="password" class="form-control " required>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group mt-3">
                                <button type="submit" class="btn btn-primary">Registrasi</button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?php echo base_url('/assets/vendor/img/values-3.png'); ?>" class="img-fluid" alt="">
                </div>


            </div>
        </div>

    </section><!-- End About Section -->


</main>


<!-- modal login-->
<div class="modal fade" id="modalLogin" tabindex="-3" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
                    <div class="ln_solid"></div>
                    <div class="item form-group mt-3">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Registrasi</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- end modal login-->