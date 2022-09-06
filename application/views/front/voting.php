<main id="main">
    <!-- ======= Team Section ======= -->
    <section id="voting" class="voting">

        <div class="container mt-5" data-aos="fade-up">

            <header class="section-header">
                <p>Voting</p>
            </header>

            <div class="row gy-4">
                <?php foreach ($kandidat as $knd) : ?>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?php echo base_url('/assets/vendor/img/' . $knd->foto); ?>" class="card-img-top" alt="" style="width: 18rem;" style="border-radius:20px;">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4><?php echo $knd->nama_kandidat; ?></h4>
                                <span><?php echo $knd->nama_calon; ?></span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="<?php echo site_url('home/visimisi/' . $knd->id); ?>" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat Visi & Misi</a>

                                <?php if ($user->status == 0) : ?>
                                    <a href="#" class="btn btn-success" data-nama_kandidat="<?php echo $knd->nama_kandidat; ?>" data-user_id="<?php echo $this->session->userdata('id'); ?>">Pilih <?php echo $knd->nama_kandidat; ?></a>
                                <?php else : ?>
                                    <button class="btn btn-success" disabled>Pilih <?php echo $knd->nama_kandidat; ?></button>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </section>
</main>