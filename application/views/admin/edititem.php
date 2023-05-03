<?php foreach ($item as $itm) { ?>
    <form action="<?= base_url("Item/update"); ?>" method="POST" enctype="multipart/form-data">
        <div class="container-fluid py-2" style="display: flex; justify-content:center; width:50%;">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Item</p>
                                <a href="<?php echo base_url('Item/index') ?>" class="btn btn-primary btn-sm ms-auto"><i class="fa fa-sign-out" aria-hidden="true"></i> Close</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Halaman Edit</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Gambar Item</label>
                                        <input type="file" name="Foto_item" class="form-control" value="<?php echo $itm->Foto_item ?>"><br>
                                        <div>
                                            <img src="<?= base_url('uploads/operator') ?>/<?= $itm->Foto_item ?> " width="100px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama Item</label>
                                        <input type="hidden" name="id_item" value="<?php echo $itm->id_item ?>">
                                        <input class="form-control" type="text" name="nama_item" value="<?php echo $itm->nama_item ?>">
                                    </div>
                                </div>
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Harga</label>
                                        <input class="form-control" type="text" name="harga" value="<?php echo $itm->harga ?>">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-sm" value="Simpan"><i class="fa fa-save"></i> Simpan</button>
                            <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-save"></i>Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php } ?>