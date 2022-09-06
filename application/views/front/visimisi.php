<main id="main">
    <!-- ======= Visi Misi Section ======= -->
    <section id="visimisi" class="visimisi">

        <div class="container mt-5" data-aos="fade-up">
            <div class="row gx-0">
                <img src="<?php echo base_url('/assets/vendor/img/' . $kandidat->foto); ?>" class="img-circle">
                <h4 class="display-4 text-center"><?php echo $kandidat->nama_calon; ?></h4>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <table class="table">
                            <tr class="text-center">
                                <th>Visi</th>
                                <th>Misi</th>

                            </tr>
                            <tr>
                                <td><?php echo $visi->visi; ?></td>
                                <td><?php echo $visi->misi; ?></td>
                            </tr>
                        </table>
                        <a href="<?php echo site_url('home/voting'); ?>" class="btn btn-primary" type="reset">Kembali</a>
                    </div>
                </div>

    </section><!-- End Visi Misi Section -->
</main>