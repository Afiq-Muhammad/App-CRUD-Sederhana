<?php 
include 'koneksi.php';
$id = $_GET['id_ubah'];
$tmp = mysqli_query($konek,"SELECT * FROM tb_jurusan WHERE id_jurusan='$id'");
$jus = mysqli_fetch_assoc($tmp); 
?>

<title>Ubah Jurusan</title>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Ubah Jurusan</h3>
              </div>
              <div class="card-body">
                <form action="?page=jurusan_ubah_proses" method="POST" autocomplete="off">
                  <input type="hidden" name="id" value="<?= $jus['id_jurusan'] ?>">
                    <div class="mb-3">
                        <label for="program_keahlian">Jurusan</label>
                        <input type="text" name="jus" value="<?= $jus['nama_jurusan']?>" class="form-control" id="jurusan" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Ubah</button>
                    <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                    <a href="?page=jurusan" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>