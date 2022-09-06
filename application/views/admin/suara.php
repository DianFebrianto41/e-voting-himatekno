<section class="content">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tabel Suara</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="card-box table-responsive">
                                <div class="ml-3">
                                    <?php echo $this->session->flashdata('message'); ?>


                                </div>
                                <table class="table table-hover table-bordered table-active dt-responsive nowrap" id="datatable-responsive" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                            <th>Nama Kandidat</th>
                                            <th>Tanggal Pemilihan</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($rows as $row) : ?>
                                            <tr>

                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->nama; ?></td>
                                                <td><?php echo $row->nama_kandidat; ?></td>
                                                <td><?php echo $row->created; ?></td>
                                                <td>
                                                    <a href="<?php echo site_url('admin/suara/hapus/' . $row->id_suara); ?>" class="btn btn-danger" onclick="return confirm('Yakin data ingin dihapus?')">
                                                        <i class="fa fa-trash-o"></i> Delete</a>

                                                </td>

                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row pt-2">

                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">

                                <div class="dropdown d-flex justify-content-end">
                                    <a href="<?= base_url(); ?>admin/suara/print" class="btn btn-primary mr-2 "><i class="fa fa-print pr-2"></i>Print</a>

                                    <div class="dropdown">
                                        <a class="btn btn-info dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-calendar pr-2"></i>Periode
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left">
                                            <div class="m-3">
                                                <form method="POST" action="<?= base_url(); ?>admin/suara">
                                                    <div class="form-group">
                                                        <label for="date_from">Dari Tanggal</label>
                                                        <input type="date" class="form-control" id="date_from" name="date_from" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date_to">Sampai Tanggal</label>
                                                        <input type="date" class="form-control" id="date_to" name="date_to" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-info">Tampilkan data</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="<?= base_url(); ?>admin/suara" class="btn btn-outline-secondary mr-2 "><i class="fa fa-search pr-2"></i>Data Hari ini</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /page content -->
</section>