<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Transaction History Management</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Tansaksi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Grand Total</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Metode bayar</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Wakru Order</th>
                                    <th class="text-secondary opacity-7 ps-2"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="mb-0 text-sm">2023032955568749</h6>
                                    </td>
                                    <td class=" text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-danger">Menunggu</span>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">25,000</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">cash</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">Wed,29 Mar 2023, 15:20:40</h6>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('riwayat/detailtrans
                                        ') ?>" class="btn btn-warning btn-sm"><i class="fas fa-search"></i></a>
                                        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>