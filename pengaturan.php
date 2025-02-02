<title>Profil</title>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card-shadow">
                    <div class="card-header">
                        <h5 class="m-0 text-center">Foto Profil</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="image/<?=$profil;?>" class="img-thumbnail rounded-circle shadow mb-2" width="100" alt="">
                        </div>
                        <form action="?page=pengaturan_proses" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="foto">Foto Profil</label>
                                <input type="file" name="foto" class="form-control" id="foto" accept="image/" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Upload</button>
                            <button type="reset" class="btn btn-secondary btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card-shadow">
                    <div class="card-header">
                        <h5 class="m-0 text-center">Ubah Password</h5>
                    </div>
                    <div class="card-body">
                        <form action="?page=password_baru" method="POST">
                            <div class="mb-3">
                                <label for="password_lama">Password Lama</label>
                                <input type="password" name="passlama" class="form-control" placeholder="Masukkan password lama" id="password_lama" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_baru">Password Baru</label>
                                <input type="password" name="passbaru" class="form-control" placeholder="Masukkan password baru" id="password_baru" required>
                            </div>
                            <div class="mb-3">
                                <label for="konfirmasi_password">Konfirmasi Password Baru</label>
                                <input type="password" name="konfpass" class="form-control" placeholder="Konfirm password baru" id="konfirmasi_password" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Ubah</button>
                            <button type="reset" class="btn btn-secondary btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
</div>