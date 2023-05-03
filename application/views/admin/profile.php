<?php foreach ($profile as $pro) { ?>
    <form action="<?= base_url("profile/update"); ?>" method="POST">
        <div class="container-fluid py-4">
            <div class="row container">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Profile</p>
                                <a href="<?= base_url('profile/edit/' . $pro->id_user) ?>" class="btn btn-primary btn-sm ms-auto" type="submit" value="simpan">Edit</a>
                            </div>
                        </div>
                        <?php
                        $id_user = 1;
                        foreach ($profile as $pro) : ?>
                            <div class="card-body">
                                <p class="text-uppercase text-sm">User Information</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama </label>
                                            <input class="form-control" type="text" value="<?= $pro->nama_user ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">No Telp</label>
                                            <input class="form-control" type="text" value="<?= $pro->nomor_telfon ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Email</label>
                                            <input class="form-control" type="email" value="<?= $pro->email ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Password</label>
                                            <input class="form-control" type="password" value="<?= $pro->password ?>">
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Contact Information</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Alamat</label>
                                            <input class="form-control" type="text" value="<?= $pro->alamat ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tanggal Lahir</label>
                                            <input class="form-control" type="text" value="New York">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                                            <input class="form-control" type="text" value="<?= $pro->jenis_kelamin ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php } ?>