<section class="content">
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-6">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="count"><?php echo $total_user; ?></div>
            <h3>Total User</h3>
            <div class="div m-2 ml-3">
              <a href="<?php echo site_url(
                          'admin/user'
                        ); ?>" class="mt-2">Lihat selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-bar-chart"></i></div>
            <div class="count"><?php echo $total_suara; ?></div>
            <h3>Total Pemilih</h3>

            <div class="div m-2 ml-3">
              <a href="<?php echo site_url(
                          'admin/suara'
                        ); ?>" class="mt-2">Lihat selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="alert alert-warning" role="alert">
              <h4 class="alert-heading"><i class="fa fa-warning"></i> Perolehan Suara</h4>
              <hr>
              <a href="" class="btn btn-success"><i class="fa fa-refresh"></i> Refresh untuk melihat perolehan suara terbaru!</a>
            </div>
            <div class="x_content">
              <div class="col-md-12 col-sm-12 ">
                <canvas id="chartSuara" width="400" height="160"></canvas>
              </div>


            </div>
          </div>

        </div>


      </div>
    </div>





  </div>
  <!-- /page content -->
</section>

<script>
  const ctx = document.getElementById('chartSuara').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
      datasets: [{
        label: '#Hasil Suara',
        data: [
          <?php echo $kandidat1; ?>,
          <?php echo $kandidat2; ?>,
          <?php echo $kandidat3; ?>,
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',


        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',


        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>