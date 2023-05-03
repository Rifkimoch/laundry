<?php echo form_open_multipart('Item/tambah_aksi'); ?>
<div class="container-fluid py-2" style="display: flex; justify-content:center; width:50%;">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Tambah Item</p>
                        <a href="<?php echo base_url('Item/index') ?>" class="btn btn-primary btn-sm ms-auto"><i class="fa fa-sign-out" aria-hidden="true"></i> Close</a>
                    </div>
                </div>
                <div class="card-body">
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Halaman Tambah</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Gambar Item</label>
                                <input type="file" name="Foto_item" size="20" accept="image/*" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama Item</label>
                                <input type="text" name="nama_item" class="form-control" required="">
                                <?= form_error('nama_item', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Harga</label>
                                <input type="text" name="harga" class="form-control" required="">
                                <?= form_error('harga', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                    <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-save"></i>Reset</button>

                </div>
            </div>

        </div>

    </div>

</div>

<?php echo form_close(); ?>