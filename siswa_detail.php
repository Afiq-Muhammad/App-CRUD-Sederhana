<?php
include 'koneksi.php';
$id = $_GET['id_detail'];
$tmp = mysqli_query($konek,"SELECT * FROM tb_siswa INNER JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan WHERE nisn='$id'");
$sis = mysqli_fetch_assoc($tmp);
?>

<title>Detail Siswa</title>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Detail Siswa</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover table-sm">
                  <tr>
                    <td style="width: 25%;">NISN</td>
                    <td><?= $sis['nisn']?></td>
                  </tr>
                  <tr>
                    <td>Nama Siswa</td>
                    <td><?= $sis['nama_siswa']?></td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td>
                    <td><?= $sis['tempat_lahir']?></td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td><?=date('d-m-Y', strtotime($sis['tanggal_lahir']))?></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td><?= $sis['jk']?></td>
                  </tr>
                  <tr>
                    <td>No. Handphone</td>
                    <td><?= $sis['no_hp']?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?= $sis['email']?></td>
                  </tr>
                  <tr>
                    <td>Jurusan</td>
                    <td><?= $sis['nama_jurusan']?></td>
                  </tr>
                  <tr>
                    <td>Kelas</td>
                    <td><?= $sis['nama_kelas']?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><?= $sis['alamat']?></td>
                  </tr>
                </table>
                <a href="?page=siswa" class="btn btn-secondary btn-sm mt-3"><i class="fa fa-reply-all"></i> Kembali</a>
              </div>
            </div>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</div>