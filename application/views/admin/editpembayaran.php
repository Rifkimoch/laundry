<div class="container-fluid py-2" style="display: flex; justify-content:center; width:50%;">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Edit Harga</p>
                        <a href="<?php echo base_url('Item/index') ?>" class="btn btn-primary btn-sm ms-auto"><i class="fa fa-sign-out" aria-hidden="true"></i> Close</a>
                    </div>
                </div>
                <div class="card-body">
                    <hr class="horizontal dark">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama Item</label>
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Harga</label>
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Edit</button>
                    <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-save"></i>Reset</button>
                </div>
            </div>
        </div>
    </div>
</div>