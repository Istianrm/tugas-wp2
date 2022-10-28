<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <img src="<?= base_url('assets/img/istia.jpeg'); ?>" class="col-lg-5 d-none d-lg-block">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Pendaftaran Pacar Istia</h1>
                        </div>
                        <form class="user" action="<?php base_url('autentifikasi/registrasi') ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?= set_value('email'); ?>" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password1" class="form-control form-control-user" id="password1" placeholder="Kata Sandi">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password2" class="form-control form-control-user" id="password2" placeholder="Konfirmasi Kata Sandi">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Sekarang
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('autentifikasi/lupaPassword'); ?>">Lupa Kata Sandi?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('autentifikasi'); ?>">Sudah punya akun? Login!</a>
                        </div>
                    </div>
                </div>
                </img>
            </div>
        </div>

    </div>