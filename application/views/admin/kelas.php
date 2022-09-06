<section class="content">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tabel Kelas</h2>

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
                                            <th>Kelas</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($rows as $row) : ?>
                                            <tr>

                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->nama; ?></td>
                                                <td>

                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?= $row->id_kelas ?>">
                                                        <i class="fa fa-pencil-square-o"></i> Edit</a>
                                                    <a href="<?php echo site_url('admin/kelas/hapus/' . $row->id_kelas); ?>" class="btn btn-danger" onclick="return confirm('Yakin data ingin dihapus?')">
                                                        <i class="fa fa-trash-o"></i> Delete</a>

                                                </td>

                                            </tr>
                                            <!-- ++SAMPEL START++ -->
                                            <div class="modal fade" id="modal-edit<?= $row->id_kelas; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog  modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Update Kelas</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url() ?>admin/kelas/update?id_kelas=<?= $row->id_kelas; ?>" method="post">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Kelas <span class="required">*</span>
                                                                    </label>
                                                                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $row->nama; ?>">
                                                                </div>

                                                                <div class="item form-group">
                                                                    <button type="submit" class="btn btn-success">Update</button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ++SAMPEL END++ -->
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tambah Kelas</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="<?php echo site_url('admin/kelas/insert'); ?>" method="post">
                                <div class="form-group">
                                    <label class="col-form-label">Kelas <span class="required">*</span>
                                    </label>
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama kelas" required>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
</section>