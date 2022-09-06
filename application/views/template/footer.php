<div class="container">
    <footer>
        <!-- <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div> -->
        <div class="clearfix"></div>
    </footer>
</div>

<!-- jQuery -->

<script src="<?php echo base_url('/assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap.bundle.js'); ?>"></script>

<!-- FastClick -->
<script src="<?php echo base_url('/assets/js/fastclick.js'); ?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('/assets/js/nprogress.js'); ?>"></script>
<!-- jQuery custom content scroller -->

<script src="<?php echo base_url('/assets/js/Chart.bundle.min.js'); ?>"></script>

<!-- jQuery custom content scroller -->
<script src="<?php echo base_url('/assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js'); ?>"></script>

<script src="<?php echo base_url('/assets/sweetalert/sweetalert2.all.min.js'); ?>"></script>


<!-- chart -->
<script src="<?php echo base_url('/assets/js/Chart.bundle.min.js'); ?>"></script>
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