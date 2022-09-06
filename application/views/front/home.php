<main id="main">
    <!-- ======= About Section ======= -->
    <section id="suara" class="suara">

        <div class="container mt-5" data-aos="fade-up">
            <div class="row gx-0 mt-3">
                <header class="section-header">
                    <p>Perolehan Suara</p>
                </header>
                <canvas id="chartSuara" width="400" height="160"></canvas>



            </div>
        </div>

    </section><!-- End About Section -->
</main>

<script>
    const ctx = document.getElementById('chartSuara').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
            datasets: [{
                label: '#Hasil Suara',
                data: [
                    <?php echo $kandidat1 ?>,
                    <?php echo $kandidat2 ?>,
                    <?php echo $kandidat3 ?>,

                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 206, 86, 0.2)',


                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 0.2)',


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