  <!-- footer content -->
  <footer>
    <div class="pull-right">
      Himpunan Mahasiswa Teknologi Informasi
      <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>

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

  <!-- Datatables -->
  <script src="<?php echo base_url('/assets/vendor/datatables/js/jquery.dataTables.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/dataTables.bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/dataTables.buttons.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/buttons.bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/buttons.flash.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/buttons.html5.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/buttons.print.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/dataTables.fixedHeader.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/dataTables.keyTable.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/dataTables.responsive.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/responsive.bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/js/dataTables.scroller.js'); ?>"></script>




  <!-- Code injected by live-server -->
  <script type="text/javascript">
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
      (function() {
        function refreshCSS() {
          var sheets = [].slice.call(document.getElementsByTagName("link"));
          var head = document.getElementsByTagName("head")[0];
          for (var i = 0; i < sheets.length; ++i) {
            var elem = sheets[i];
            var parent = elem.parentElement || head;
            parent.removeChild(elem);
            var rel = elem.rel;
            if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
              var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
              elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
            }
            parent.appendChild(elem);
          }
        }
        var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
        var address = protocol + window.location.host + window.location.pathname + '/ws';

      })();
    } else {
      console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
    // ]]>
  </script>
  </body>

  </html>