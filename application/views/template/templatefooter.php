  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">



      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong><span>Himatekno</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
              Designed by <a href="">Dian Febrianto</a>
          </div>
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('/assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->

  <script src="<?php echo base_url('/assets/vendor/js/main.js'); ?>"></script>


  <!-- jQuery -->

  <script src="<?php echo base_url('/assets/vendor/js/jquery.js'); ?>"></script>
  <!-- Bootstrap -->


  <script src="<?php echo base_url('/assets/vendor/js/bootstrap.bundle.js'); ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url('/assets/vendor/js/fastclick.js'); ?>"></script>
  <!-- NProgress -->
  <script src="<?php echo base_url('/assets/vendor/js/nprogress.js'); ?>"></script>

  <!-- chart -->
  <script src="<?php echo base_url('/assets/vendor/js/Chart.bundle.min.js'); ?>"></script>

  <!-- jQuery custom content scroller -->
  <script src="<?php echo base_url('/assets/vendor/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>

  <!-- jQuery Ck editor -->
  <script src="<?php echo base_url('/assets/vendor/ckeditor/ckeditor.js'); ?>"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url('/assets/vendor/js/custom.js'); ?>"></script>


  <script src="<?php echo base_url('/assets/vendor/sweetalert/sweetalert2.all.min.js'); ?>"></script>
  <script>
      $(document).ready(function() {
          $('.nav-active').on('click', function() {
              $('.nav-active').removeClass('active');
              $(this).addClass('active');
          })

          $('.btn-success').on('click', function() {
              let nama_kandidat = $(this).data('nama_kandidat');
              let user_id = $(this).data('user_id');
              Swal.fire({
                  title: 'Apakah anda sudah yakin?',
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: 'green',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yakin!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      $.ajax({
                          type: 'post',
                          url: '<?php echo site_url('home/pilih_kandidat'); ?>',
                          dataType: 'json',
                          data: {
                              'nama_kandidat': nama_kandidat,
                              'user_id': user_id,

                          },

                          success: function(result) {
                              if (result.success == true) {

                                  Swal.fire({
                                      title: 'Terima kasih sudah berpartisipasi',

                                      icon: 'success',
                                      showCancelButton: false,
                                      confirmButtonColor: '#3085d6',
                                      cancelButtonColor: '#d33',
                                      confirmButtonText: 'Ok!'
                                  }).then((result) => {
                                      if (result.isConfirmed) {
                                          location.reload();
                                      }
                                  })
                              }
                          }
                      })
                  }
              })
          });
      });
  </script>
  </body>

  </html>