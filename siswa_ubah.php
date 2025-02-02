<?php 
include 'koneksi.php';
$id = $_GET['id_ubah'];
$tmp = mysqli_query($konek, "SELECT * FROM tb_siswa INNER JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan WHERE nisn='$id'");
$sis = mysqli_fetch_assoc($tmp);
?>

<title>Ubah Siswa</title>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Ubah Siswa</h3>
              </div>
              <div class="card-body">
                      <form action="?page=siswa_ubah_proses" method="POST" autocomplete="off">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label" for="nisn">NISN</label>
                              <input style="cursor: not-allowed;" type="number" name="nisn" value="<?=$sis['nisn']?>" class="form-control" id="nisn" readonly>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label" for="no_hp">No. Handphone</label>
                                <input type="text" name="no_hp" value="<?=$sis['no_hp']?>" class="form-control" id="no_hp" required>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label" for="nama">Nama Siswa</label>
                              <input type="text" name="nama_siswa" value="<?=$sis['nama_siswa']?>" class="form-control" id="nama" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" name="email" value="<?=$sis['email']?>" class="form-control" id="email" required>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="mb-3">
                              <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                              <input type="text" name="tempat_lahir" value="<?=$sis['tempat_lahir']?>" class="form-control" id="tempat_lahir" required>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="mb-3">
                              <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                              <input type="date" name="tanggal_lahir" value="<?=$sis['tanggal_lahir']?>" class="form-control" id="tanggal_lahir" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label" for="jurusan">Jurusan</label>
                                <select name="jus" class="form-control" id="jurusan" required>
                                  <option value="<?= $sis['id_jurusan']?>"><?= $sis['nama_jurusan'] ?></option>
                                    <?php
                                      include 'koneksi.php';
                                        $tmp=mysqli_query($konek,"SELECT * FROM tb_jurusan");
                                          while ($jus=mysqli_fetch_assoc($tmp)) :
                                    ?>
                                  <option value="<?= $jus['id_jurusan']?>"><?= $jus['nama_jurusan'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label" for="jk">Jenis Kelamin</label><br>
                              <?php 
                                if ($sis['jk'] == 'Laki-laki') {
                              ?>
                                <input type="radio" name="jk" value="Laki-laki" required checked> Laki-laki &emsp; &emsp;
                                <input type="radio" name="jk" value="Perempuan" required> Perempuan
                              <?php } else { ?>
                                <input type="radio" name="jk" value="Laki-laki" required> Laki-laki &emsp; &emsp;
                                <input type="radio" name="jk" value="Perempuan" required checked> Perempuan
                              <?php } ?>
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label" for="kelas">Kelas</label>
                                <select name="kel" class="form-control" id="kelas" required>
                                <option value="<?= $sis['id_kelas']?>"><?= $sis['nama_kelas'] ?></option>
                                    <?php
                                      include 'koneksi.php';
                                        $tmp=mysqli_query($konek,"SELECT * FROM tb_kelas");
                                          while ($jus=mysqli_fetch_assoc($tmp)) :
                                    ?>
                                  <option value="<?= $jus['id_kelas']?>"><?= $jus['nama_kelas'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                              </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="alamat">Alamat</label>
                          <textarea name="alamat" id="alamat" class="form-control" rows="3" required><?= $sis['alamat'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Ubah</button>
                        <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                        <a href="?page=siswa" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
                      </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>