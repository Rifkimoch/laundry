<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Login Area</h4>
                                <p class="mb-0">Masukan Password dan Email Anda dengan benar</p>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message');
                                ?>
                                <form method="post" action="<?= base_url('login'); ?>">
                                    <div class="mb-3">
                                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" name="email" value="<?= set_value('email') ?>">
                                        <?= form_error('email', ' <small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" name="password">
                                        <?= form_error('password', ' <small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Login</button>
                                    </div>

                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="<?= base_url('login/regist'); ?>" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 
                        border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('asset/laundry-header.png');
          background-size: cover;">
                            <span class="mask bg-gradient-primary opacity-6"></span>
                            <h4 class="mt-5 text-white font-weight-bolder position-relative">Selamat Datang di Bisa Laundry</h4>
                            <!-- <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>