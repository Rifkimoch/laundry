<body>
    <div class="container"><br />
        <h5>Item Pruduct Laundry</h5>
        <div class="row">
            <div class="col-md-6">
                <!-- <div class="card mb-4"> -->
                <div class="row">
                    <?php foreach ($data->result() as $row) : ?>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <br>
                                <div class="card-deck">
                                    <div class="card">
                                        <img src="<?= base_url('uploads/operator') ?>/<?= $row->Foto_item ?> " width="70px">
                                        <div class="caption ">
                                            <h6><?php echo $row->nama_item; ?></h6>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h6><?php echo number_format($row->harga); ?></h6>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="number" name="quantity" id="<?php echo $row->id_item; ?>" value="1" class="quantity form-control">
                                                </div>
                                            </div>
                                            <button class="add_cart btn btn-success btn-block" data-productid="<?php echo $row->id_item; ?>" data-productname="<?php echo $row->nama_item; ?>" data-productprice="<?php echo $row->harga; ?>">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- </div> -->
            </div>
            <div class="col-md-4">
                <h4>keranjang</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Items</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="detail_cart">

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.add_cart').click(function() {
                var id_item = $(this).data("productid");
                var nama_item = $(this).data("productname");
                var harga = $(this).data("productprice");
                var quantity = $('#' + id_item).val();
                $.ajax({
                    url: "<?php echo site_url('pembayaran/add_to_cart'); ?>",
                    method: "POST",
                    data: {
                        id_item: id_item,
                        nama_item: nama_item,
                        harga: harga,
                        quantity: quantity
                    },
                    success: function(data) {
                        $('#detail_cart').html(data);
                    }
                });
            });


            $('#detail_cart').load("<?php echo site_url('pembayaran/load_cart'); ?>");


            $(document).on('click', '.romove_cart', function() {
                var row_id = $(this).attr("id");
                $.ajax({
                    url: "<?php echo site_url('pembayaran/delete_cart'); ?>",
                    method: "POST",
                    data: {
                        row_id: row_id
                    },
                    success: function(data) {
                        $('#detail_cart').html(data);
                    }
                });
            });
        });
    </script>