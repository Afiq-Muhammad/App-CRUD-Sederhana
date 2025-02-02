<title>Kelas</title>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Kelas</h3>
              </div>
              <div class="card-body">
                <a href="?page=kelas_tambah" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus-circle"></i> Tambah Kelas</a>
                <table id="example1" class="table table-bordered table-striped table-hover table-sm">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Nama Kelas</th>
                      <th class="text-center"><i class="fa fa-cog"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include 'koneksi.php';
                        $no = 1;
                        $tmp = mysqli_query($konek,"SELECT * FROM tb_kelas");
                      while ($kel = mysqli_fetch_assoc($tmp)) :
                    ?>
                    <tr>
                      <td class="align-middle text-center"><?= $no++; ?></td>
                      <td class="align-middle"><?= $kel['nama_kelas']?></td>
                      <td class="text-center">
                        <a href="?page=kelas_ubah&id_ubah=<?= $kel['id_kelas'] ?>" class="btn btn-warning btn-sm" title="Ubah"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="?page=kelas_hapus&id_hapus=<?= $kel['id_kelas'] ?>"  onclick="return confirm('Apakah Anda yakin hapus?');" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-alt"></i> Hapus</a>
                      </td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</div>