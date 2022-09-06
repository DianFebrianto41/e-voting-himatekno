<section class="content">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tabel Visi & Misi</h2>

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
                                            <th>Kandidat</th>
                                            <th>Visi</th>
                                            <th>Misi</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($rows as $row) : ?>
                                            <tr>

                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->nama_kandidat; ?></td>
                                                <td><?php echo $row->visi; ?></td>
                                                <td><?php echo $row->misi; ?></td>
                                                <td>

                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?= $row->id_visi ?>">
                                                        <i class="fa fa-pencil-square-o"></i> Edit</a>
                                                    <a href="<?php echo site_url('admin/visimisi/hapus/' . $row->id_visi); ?>" class="btn btn-danger" onclick="return confirm('Yakin data ingin dihapus?')">
                                                        <i class="fa fa-trash-o"></i> Delete</a>

                                                </td>

                                            </tr>
                                            <!-- ++SAMPEL START++ -->
                                            <div class="modal fade" id="modal-edit<?= $row->id_visi; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog  modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Update Kelas</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url() ?>admin/visimisi/update?id_visi=<?= $row->id_visi; ?>" method="post">
                                                                <div class="form-group">
                                                                    <label class="col-form-label" id="kandidat_id" name="kandidat_id">Kandidat <span class="required">*</span>
                                                                    </label>
                                                                    <select id="kandidat_id" name="kandidat_id" class="form-control">
                                                                        <option value="<?= $row->id; ?>" selected><?= $row->nama_kandidat; ?></option>
                                                                        <?php foreach ($kandidat as $k) : ?>
                                                                            <option value="<?= $k->id; ?>"> <?= $k->nama_kandidat; ?></option>
                                                                        <?php endforeach; ?>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Visi <span class="required">*</span>
                                                                    </label>
                                                                    <textarea name="visi" id="visi" class="form-control ckeditor"><?= $row->visi; ?></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-form-label">Misi <span class="required">*</span>
                                                                    </label>
                                                                    <textarea name="misi" id="misi" class="form-control ckeditor"> <?= $row->misi; ?></textarea>
                                                                </div>
                                                                <div class="ln_solid"></div>
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
                            <h2>Tambah Visi & Misi</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="<?php echo site_url('admin/visimisi/insert'); ?>" method="post">
                                <div class="form-group">
                                    <label class="col-form-label" id="kandidat_id" name="kandidat_id">Kandidat <span class="required">*</span>
                                    </label>
                                    <select id="kandidat_id" name="kandidat_id" class="form-control">
                                        <?php foreach ($kandidat as $k) : ?>
                                            <option value="<?= $k->id; ?>">
                                                <?= $k->nama_kandidat; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Visi <span class="required">*</span>
                                    </label>
                                    <textarea name="visi" id="visi" class="form-control ckeditor"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Misi <span class="required">*</span>
                                    </label>
                                    <textarea name="misi" id="misi" class="form-control ckeditor"></textarea>
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