<?php echo $this->session->flashdata('pesan'); ?>

<div class="container-fluid py-4">
    <div class="card-header">
        <a href="<?php echo base_url('Item/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Item</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Produk Management</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Item</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Item</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                    <th class="text-secondary opacity-7"> Action</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($item as $itm) : ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div><?= $no++ ?></div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="<?= base_url('uploads/operator') ?>/<?= $itm->Foto_item ?> " width="70px">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?= $itm->nama_item ?>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <?= $itm->harga ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('item/edit/' . $itm->id_item) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('item/delete/' . $itm->id_item) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>