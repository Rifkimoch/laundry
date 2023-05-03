<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg " style="background-image: url('asset/laundry-header.png'); background-position: top;">
        <span class="mask bg-gradient-primary opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Registrasi Akun mu !</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-6 col-lg-5 col-md-12 mx-auto">
                <div class="card z-index-0">
                    <div class="card-body">
                        <form class="user" method="post" action="<?= base_url('login/regist') ?>">
                            <div class="row row-space">
                                <div class="col-6">
                                    <label class="label">Nama</label>
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="nama" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>') ?>
                                </div>

                                <div class="col-6">
                                    <label class="label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class=" row row-space">
                                <div class="col-6">
                                    <label class="label">password</label>
                                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password1" value="<?= set_value('password1'); ?>">
                                    <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class=" col-6">
                                    <label class="label">confirm password</label>
                                    <input type="password" class="form-control" placeholder=" Confirm Password" aria-label="Password" name="password2" value="<?= set_value('password2'); ?> ">
                                </div>
                            </div>
                            <div class=" row row-space">
                                <div class="col-6">
                                    <label class="label">No Telpon</label>
                                    <input type="text" class="form-control" placeholder="No Telp" aria-label="Name" name="notlpn" value="<?= set_value('notlpn'); ?>">
                                    <?= form_error('notlpn', ' <small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class=" col-6">
                                    <hr>
                                    <div class="input-group">
                                        <label class="label">Jenis kelamin</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Laki Laki
                                                <input type="radio" checked="checked" name="gender" value="1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Perempuan
                                                <input type="radio" name="gender" value="2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="label">Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" aria-label="Name" name="alamat" value="<?= set_value('alamat'); ?>">
                                    <?= form_error('alamat', ' <small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class=" form-check form-check-info text-start">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign up</button>
                            </div>
                            <p class="text-sm mt-3 mb-0">Login jika kamu sudah mempunyai akun <a href="<?= base_url('login'); ?>" class="text-primary font-weight-bolder">Sign in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>