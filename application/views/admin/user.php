<section class="content">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tabel User</h2>

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
                                            <th>Nim</th>
                                            <th>Nama Lengkap</th>
                                            <th>Kelas</th>
                                            <th>email</th>
                                            <th>level</th>
                                            <th>status</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($rows as $row) : ?>
                                            <tr>

                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->nim; ?></td>
                                                <td><?php echo $row->nama_user; ?></td>
                                                <td><?php echo $row->nama; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->level; ?></td>
                                                <td>
                                                    <?php if ($row->status == 1) { ?>
                                                        <button type="button" class="btn btn-primary btn-sm"> <i class="fa fa-check">Sudah Memilih</i></button>
                                                    <?php } else { ?>
                                                        <button type="button" class="btn btn-warning btn-sm"> <i class="fa fa-warning">Belum Memilih</i></button>
                                                    <?php } ?>


                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit<?= $row->id ?>">
                                                        <i class="fa fa-pencil-square-o"></i> Edit</a>
                                                    <a href="<?php echo site_url('admin/user/hapus/' . $row->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ingin dihapus?')">
                                                        <i class="fa fa-trash-o"></i> Delete</a>

                                                </td>

                                            </tr>
                                            <!-- ++SAMPEL START++ -->
                                            <div class="modal fade" id="modal-edit<?= $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog  modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Update Kelas</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url() ?>admin/user/update?id=<?= $row->id; ?>" method="post">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Nomor Induk Mahasiswa <span class="required">*</span>
                                                                    </label>
                                                                    <input type="text" id="nim" name="nim" class="form-control" value="<?= $row->nim; ?>" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Nama Lengkap <span class="required">*</span>
                                                                    </label>
                                                                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $row->nama_user; ?>" readonly>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-form-label">Kelas <span class="required">*</span>
                                                                    </label>
                                                                    <input type="text" id="kelas_id" name="kelas_id" class="form-control" value="<?= $row->nama; ?>" readonly>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-form-label">Email <span class="required">*</span>
                                                                    </label>
                                                                    <input type="text" id="email" name="email" class="form-control" value="<?= $row->email; ?>" readonly>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-form-label">Status <span class="required">*</span>
                                                                    </label>
                                                                    <input type="text" id="status" name="status" class="form-control" value="<?= $row->status; ?>">
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

            </div>
        </div>
        <!-- /page content -->
</section>