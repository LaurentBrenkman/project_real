
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">SPK Pegawai</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <h6>Nama pengguna</h6>
                                            <input type="text" class="form-control form-control-user"
                                                id="email"  name="email" placeholder="">
                                        </div>
                                        <div class="form-group">
                                        <h6>Kata sandi</h6>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="">
                                        </div>
                                        <!-- Pembuatan tombol Masuk dan daftar -->
                                        <div class="container">
                                            <div class="form-group row justify-content-center">
                                                <div class="row col-md">
                                                    <button type="submit" class="btn btn-info btn-user btn-block">
                                                    Masuk
                                                    </button>
                                                </div>
                                                <div class="col-md">
                                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                                        Daftar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- Akhir sintak tombol -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url(); ?>auth/registration">Buat akun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   