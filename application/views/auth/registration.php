

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-4 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-4">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat sebuah akun !</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url ('auth/registration');?>">
                                <div class="form-group">
                                    <h7>Nama pengguna</h7>
                                    <input type="text" class="form-control form-control-user" id="name" name="name"
                                        placeholder="" value="<?= set_value('name'); ?>">
                                        <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <h7>NIP</h7>
                                    <input type="text" class="form-control form-control-user" id="nip" name="nip"
                                        placeholder="" value="<?= set_value('nip'); ?>">
                                        <?= form_error('nip','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <h7>Jabatan</h7>
                                    <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan"
                                        placeholder=""value="<?= set_value('jabatan'); ?>">
                                        <?= form_error('jabatan','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Password">
                                            <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Ulangi password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url(); ?>auth">Sudah punya akun? Masuk!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>